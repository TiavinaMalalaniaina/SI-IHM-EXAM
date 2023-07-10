<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Plat_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'plat';
        private $id_matin = 1;
        private $id_midi = 2;
        private $id_soir = 3;
        
        public function getRandomPlat($id_regime, $day) {
            $this->load->model('regime_model');
            $this->load->model('nourriture_model');
            $regime = $this->regime_model->findById($id_regime);
            $details = array();
            $nourriture_plat = array();
            foreach ($regime->detail as $detail) {
                if ($detail->id_day == $day) {
                    $detail->all_nourriture = $this->nourriture_model->findByIdTypeNourriture($detail->id_type_nourriture);
                    $nourriture_plat[] = $detail->all_nourriture[rand(0, count($detail->all_nourriture)-1)];
                }
            }
            return $nourriture_plat;
        }


        // Récupère tous les régimes
        public function findAll() {
            $this->load->model('detailRegime_model');
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