<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Code_model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'code';
        
        public function validateCode($code) {
            $code_db = $this->find($code);
            if ($code_db->status == 10) throw new Exception("Le code n'est plus valide");
            return $code_db;
        }

        public function findValide() {
            $this->db->where('status !=', 10);
            return $this->db->get($this->table)->row();
        }
        
        // Récupère tous les utilisateurs
        public function findAll() {
            return $this->db->get($this->table)->result();
        }
        
        // Récupère un utilisateur par son ID
        public function findById($id) {
            return $this->db->get_where($this->table, array('id' => $id))->row();
        }

        // Récupère un utilisateur par son code
        public function find($code) {
            return $this->db->get_where($this->table, array('code' => $code))->row();
        }

        public function findWaitingCodeById($id) {
            return $this->db->get_where('waiting_code', array('id' => $id))->row();
        }
        
        // Crée un nouvel utilisateur
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }

        // Utilise le code (Met le status en 10)
        public function useCode($code_string) {
            $data = array(
                'status' => 5 
            );
            return $this->updateWithCode($code_string, $data);
        }

        public function createWaitingCode($id_user, $code_string) {
            $code = $this->find($code_string);
            $data = array(
                'id_users' => $id_user,
                'id_code' => $code->id
            );
            $this->db->insert('waiting_code', $data);
            return $this->db->insert_id();
        }

        public function validateWaitingCode($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update('waiting_code', $data);
        }
        
        // Met à jour un utilisateur
        public function updateWithCode($code, $data) {
            $this->db->where('code', $code);
            return $this->db->update($this->table, $data);
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