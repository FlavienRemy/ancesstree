<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 21/05/2019
 * Time: 18:05
 */

class Login_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_utilisateurs(){

		$query = $this->db->get('users');
		return $query->result();

	}
	public function verif_user($id,$pass)
	{
		$query = $this->db->query("SELECT * FROM users WHERE user_pseudo='$id' AND user_mdp = '$pass'");
		return $query->result();

	}
	public function verif_grad($id,$pass){
		$query = $this->db->query("SELECT user_droit FROM users WHERE user_pseudo='$id' AND user_mdp = '$pass'");
		return $query->result();
	}

    public function pseudo_user($id)
    {
        $query = $this->db->query("SELECT user_pseudo FROM users WHERE user_pseudo='$id'");
        return $query->result();

    }

}
