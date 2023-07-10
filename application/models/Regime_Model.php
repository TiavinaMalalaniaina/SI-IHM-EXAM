<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Regime_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'regime';
        
        public function getPlat($id_regime) {
            $regime = $this->findById($id_regime);
            
        }

        public function findAllByUser($id_user) {
            $this->load->model('detailRegime_model');
            $this->load->model('objectif_model');
            $regimes = $this->db->get($this->table)->result();
            foreach ($regimes as $regime) {
                $regime->detail = $this->detailRegime_model->findByRegime($regime->id);
                $regime->objectif = $this->objectif_model->findByUser($id_user);
            }
            return $regimes;
        } 

        // Récupère tous les régimes
        public function findAll() {
            $this->load->model('detailRegime_model');
            $this->load->model('objectif_model');
            $regimes = $this->db->get($this->table)->result();
            foreach ($regimes as $regime) {
                $regime->detail = $this->detailRegime_model->findByRegime($regime->id);
            }
            return $regimes;
        }

        // Récupère une régime par son ID
        public function findById($id) {
            $this->load->model('detailRegime_model');
            $regime = $this->db->get_where($this->table, array('id' => $id))->row();
            $regime->detail = $this->detailRegime_model->findByRegime($regime->id);
            return $regime;
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