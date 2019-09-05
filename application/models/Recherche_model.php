<?php

class Recherche_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_name($name){
        $query = $this->db->query('SELECT indi_nom FROM individus WHERE indi_nom="' . strtoupper($name)  . '" ');

        return $query->result();

    }

    public function count_by_categorie($name) {
        $query = $this->db->query('SELECT indi_l_naissance, COUNT(indi_l_naissance) AS num FROM individus WHERE indi_nom="'.strtoupper($name).'" GROUP BY indi_l_naissance DESC LIMIT 3 ');
        return $query->result();

    }

    public function get_people($id) {

        $query = $this->db->query('SELECT * FROM individus WHERE indi_id="' .$id. '" ');

        return $query->result();


    }

    public function get_search($name, $firstname, $d_naissance, $l_naissance, $d_deces, $l_deces) {

        if (!empty($l_naissance)) {
            $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name)  . '" AND indi_l_naissance = "'.ucfirst(strtolower($l_naissance)).'" ');
        }

        elseif (!empty($d_naissance)) {
            $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name)  . '" AND indi_d_naissance = "'.date('Y-m-d', strtotime($d_naissance)).'" ');
        }

        elseif (!empty($d_deces)) {
            $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name)  . '" AND indi_d_deces = "'.date('Y-m-d', strtotime($d_deces)).'" ');
        }

        elseif (!empty($l_deces)) {
            $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name)  . '" AND indi_l_deces = "'.ucfirst(strtolower($l_deces)).'" ');
        }

        elseif (!empty($firstname)) {
            $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name) . '" AND indi_prenom = "'.ucfirst(strtolower($firstname)).'" ');
        }

        else {
            $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name)  . '"');
        }

        return $query->result();
    }

    public function get_suggestions($name) {

        $query = $this->db->query('SELECT * FROM individus WHERE indi_nom="' . strtoupper($name)  . '"');

        return $query->result();

    }

    public function get_parents($individu) {
        $query = $this->db->query("SELECT * FROM relations 
        INNER JOIN individus AS id1 ON relations.indi_1 = id1.indi_id
        INNER JOIN individus AS id2 ON relations.indi_2 = id2.indi_id
        WHERE relations.indi_1='$individu' ");

        return $query->result();
    }

    public function getMariage($individu) {
        $query = $this->db->query("SELECT * FROM relations 
        INNER JOIN individus AS id1 ON relations.indi_1 = id1.indi_id
        INNER JOIN individus AS id2 ON relations.indi_2 = id2.indi_id
        WHERE relations.indi_1='$individu' AND relation_type ='mariage' ");

        return $query->result();
    }

    public function get_search_2($nom_individu) {
        $query = $this->db->query("SELECT * FROM relations 
        INNER JOIN individus AS id1 ON relations.indi_1 = id1.indi_id
        INNER JOIN individus AS id2 ON relations.indi_2 = id2.indi_id
        WHERE id1.indi_nom='$nom_individu'");

        return $query->result();
    }


    public function get_search_cp($nom, $prenom) {
        $query = $this->db->query("SELECT * FROM relations 
        INNER JOIN individus AS id1 ON relations.indi_1 = id1.indi_id
        INNER JOIN individus AS id2 ON relations.indi_2 = id2.indi_id
        WHERE id1.indi_nom='$nom' AND id1.indi_prenom='$prenom'");

        return $query->result();
    }


    public function get_search_cp2($nom, $prenom) {

        if (empty($prenom)) {
            $query = $this->db->query("SELECT id2.indi_prenom, id2.indi_nom FROM relations 
        INNER JOIN individus AS id1 ON relations.indi_1 = id1.indi_id
        INNER JOIN individus AS id2 ON relations.indi_2 = id2.indi_id
        WHERE id1.indi_nom='$nom'");
        }

        elseif (empty($nom)) {
            return 'Veuillez entrer un nom';
        }
        else {
            $query = $this->db->query("SELECT * FROM relations 
        INNER JOIN individus AS id1 ON relations.indi_1 = id1.indi_id
        INNER JOIN individus AS id2 ON relations.indi_2 = id2.indi_id
        WHERE id1.indi_nom='$nom' AND id1.indi_prenom='$prenom'");
        }


        return $query->result();
    }


}