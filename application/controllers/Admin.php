<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function StatistiqueArgent() {
        $this->load->model('Admin_model');
        $user = $this->Admin_model->EvolutionClient();
        $statistique = $this->Admin_model->EvolutionCaisse(); 
        $userDate = array();
        $userArray = array();
        for($i=0; $i<count($user); $i++){
            array_push($userArray, $user[$i]->count);
            array_push($userDate, $user[$i]-> dateobjectif);
        }   
        $stat = array();
        for($i=0; $i<count($statistique); $i++){
            array_push($stat, $statistique[$i]->valeur);
        }
        $daty = array();
        for($i=0; $i<count($statistique); $i++){
            array_push($daty, $statistique[$i]->date_depense);
        }
        $data['userdate'] = $userDate;
        $data['user'] = $userArray;
        $data['daty'] = $daty;
        $data['stat'] = $stat;
        $positive = $this->Admin_model->NombreObjectif(1)[0]->count;
        $negative = $this->Admin_model->NombreObjectif(-1)[0]->count; 
        $total = $positive+$negative;
        $valeur = array();
        array_push($valeur, ($positive*100/$total));
        array_push($valeur, ($negative*100/$total)); 
        $data['valeur'] = $valeur; 
        $this->load->view('Header.php');
        $this->load->view('Statistique.php', $data);
    }
    
    public function validationForm() {
        $this->load->model('code_model');
        $codes = $this->code_model->findAllWaitingCode();
        $this->load->view('validation', ['codes' => $codes]);
    }

    public function validateCode($id_waiting) {
        $this->load->model('code_model');
        $state = array(
            'status' => 10
        );
        $waiting = $this->code_model->findWaitingCodeById($id_waiting);
        $code = $this->code_model->findById($waiting->id_code);
        $this->code_model->update($waiting->id_code, $state);
        $this->code_model->validateWaitingCode($waiting->id, $state);
        $data = array(
            'valeur' => $code->valeur,
            'date_insertion' => date('Y-m-d'),
            'id_user' => $waiting->id_users
        );
        $this->argent_model->create($data);
        redirect('/code/validationForm');
    }
    public function log() {
        $this->load->view('log_admin');
    }

    public function login() {
        try {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->session->set_userdata('admin', $this->user_model->login_admin($email, $password)->id);
            redirect('admin/validationform');
        } catch (Exception $e) {
            redirect('admin/log/'.urlencode($e->getMessage()));
        }
    }

    public function index() {
        redirect('/admin/log');
    }
}