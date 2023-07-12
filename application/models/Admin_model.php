<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Admin_model extends CI_Model 
    {
        public function EvolutionClient(){
            $requete = "SELECT * FROM detail_user group by id_users";
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function EvolutionCaisse(){
            $result = "SELECT * FROM depense_user";
            $query = $this->db->query($requete);
            return $query->result();
        }
    }
?>