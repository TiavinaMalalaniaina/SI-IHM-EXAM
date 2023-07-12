<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function StatistiqueUtilisateur(){
        $this->load->model('Admin_model');
        $activite = $this->Admin_model->EvolutionClient();
        $data['activite'] = $activite;
        $this->load->view('Statistique.php', $data);
    }
    public function StatistiqueArgent(){
        $this->load->model('Admin_model');
        $statistique = $this->Admin_model->EvolutionCaisse();
        $data['statistique'] = $statistique;
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
}