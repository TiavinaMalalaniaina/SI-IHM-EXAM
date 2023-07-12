<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    public function index(){
        redirect ('/Profil/AfficheProfil');
    }
    public function AfficheProfil(){
        $this->load->view('Profil');
    }
}
?>