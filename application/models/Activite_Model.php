<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Activite_Model extends CI_Model {
        // Nom de la table dans la base de données
        private $table = 'activite';
        
        // Récupère tous les régimes
        public function findAll() {
            return $this->db->get($this->table)->result();
        }

        // Récupère une régime par son ID
        public function findById($id) {
            $this->load->model('detailActivite_Model');
            $activite = $this->db->get_where($this->table, array('id' => $id))->row();
            $activite->detail = $this->detailActivite_Model->findByActivite($activite->id);
            return $activite;
        }
        
        // Crée un nouvele régime
        public function create($data) {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }
        
        // Met à jour une régime
        // public function update($id, $data) {
        //     $this->db->where('id', $id);
        //     return $this->db->update($this->table, $data);
        // }
        
        // Supprime une régime
        // public function delete($id) {
        //     $this->db->where('id', $id);
        //     return $this->db->update($this->table, array('state' => 1));
        // }
        public function GetAllActivite() {
            $requete = "SELECT * FROM Activite";
            $query = $this->db->query($requete);
            return $query->result(); // Utilisez result() pour obtenir un tableau d'objets
        }
        public function GetActiviteById($id) {
            $requete = "SELECT * FROM Activite where id = %s";
            $requete = sprintf($requete, $id);
            $query = $this->db->query($requete);
            return $query->result(); // Utilisez result() pour obtenir un tableau d'objets
        }
        public function GetDetailActivite($id) {
            $requete = "SELECT * FROM detail_activite where id_activite = %s";
            $requete = sprintf($requete, $id);
            $query = $this->db->query($requete);
            return $query->result(); // Utilisez result() pour obtenir un tableau d'objets
        }
        public function Update($id, $duree, $quantite, $idactivite){
            $requete = "UPDATE detail_activite set quantite = %s, duree = '%s', id_type_activite = %s where id = %s;";
            $requete = sprintf($requete,  $quantite, $duree,$idactivite,  $id);
            $query = $this->db->query($requete);
        }
        public function GetType(){
            $requete = "SELECT * FROM type_activite";
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function InsererActivite($poids, $duree){
            $requete = "INSERT INTO activite(poids, duree ) values (%s, '%s')";
            $requete = sprintf($requete, $poids, $duree);
            $query = $this->db->query($requete);
            $id = $this->db->insert_id();
            return $id;
        }
        
        public function InsererDetailsActivite($idactivite,$type,$quantite,$duree){
            $requete ="INSERT INTO detail_activite (id_activite, id_type_activite, duree, quantite) values (%s,%s,'%s',%s)";
            $requete = sprintf($requete, $idactivite, $type, $duree, $quantite);
            $query = $this->db->query($requete);
        }
    }
?>