<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Nourriture_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'nourriture';
        
        // Récupère tous les Nourritures
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère une nourriture par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }

        // Récupère une nourriture par son type
        public function findByIdTypeNourriture($id_type) {
            return $this->db->get_where($this->table, array('id_type_nourriture' => $id_type))->result();
        }
        
        // Crée un nouvele nourriture
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour une nourriture
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime une nourriture
        // public function delete($id) {
        //     $this->db->where('id', $id);
        //     return $this->db->update($this->table, array('state' => 1));
        // }

    }
?>