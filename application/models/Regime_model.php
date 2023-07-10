<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Regime_model extends CI_Model {
        public function GetAllNourriture() {
            $requete = "SELECT * FROM nourriture";
            $query = $this->db->query($requete);
            return $query->result(); // Utilisez result() pour obtenir un tableau d'objets
        }
        public function GetAllDay(){
            $requete = "SELECT * FROM day";
            $query = $this->db->query($requete);
            return $query->result(); // Utilisez result() pour obtenir un tableau d'objets
        }
        
        public function CreateRegime($nom, $poids, $duree){
            $requete = "INSERT INTO regime (nom, poids, duree) values ('%s', %s, %s)";
            $requete = sprintf($requete, $nom, $poids, $duree); 
            $query = $this->db->query($requete);
            $idregime = $this->db->insert_id(); 
            return $idregime;
        }
        public function CreateDetailRegime($day, $typenourriture, $quantite, $idregime){
            $requete = "INSERT INTO detail_regime (id_day, id_type_nourriture, quantite, id_regime) values (%s, %s,%s,%s)";
            $requete = sprintf($requete, $day, $typenourriture, $quantite, $idregime);
            $query = $this->db->query($requete); 
        }
        ///////////////////////////////////////////////////////////////////////////////////////
        public function GetRegimeById($id){
            $requete = "SELECT * FROM regime where id = %s";
            $requete = sprintf($requete, $id); 
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function GetNourriture($idregime){
            $requete = "SELECT * FROM detail_regime where   id_regime = %s";
            $requete = sprintf($requete,  $idregime);
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function GetAllRegime(){
            $requete = "SELECT * FROM regime";
            $requete = sprintf($requete);
            $query = $this->db->query($requete);
            return $query->result();
        }
        //atao input type hidden ilay iddetails
        public function UpdateDetailRegime($iddetail, $quantite){
            $requete = "UPDATE detail_regime set quantite = %s where id = %s;";
            $requete = sprintf($requete,  $quantite,   $iddetail);
            $query = $this->db->query($requete);
        } 
        public function GetNourritureById($id){
            $requete = "SELECT * FROM nourriture where id_type_nourriture = %s";
            $query = $this->db->query($requete,$id);
            return $query->result(); // Utilisez result() pour obtenir un tableau d'objets
        }

    }
?>