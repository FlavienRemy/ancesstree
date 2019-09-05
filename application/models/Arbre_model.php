<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 14/06/2019
 * Time: 15:30
 */

class Arbre_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_user(){
		$query = $this->db->get('users');
		return $query->result();
	}

	public function prenom_user($pseudo)
	{
		$query = $this->db->query("SELECT user_prenom FROM users WHERE user_pseudo='$pseudo'");
		//$query = $this->db->select("SELECT user_prenom FROM users WHERE user_pseudo='$pseudo'");
		return $query->result();

	}
	public function nom_user($pseudo)
	{
		$query = $this->db->query("SELECT user_nom FROM users WHERE user_pseudo='$pseudo'");
		//$query = $this->db->select("SELECT user_nom FROM users WHERE user_pseudo='$pseudo'");
		return $query->result();
	}
	public function sexe_user($pseudo)
	{
		$query = $this->db->query("SELECT user_sexe FROM users WHERE user_pseudo='$pseudo'");
		//$query = $this->db->select("SELECT user_nom FROM users WHERE user_pseudo='$pseudo'");
		return $query->result();
	}

}

?>
