<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class User_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'users';

        public function CalculIMC($poids, $taille){
            $taille = $taille/100;
            $imc = $poids/$taille;
            return $imc;
        }
        public function GetObjectif($iduser){
            $requete = "SELECT * FROM objectif WHERE id_users = %s";
            $requete = sprintf($requete, $iduser);
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function GetDetailsUsers($iduser){
            $requete = "SELECT * FROM detail_user WHERE id_users = %s";
            $requete = sprintf($requete, $iduser);
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function GetUserById($id){
            $requete = "SELECT * FROM users WHERE id = %s";
            $requete = sprintf($requete, $id);
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function insererObjectif($kilos, $date,$id){
            $requete = "INSERT INTO objectif (kilos, id_users, dateobjectif) values (%s, %s, '%s')";
            $requete = sprintf($requete, $kilos, $id, $date);
            $query = $this->db->query($requete);
        }
        public function inseretDetails($poids, $taille,$date,$id){
            $requete = "INSERT INTO detail_user (poids, date_detail,  id_users, taille) VALUES (%s, '%s', %s, %s)";
            $requete = sprintf ($requete,$poids, $date, $id, $taille, $poids);
            $query = $this->db->query($requete);
        }
        
        public function insertuser($name, $email, $mdp, $genre) {
            $requete = "INSERT INTO users (nom, email,  mdp, id_genre) VALUES ('%s', '%s', '%s', %s)";
            $requete = sprintf($requete, $name, $email, $mdp, $genre);
            $query = $this->db->query($requete);
            $id_user = $this->db->insert_id();  
            return $id_user;
        }
        
        public function findObjectifByUser($id_user) {
            $this->db->order_by('dateobjectif', 'DESC'); 
            $this->db->limit(1);
            return $this->db->get_where('objectif', array('id_users' => $id_user))->row();
        }

        // Vérifie les informations de connexion de l'utilisateur
        public function login_admin($email, $mdp) {
            $this->db->where('email', $email);
            $query = $this->db->get('admin');            
            if ($query->num_rows() == 1) {
                $user = $query->row();
                if ($user->mdp === $mdp) {
                    return $user;
                } else {
                    throw new Exception('Mot de passe incorrect');
                }
            } else {
                throw new Exception('Nom d\'utilisateur incorrect');
            }
        }
        // Vérifie les informations de connexion de l'utilisateur
        public function login($email, $mdp) {
            $this->load->model('objectif_model');
            $this->db->where('email', $email);
            $query = $this->db->get($this->table);            
            if ($query->num_rows() == 1) {
                $user = $query->row();
                $user->objectif = $this->findObjectifByUser($user->id);
                if ($user->mdp === $mdp) {
                    return $user;
                } else {
                    throw new Exception('Mot de passe incorrect');
                }
            } else {
                throw new Exception('Nom d\'utilisateur incorrect');
            }
        }

        public function saveUser($email, $password) {
            $data = ['email' => $email, 'mdp' => $password];
            $this->create($data);
        }

        // Récupère tous les utilisateurs
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un utilisateur par son ID
        public function findById($id) {
            $this->load->model('objectif_model');
            $this->load->model('argent_model');
            $user = $this->db->get_where($this->table, array('id' => $id))->row();
            $user->objectif = $this->objectif_model->findByUser($user->id);
            $user->argent = $this->argent_model->getArgent($user->id);
            return $user;
        }
        
        // Crée un nouvel utilisateur
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour un utilisateur
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime un utilisateur
        public function delete($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, array('state' => 1));
        }

    }
?>