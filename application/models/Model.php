<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($email,$mdp)
        {
            $valiny = false;
            $query = $this->db->query('select * from utilisateur');
            foreach($query->result_array() as $row)
            {
                if($email == $row['email'] && $mdp == $row['mdp'])
                {
                    $idUtil = $row['idUtil'];
                    $valiny = true;
                }
            }
            return $valiny;
        }

        public function listeCategorie()
        {
            $sql = "select * from categorie";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function listeObjet()
        {
            $sql = "select * from objet where idUtil !='".$this->session->userdata('idUtil')."'";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function listeObjetaechanger()
        {
            $sql = "select * from objet where idUtil ='".$this->session->userdata('idUtil')."'";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function makaId($mail)
        {
            $sql= "select * from utilisateur";
            $query= $this->db->query($sql);
            $result= $query->result_array();
            $valiny = "";
            foreach($result as $result)
            {
                if ($result['email'] == $mail) 
                {
                    $valiny = $result['idUtil'];
                }
            }
            return $valiny;
        }
       

    }
?>