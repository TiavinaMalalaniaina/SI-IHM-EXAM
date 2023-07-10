<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Argent extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $user = $this->session->userdata('user');
        // if ($user == null) redirect('welcome');
        $this->load->model('argent_model');
        $this->load->model('code_model');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}


}