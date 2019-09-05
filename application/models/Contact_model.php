<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 14/06/2019
 * Time: 12:35
 */

class Contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getcontact()
    {
        $query = $this->db->query("SELECT * FROM contact");
        return $query->result();
    }

    public function add_contact($nom, $prenom, $email, $phone, $subject, $message){

        $this->db->query("INSERT INTO contact(contact_nom, contact_prenom, contact_email, contact_tel, contact_sujet, contact_message) VALUES ('$nom','$prenom','$email','$phone','$subject','$message')");
    }
}
