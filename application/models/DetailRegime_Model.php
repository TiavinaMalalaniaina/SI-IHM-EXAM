<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class DetailRegime_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'detail_regime';
        
        // Récupère tous les details
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère une régime par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }

        // Récupère les détails du régime
        public function findByRegime($id_regime) {
            $this->load->model('typeNourriture_model', 'typeNourriture');
            $regimes = $this->db->get_where($this->table, array('id_regime' => $id_regime))->result();
            foreach ($regimes as $regime) {
                $regime->type = $this->typeNourriture->findById($regime->id_type_nourriture);
            }
            return $regimes;
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