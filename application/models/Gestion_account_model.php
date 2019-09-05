<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 14/06/2019
 * Time: 12:35
 */

class Gestion_account_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getData($pseudo)
    {
        $query = $this->db->query("SELECT * FROM users WHERE user_pseudo='$pseudo'");
        return $query->result();
    }

    public function updateData($name, $firstname, $mail, $date, $lieu, $mdp, $id) {
        if (empty($mdp)) {
            $this->db->query("UPDATE users SET user_nom = '$name', user_prenom = '$firstname',user_mail='$mail', user_date='$date', user_lieu='$lieu'   WHERE user_id='$id' ");
            $prenom = ucfirst(strtolower($firstname));
            $this->db->query("UPDATE  individus SET indi_nom = UPPER ('$name'), indi_prenom = '$prenom', indi_d_naissance = '$date', indi_l_naissance = '$lieu'
                              WHERE _user_id = '$id' ");


        }
        else {
            $this->db->query("UPDATE users SET user_nom = '$name', user_prenom = '$firstname',user_mail='$mail', user_date='$date', user_lieu='$lieu', user_mdp='$mdp'   WHERE user_id='$id' ");
        }
    }
}