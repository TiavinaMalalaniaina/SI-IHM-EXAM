<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class Admin_model extends CI_Model 
    {
        public function EvolutionClient(){
            $requete = "SELECT dateobjectif, Count(*) AS count  FROM OBJECTIF GROUP BY DATEOBJECTIF";
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function EvolutionCaisse(){
            $requete = "SELECT * FROM depense_user";
            $query = $this->db->query($requete);
            return $query->result();
        }
        public function NombreObjectif($signe){
            $sig = '>';
            if($signe == -1){
                $sig = '<';
            }else if($signe == 1){
                $sig = '>';
            }else{
                $sig = '=';
            }
            $requete = "SELECT Count(*) AS count  FROM OBJECTIF  where kilos %s 0   ";
            $requete = sprintf($requete, $sig);
            $query = $this->db->query($requete);
            return $query->result();
        }
        
    }
   
    
?>