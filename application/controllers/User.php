<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index () {
        redirect('/user/log');
    }
    
    public function log($message = null) {
        $this->load->view('log.php', ['error_message' => urldecode($message)]);
    }

    public function login() {
        try {
            $email = $this->input->get('email');
            $password = $this->input->get('password');
            $this->session->set_userdata('user', $this->user_model->login($email, $password));
            redirect('welcome');
        } catch (Exception $e) {
            redirect('user/log/'.urlencode($e->getMessage()));
        }
    }
   
    public function logout() {
        $this->session->sess_destroy();
        redirect('user/log');
    }
<<<<<<< Updated upstream

    public function sign() {
        $this->load->view('sign.php');
    }

    public function signin() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmation = $this->input->post('confirmation');
        if ($confirmation != $password) redirect('user/log/'.urlencode("Les mot de passes entrée sont différents"));
        $this->user_model->saveUser($email, $password);
        redirect('user/log');
    }

=======
    public function inscrire($message = null){
        $this->load->view('inscriptionuser.php', ['error_message' => urldecode($message)]);
    }
    public function inscription($message = null){
        
        $this->load->view('weight.php', ['error_message' => urldecode($message)]);
    }
    public function inscriptionusers() {
        if (isset($_POST['username'])) {
            $this->load->model('user_model');
            $id_user = $this->user_model->insertuser($_POST['username'], $_POST['useremail'], $_POST['usermdp'], $_POST['usergenre']);
            $this->session->set_userdata('id_user', $id_user); 
            $this->load->view('weight');
        }
    }

    public function insererDetailsUsers(){
        $this->load->model('user_model');
        $this->user_model->inseretDetails($_POST['poids'],$_POST['taille'],$_POST['datepoidspoids'],$_POST['iduser']);
        $this->user_model->insererObjectif($_POST['kilo'],$_POST['datepoidspoids'],$_POST['iduser']);
        $this->load->view('weight.php');
    }
>>>>>>> Stashed changes
}