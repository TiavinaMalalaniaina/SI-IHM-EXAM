<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class RegimeActivite_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'regime_activite';

        public function getRegime($poids) {
            $regimes = $this->findAll();
            foreach ($regimes as $regime) {
                $regime->duree_total = (intval($poids / $regime->poids)+1) * $regime->duree;
                $regime->prix_total = floatval($regime->prix) * intval($regime->duree_total / $regime->duree);
            }
            return $regimes;
        }

        // Calcul le prix d'un régime
        public function calculPoids($id) {
            $this->load->model('regime_model');
            $this->load->model('activite_model');
            $regime_activite = $this->findById($id);
            $regime = $this->regime_model->findById($regime_activite->id_regime);
            $activite = $this->activite_model->findById($regime_activite->id_activite);
            return $regime->poids + $activite->poids;
        }

        // Récupère tous les utilisateurs
        public function findAll() {
            $regime_activites = $this->db->get($this->table)->result();
            foreach ($regime_activites as $regime_activite) {
                $regime_activite->poids = $this->calculPoids($regime_activite->id);
            }
            return $regime_activites;
        }
        
        // Récupère un utilisateur par son ID
        public function findByIdAndUser($id, $id_user) {
            $regime = $this->db->get_where($this->table, array('id' => $id))->row();
            $user = $this->user_model->findById($id_user);
        }

        // Récupère un utilisateur par son ID
        public function findById($id) {
            $this->load->model('regime_model');
            $this->load->model('activite_model');
            $regime_activite = $this->db->get_where($this->table, array('id' => $id))->row();
            $regime_activite->regime = $this->regime_model->findById($regime_activite->id_regime);
            $regime_activite->activite = $this->activite_model->findById($regime_activite->id_activite);
            return $regime_activite;
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
        // public function delete($id) {
        //     $this->db->where('id', $id);
        //     return $this->db->update($this->table, array('state' => 1));
        // }

    }
?>