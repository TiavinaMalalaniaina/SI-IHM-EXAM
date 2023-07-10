<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Activite_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'activite';
        
        // Récupère tous les régimes
        public function findAll() {
            return $this->db->get($this->table)->result();
        }

        public static function sfindById($id) {
            $regime = new Regime_Model();
            return $regime->db->get_where($regime->table, array('id' => $id))->row();
        }

        // Récupère une régime par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }
        
        // Crée un nouvele régime
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour une régime
        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        }
        
        // Supprime une régime
        // public function delete($id) {
        //     $this->db->where('id', $id);
        //     return $this->db->update($this->table, array('state' => 1));
        // }

    }
?>