<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class PlatUser_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'plat_user';
        
        public function getRandomPlat($id_regime, $day) {
            $this->load->model('regime_model');
            $this->load->model('nourriture_model');
            $regime = $this->regime_model->findById($id_regime);
            $nourriture_plat = array();
            $index = 0;
            foreach ($regime->detail as $detail) {
                if ($detail->id_day == $day) {
                    $detail->all_nourriture = $this->nourriture_model->findByIdTypeNourriture($detail->id_type_nourriture);
                    $nourriture_plat[$index]['nourriture'] = $detail->all_nourriture[rand(0, count($detail->all_nourriture)-1)];
                    $nourriture_plat[$index]['quantite'] = $detail->quantite;
                    $nourriture_plat[$index]['day'] = $day;
                    $index++;
                }
            }
            return $nourriture_plat;
        }



        public function getAllPlat($regime) {
            $plats = array();
            $date = DateTime::createFromFormat('Y-m-d', date('Y-m-d')); 
            $date->modify('+1 day'); 
            for ($i=0; $i < $regime->duree_total; $i++) { 
                $day = $date->format('Y-m-d'); 
                $plat_day[0]['plat'] = $this->getRandomPlat($regime->id, 1);
                $plat_day[0]['date'] = $day;
                $plat_day[1]['plat'] = $this->getRandomPlat($regime->id, 2);
                $plat_day[1]['date'] = $day;
                $plat_day[2]['plat'] = $this->getRandomPlat($regime->id, 3);
                $plat_day[2]['date'] = $day;
                $plats[] = $plat_day;
                $date->modify('+1 day'); 
            }
            return $plats;
        }

        // Récupère tous les régimes
        public function findAll() {
            return $this->db->get($this->table)->result();
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