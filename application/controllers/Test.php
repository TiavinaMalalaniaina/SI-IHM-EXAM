<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index() {
        $id_user = 1;
        $this->load->model('argent_model');
        $this->load->view('test', ['argent' => $this->argent_model->getArgent($id_user)]);
    }
}