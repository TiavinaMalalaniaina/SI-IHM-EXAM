<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $user = $this->session->userdata('user');
        if ($user == null) redirect('welcome');
        $this->load->model('code_model');
        $this->load->model('argent_model');
    }

    public function form() {
        $user = $this->session->userdata('user');
        $argent = $this->argent_model->getArgent($user->id);
        $codes = $this->code_model->findAll();
        $this->load->view('code', ['argent'=> formatMoney($argent), 'codes' => $codes]);
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function validateCode($id_waiting) {
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
    }
	
    public function insertCode() {
        try {
            $code_string = $this->input->post('code_string');
            $user = $this->session->userdata('user');
            $this->code_model->validateCode($code_string);
            $this->code_model->createWaitingCode($user->id, $code_string);
            $this->code_model->useCode($code_string);
            $this->load->view('insertCode');
        } catch (Exception $e) {
            $this->load->view('error', ['message_error' => $e->getMessage()]);
        }
    }

    public function add($code_string, $valeur) {
        try {
            $this->code_model->validateCode($code_string);
            $this->load->view('error', ['message_error' => 'Code existant']);
        } catch (Exception $e) {
            try {
                $data = array(
                    'code' => $code_string,
                    'valeur' => $valeur
                );
                $this->code_model->create($data);
                $this->load->view('insertCode');
            } catch (Exception $e) {
                $this->load->view('error', ['message_error' => $e->getMessage()]);
            }
        }
    }
}