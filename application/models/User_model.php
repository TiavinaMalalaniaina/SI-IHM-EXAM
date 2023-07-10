<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class User_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'users';
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
       
        
        // Vérifie les informations de connexion de l'utilisateur
        public function login($email, $mdp) {
            $this->db->where('email', $email);
            $query = $this->db->get($this->table);            
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

        // Récupère tous les utilisateurs
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un utilisateur par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
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