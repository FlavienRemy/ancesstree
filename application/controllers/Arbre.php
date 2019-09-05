<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 14/06/2019
 * Time: 15:30
 */

class Arbre extends CI_Controller
{


	public function index(){
		$this->load->model('Arbre_model');

		if ($this->db->table_exists('arbre_'.$_SESSION['ident'])){
			redirect(base_url().'Arbre/arbre_exist') ;

		}
		else{
			redirect(base_url().'Arbre/create');

		}
	}


	public function create()
	{


		$this->load->dbforge();
		$this->db->query('SET storage_engine=MYISAM;');


		$fields = array(
			'arbre_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'arbre_nom' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'arbre_sexe' => array(
				'type' =>'VARCHAR',
				'constraint' => '2',
			),
			'arbre_id_mere' => array(
				'type' => 'INT',
			),
			'arbre_id_pere' => array(
				'type' => 'INT',
			),
			'arbre_id_femme' => array(
				'type' => 'INT',
			),
			'arbre_id_mari' => array(
				'type' => 'INT',
			),
			'arbre_attribut' => array(
				'type' => 'VARCHAR',
				'constraint' => '2',

			),

		);
		$this->dbforge->add_key('arbre_id', TRUE);

		$this->dbforge->add_field($fields);

		$this->dbforge->create_table('arbre_'.$_SESSION['ident']);


		$fields = array(
			'arbre_nom' => array('type' => 'TEXT')
		);
		$this->load->model('Arbre_model');


		redirect(base_url().'Arbre/auto_data');
		}


		public function auto_data(){

			$this->load->model('Arbre_model');

			$recup = $this->Arbre_model->prenom_user($_SESSION['ident']);
			$recup2 = $this->Arbre_model->nom_user($_SESSION['ident']);
			$recup3 = $this->Arbre_model->sexe_user($_SESSION['ident']);


			foreach ($recup as $key) {

			$prenom = $key->user_prenom;
			}

			foreach ($recup2 as $key2) {
			$nom = $key2->user_nom;
			}

			foreach ($recup3 as $key3) {
				$sexe = $key3->user_sexe;
			}



			$donnee = array(
			'arbre_nom' => $prenom.' '.$nom,
			'arbre_attribut' => 'E',
			'arbre_sexe' => $sexe
			);

		$this->db->insert('arbre_'.$_SESSION['ident'],$donnee);

			redirect(base_url().'Arbretestarturbis');



//		$fields = array(
//			'salut' => array('type'=> 'TEXT', 'first' => TRUE),
//			'comme' => array('type'=> 'TEXT'),
//			'manger' => array('type'=> 'TEXT'),
//			'demain' => array('type'=> 'TEXT'),
//			'midi' => array('type'=> 'TEXT')
//		);
//



	}
public function arbre_exist(){
	redirect(base_url().'Arbretestarturbis');

}

}
