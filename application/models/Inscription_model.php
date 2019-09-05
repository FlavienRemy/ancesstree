<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 12/06/2019
 * Time: 10:56
 */

class Inscription_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
		public
		function add_user($nom, $prenom, $mail, $username, $pass, $sexe)
		{
		    $firstname = ucfirst(strtolower($prenom));
			$this->db->query("INSERT INTO users(user_nom, user_prenom, user_mail, user_pseudo, user_mdp, user_sexe, user_droit) VALUES ('$nom','$prenom','$mail','$username','$pass','$sexe','user')");
            $this->db->query("INSERT INTO individus(indi_nom, indi_prenom, indi_sexe, _user_id) VALUES (UPPER ('$nom'),'$firstname','$sexe', LAST_INSERT_ID())");

        }

}
