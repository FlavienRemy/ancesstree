<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 12/06/2019
 * Time: 10:56
 */

class Inscription extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

	public function index(){

        $data['titre'] = 'Sign up';
        $data['javascript'] = 'accueil.js';


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

        //CONNEXION
        $data['connexion_co'] =$this->lang->line("connexion_co");
        $data['connexion_compte'] =$this->lang->line("connexion_compte");
        $data['connexion_inscription'] =$this->lang->line("connexion_inscription");

        $data['connexion_co_confirmation'] =$this->lang->line("connexion_co_confirmation");
        $data['connexion_sexe'] =$this->lang->line("connexion_sexe");
        $data['connexion_homme'] =$this->lang->line("connexion_homme");
        $data['connexion_femme'] =$this->lang->line("connexion_femme");
        $data['connexion_inscrire'] =$this->lang->line("connexion_inscrire");
        $data['accueil_nom'] =$this->lang->line("accueil_nom");
        $data['accueil_prenom'] =$this->lang->line("accueil_prenom");
        $data['bouton_inscription'] =$this->lang->line("bouton_inscription");
        $data['accueil_obligatoire'] =$this->lang->line("accueil_obligatoire");
        $data['deja_compte'] =$this->lang->line("deja_compte");
        $data['ouvrir_session'] =$this->lang->line("ouvrir_session");

//FIN CONNEXION

        $this->load->view('Header_view', $data);
		$this->load->view('Inscription_view');
        $this->load->view('Footer_view', $data);

	}

	public function new_user(){

		$this->load->model('Inscription_model');

		$nom = $this->input->post('nom');
		$prenom	 = $this->input->post('prenom');
		$mail = $this->input->post('email');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass*');
		$sexe = $this->input->post('sexe');


		$this->Inscription_model->add_user($nom, $prenom, $mail,$username,$pass, $sexe);

		redirect(base_url().'Login?txt=Vous avez été enregirstré');

	}
}
