<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('regimeActivite_model');
        $this->load->model('regime_model');
    }

    public function choix() {
        $user = $this->session->userdata('user');
        $regimes = $this->regimeActivite_model->getRegime($user->objectif->kilos);
        $this->load->view('choix', ['regimes' => $regimes]);
    }
	
    public function detail($id_regime) {
        
        $this->load->model('detailRegime_model', 'detail');
        $this->load->model('objectif_model');
        $id_user = $this->session->userdata('id_user');
        $regime = $this->regimeActivite_model->findById($id_regime);
        $regime->detail = $this->detailRegime_model->findByRegime($regime->id);
        $regime->objectif = $this->objectif_model->findByUser($id_user);
        $regime->duree_total = (intval($regime->objectif->kilos / $regime->regime->poids)+1) * $regime->duree;
        $regime->prix_total = floatval($regime->prix) * intval($regime->duree_total / $regime->duree);
        var_dump($regime);
        $this->load->view('paiement', ['regime' => $regime]);
    }

    public function paiement($id_regime) {
        date_default_timezone_set('Indian/Antananarivo');
        $this->load->model('regimeUser_model');
        $this->load->model('platUser_model');
        $this->load->model('argent_model');
        $id_user = $this->session->userdata('id_user');
        $user = $this->user_model->findById($id_user);
        $regime = $this->regimeActivite_model->findById($id_regime);
        $regime->detail = $this->detailRegime_model->findByRegime($regime->id);
        $regime->objectif = $this->objectif_model->findByUser($id_user);
        $regime->duree_total = (intval($regime->objectif->kilos / $regime->regime->poids)+1) * $regime->duree;
        $regime->prix_total = floatval($regime->prix) * intval($regime->duree_total / $regime->duree);
        $regime->plat = $this->platUser_model->getAllPlat($regime);
        try {
            checkPaiement($regime->prixTotal, $user->argent);
            $data = array(
                'valeur' => $regime->prix_total,
                'id_users' => $id_user,
                'date_depense' => date('Y-m-d')
            );
            $this->argent_model->depense($data);
        } catch (Exception $e) {
            redirect('regime/detail/'.$id_regime);
        }
        $data = array(
            'id_regime_activite' => $regime->id,
            'id_user' => $id_user,
            'debut' => date('Y-m-d')
        );
        $id_regime_user = $this->regimeUser_model->create($data);
        foreach ($regime->plat as $plats) {
            foreach ($plats as $plat_day) {
                foreach ($plat_day as $plat) {
                    if (is_array($plat) || is_object($plat)) {
                        foreach ($plat as $nourriture) {
                            if (is_object($nourriture)) {
                                $data = array(
                                    'id_regime_user' => $id_regime_user,
                                    'id_nourriture' => $nourriture->id,
                                    'quantite' => $nourriture->quantite,
                                    'day' => $nourriture->day,
                                    'date_plat' => $plat_day['date']  
                                );
                                $this->platUser_model->create($data);
                            } else {
                                $data = array(
                                    'id_regime_user' => $id_regime_user,
                                    'id_nourriture' => $nourriture['nourriture']->id,
                                    'quantite' => $nourriture['quantite'],
                                    'id_day' => $nourriture['day'],
                                    'date_plat' => $plat_day['date']  
                                );
                                $this->platUser_model->create($data);
                            }
                        }
                    }
                }
            }
        }
        redirect('regime/choix');
    }

    public function test($id_regime, $day) {
        $this->load->model('plat_model', 'plat');
        $nourritures = $this->plat->getRandomPlat($id_regime, $day);
        var_dump($nourritures);

    }

    public function insertionRegime(){  
        $this->load->model('Regime_model');
        $id_regime = $this->Regime_model->CreateRegime($_POST['Regime'], $_POST['Poids'], $_POST['Duree']);
        $this->session->set_userdata('idregime', $id_regime); 
        echo ($id_regime);
        redirect('Regime/log');
    }
    public function index () {
        redirect('/Regime/log');
    }
    
    public function insertionComposant(){ 
        $this->load->model('Regime_model');
        $valeurs_matin = $this->input->post('matin');
        $valeurs_midi = $this->input->post('midi');
        $valeurs_soir = $this->input->post('soir');
        $valeurs_nom = $this->input->post('nom'); 

        $id_regime = $this->Regime_model->CreateRegime($_POST['Regime'], $_POST['Poids'], $_POST['Duree']);
        for ($i = 0; $i < count($valeurs_matin); $i++) { 
            $this->Regime_model->CreateDetailRegime(11, $valeurs_nom[$i], $valeurs_matin[$i], $id_regime);
            $this->Regime_model->CreateDetailRegime(12, $valeurs_nom[$i], $valeurs_midi[$i], $id_regime);
            $this->Regime_model->CreateDetailRegime(13, $valeurs_nom[$i], $valeurs_soir[$i], $id_regime);
        }
                
    }
    public function log() {
        $this->load->model('Regime_model');
        $nourriture = $this->Regime_model->GetAllNourriture();
        $day = $this->Regime_model->GetAllDay();
        $data['nourriture'] = $nourriture;
        $data['day'] = $day;
        $this->load->view('CrudRegime', $data);
    }
    public function ModifierRegime(){
        $this->load->model('Regime_model');
        $regime = $this->Regime_model->GetAllRegime();
        $data['regime'] = $regime;
        $this->load->view('ListeRegime',$data);
    }
    public function ModifierComposant($id){
        $this->load->model('Regime_model');
        $regime = $this->Regime_model->GetRegimeById($id);
        $valeurs = $this->Regime_model-> GetNourriture ($id); 
        $data['regime'] = $regime;
        $data['matin'] = $valeurs ; 
        $this->load->view('ModificationRegime',$data);
    }
    public function DoModificationComposant(){
        $quantite = $this->input->post('quantite');
        $id = $this->input->post('id');
        $this->load->model('Regime_model');
        $this->Regime_model-> UpdateDetailRegime($id, $quantite);
        
    }
    
    
}
