<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
    public function CreateRegime(){
        if (isset($_POST['username'])) {
            $this->load->model('user_model');
            $id_user = $this->Regime_model->CreateRegime($_POST['username'], $_POST['useremail'], $_POST['usermdp'], $_POST['usergenre']);
            $this->session->set_userdata('id_user', $id_user); 
            $this->load->view('weight');
        }
    }
    
}
