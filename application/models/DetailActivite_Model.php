<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class DetailActivite_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'detail_activite';
        
        // Récupère tous les régimes
        public function findAll() {
            return $this->db->get($this->table)->result();
        }

        public function findByActivite($id_activite) {
            $this->load->model('typeActivite_model');
            $details = $this->db->get_where($this->table, array('id_activite' => $id_activite))->result();
            foreach ($details as $detail) {
                $detail->type_activite = $this->typeActivite_model->findById($detail->id_type_activite);
            }
            return $details; 
        }

        // Récupère une régime par son ID
        public function findById($id) {
            $activite = $this->db->get_where($this->table, array('id' => $id))->row();
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