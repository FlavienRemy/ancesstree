<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 18/06/2019
 * Time: 10:01
 */

class Arbre_gestion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('grocery_CRUD');
        $this->lang->load("message","english");
	}


	public function index(){
		$data['css_files'] = array();

		$this->load->view('user_arbre_view');

	}

	public function Indiarbre(){

		$crud2 = new grocery_CRUD();
		$crud2->set_theme('datatables');
		$crud2->set_table('arbre_'.$_SESSION['ident']);
		$crud2->unset_print();
		$crud2->unset_export();
		$crud2->unset_clone();


		$crud2->set_relation('arbre_id_mere','arbre_'.$_SESSION['ident'],'arbre_nom');
		$crud2->set_relation('arbre_id_pere','arbre_'.$_SESSION['ident'],'arbre_nom');
		$crud2->set_relation('arbre_id_mari','arbre_'.$_SESSION['ident'],'arbre_nom');
		$crud2->set_relation('arbre_id_femme','arbre_'.$_SESSION['ident'],'arbre_nom');
		$crud2->field_type('arbre_sexe','multiselect',array('F' => 'Female', 'M' => 'Male'));
		$crud2->unset_fields('arbre_attribut');

		$crud2->display_as('arbre_nom','Lastname and first name');
		$crud2->display_as('arbre_sexe','Gender');

		$crud2->display_as('arbre_id_mere','Mother');
		$crud2->display_as('arbre_id_pere','Father');
		$crud2->display_as('arbre_id_femme','Wife');
		$crud2->display_as('arbre_id_mari','Husband');






        $data['titre'] = 'Tree management';
		$output2 = $crud2->render();
		$data['css_files'] = array();

        //HEADER
        $data['header_recherche'] = $this->lang->line("header_recherche");
        $data['header_arbre'] = $this->lang->line("header_arbre");
        $data['header_connexion'] = $this->lang->line("header_connexion");
        $data['header_langue'] = $this->lang->line("header_langue");

        $data['header_creer_arbre'] = $this->lang->line("header_creer_arbre");
        $data['header_deconnexion'] = $this->lang->line("header_deconnexion");
        $data['header_accueil'] = $this->lang->line("header_accueil");
        $data['header_individus'] = $this->lang->line("header_individus");
        $data['bouton_inscription'] = $this->lang->line("bouton_inscription");
        //FIN HEADER
        //FOOTER
        $data['footer_accueil'] =$this->lang->line("footer_accueil");
        $data['footer_inscription'] =$this->lang->line("footer_inscription");
        $data['footer_recrutement'] =$this->lang->line("footer_recrutement");
        $data['footer_politique'] =$this->lang->line("footer_politique");
        //FIN FOOTER

        $this->load->view('Header_user_view',$data);
        $this->load->view('user_arbre_view', (array)$output2);
        $this->load->view('Footer_admin_view');


    }

}
