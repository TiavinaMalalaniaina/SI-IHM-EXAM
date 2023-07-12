<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite extends CI_Controller {
    public function index(){ 
        redirect('/Activite/liste');
    }
    public function liste(){
        $this->load->model('Activite_model');
        $activite = $this->Activite_model->GetAllActivite();
        $data['activite'] = $activite;
        $this->load->view('ListeActivite', $data);
    }
    public function ModifierComposant($id){
        $this->load->model('Activite_model');
        $activite = $this->Activite_model->GetDetailActivite($id);
        $type = $this->Activite_model->GetType();
        $data['activite'] = $activite;
        $data['type'] = $type;
        $this->load->view('ModifierActivite', $data);
    }
    public function DoModificationComposant(){
        $quantite = $this->input->post('quantite');
        $id = $this->input->post('id');
        $idactivite = $this->input->post('idactivite');
        $duree = $this->input->post('duree');
        $this->load->model('Activite_model');
        $activite = $this->Activite_model->Update($id, $duree, $quantite, $idactivite);
    }
}
?> 