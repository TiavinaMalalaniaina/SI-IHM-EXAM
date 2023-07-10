<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Argent_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table_gain = 'argent_user';
        private $table_depense = 'depense_user';
        
        public function getArgent($id_user) {
            return $this->getArgentGagne($id_user) - $this->getArgentDepense($id_user);
        }

        // Tous l'argent ajouté par l'utilisateur
        public function getArgentGagne($id_user) {
            $argent_total = 0; 
            $argents = $this->db->get_where($this->table_gain, array('id_user' => $id_user))->result();
            foreach ($argents as $argent) {
                $argent_total += $argent->valeur;            
            }
            return $argent_total;
        }

        // Tous l'argent depensé par l'utilisateur
        public function getArgentDepense($id_user) {
            $argent_total = 0; 
            $argents = $this->db->get_where($this->table_depense, array('id_users' => $id_user))->result();
            foreach ($argents as $argent) {
                $argent_total += $argent->valeur;            
            }
            return $argent_total;
        }

        // Récupère tous les utilisateurs
        public function findAll() {
            return $this->db->get($this->table_gain)->result();
        }
        
        // Récupère un utilisateur par son ID
        public function findById($id) {
            return $this->db->get_where($this->table_gain, array('id' => $id))->row();
        }
        
        // Crée un nouvel utilisateur
        public function create($data) {
            $this->db->insert($this->table_gain, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour un utilisateur
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table_gain, $data);
        }
        
        // Supprime un utilisateur
        // public function delete($id) {
        //     $this->db->where('id', $id);
        //     return $this->db->update($this->table_gain, array('state' => 1));
        // }

    }
?>