<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Regime_model extends CI_Model {
        
        public function CreateRegime($nom, $poids, $duree){
            $requete = "INSERT INTO regime (nom, poids, duree) values (%s, %s, '%s')";
            $requete = sprintf($requete, $nom, $poids, $duree);
            $query = $this->db->query($requete);
            $idregime = $this->db->insert_id(); 
        }
        public function CreateDetailRegime($day, $typenourriture, $quantite, $idregime){
            $requete = "INSERT INTO detail_regime (id_day, id_type_nourriture, quantite, id_regime) values (%s, %s,%s,%s)";
            $requete = sprintf($requete, $day, $typenourriture, $quantite, $idregime);
            $query = $this->db->query($requete);
        }
    }
?>