<?php

class Accueil_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_article()
    {

        $query = $this->db->query("SELECT * FROM blog ORDER BY blog_id DESC LIMIT 6"); // LIMIT sert a delimiter le nombre d'article que l'on va montrer

        return $query->result();

    }

    public function addData($type, $nom, $prenom, $lieu, $date, $nomfemme, $nomhomme, $prenomhomme, $prenomfemme, $sexe) {


        if ($type == 'mariage') {

            $this->db->query("INSERT INTO individus (indi_prenom, indi_nom, indi_d_mariage, indi_l_mariage, indi_sexe) VALUES ('$prenomhomme', UPPER('$nomhomme'), '$date', '$lieu', 'M')");
            $this->db->query("INSERT INTO relations (indi_1, indi_2, relation_type) VALUES (LAST_INSERT_ID(), LAST_INSERT_ID()+1, 'mariage') ");
            $this->db->query("INSERT INTO individus (indi_prenom, indi_nom, indi_d_mariage, indi_l_mariage, indi_sexe) VALUES ('$prenomfemme', UPPER('$nomfemme'), '$date', '$lieu', 'F')");

        }

        if ($type == 'deces') {

        $this->db->query("INSERT INTO individus (indi_prenom, indi_nom, indi_l_deces, indi_d_deces, indi_sexe) VALUES ('$prenom', UPPER('$nom'), '$lieu', '$date', '$sexe')");

        }

        elseif ($type == 'naissance') {

            $this->db->query("INSERT INTO individus (indi_prenom, indi_nom, indi_l_naissance, indi_d_naissance, indi_sexe) VALUES ('$prenom', UPPER('$nom'), '$lieu', '$date', '$sexe')");

        }

        else  {

        }



    }

    public function verif_grad($pseudo){
        $query = $this->db->query("SELECT user_droit FROM users WHERE user_pseudo='$pseudo'");
        return $query->result();
    }
}