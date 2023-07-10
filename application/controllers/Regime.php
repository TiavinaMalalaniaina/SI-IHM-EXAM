<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
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
