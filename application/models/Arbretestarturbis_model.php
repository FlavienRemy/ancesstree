<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 17/06/2019
 * Time: 15:28
 */

class Arbretestarturbis_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_infos(){

		$query = $this->db->query("SELECT * FROM arbre_".$_SESSION['ident']);
		return $query->result();

	}
}
