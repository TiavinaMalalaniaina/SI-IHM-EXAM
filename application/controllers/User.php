<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index () {
        redirect('/user/inscrire');
    }
    
    public function log($message = null) {
        $this->load->view('log.php', ['error_message' => urldecode($message)]);
    }


    public function login() {
        try {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->session->set_userdata('user', $this->user_model->login($email, $password));
            $this->session->set_userdata('id_user', $this->user_model->login($email, $password)->id);
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->order_by('debut','DESC');
            $this->db->limit(1);
            $regime = $this->db->get('regime_user')->row();
            $user = $this->user_model->findById($this->session->userdata('id_user'));
            if ($user->objectif != null) {
                if ($regime != null) redirect('regime/actuelle');
                else redirect('regime/choix');
            } else {
                redirect('user/inscription');
            }
        } catch (Exception $e) {
            redirect('user/log/'.urlencode($e->getMessage()));
        }
    }
   
    public function logout() {
        $this->session->sess_destroy();
        redirect('user/log');
    }

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

    public function inscrire($message = null){
        $this->load->view('inscriptionuser.php', ['error_message' => urldecode($message)]);
    }
    public function inscription($message = null){
        $id_user = $this->session->userdata('id_user');
        $user = $this->user_model->findById($id_user);
        $this->load->view('weight', ['error_message' => urldecode($message), 'user' => $user]);
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
        $this->load->model('regimeUser_model');
        $this->user_model->inseretDetails($_POST['poids'],$_POST['taille'],$_POST['datepoidspoids'],$_POST['iduser']);
        $this->user_model->insererObjectif($_POST['kilo'],$_POST['datepoidspoids'],$_POST['iduser']);
        $imc = $this->user_model->CalculIMC($_POST['poids'],$_POST['taille']);
        $data['imc'] = $imc;
        $data['poids'] = $_POST['poids'];
        $data['taille'] = $_POST['taille']; 
        $id_user = $this->session->userdata('id_user');
        $user = $this->user_model->findById($id_user);
        $this->db->where('id_user', $id_user);
        $this->db->order_by('debut','DESC');
        $this->db->limit(1);
        $regime = $this->db->get('regime_user')->row();
        if ($regime != null)  $haveRegime = true;
        else $haveRegime = false;
        $data['user'] = $user;
        $data['have'] = $haveRegime;
        $this->load->view('AfficheImc', $data);
    }

    public function Profil(){
        $this->load->model('user_model');
        $result = $this->user_model->GetUserById(3);
        $donees = $this->user_model->GetDetailsUsers(3);
        $objectif = $this->user_model->GetObjectif(3);
        $data['result'] = $result;
        $data['donnees'] = $donees;
        $data['objectif'] = $objectif;
        $this->load->view('Profil', $data);        
    }
}