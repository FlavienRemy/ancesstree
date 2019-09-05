<?php

class Gestion_account extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {
        $this->load->model('Gestion_account_model');

        $data['titre'] = 'Gestion account';
        $data['javascript'] ='accueil.js';

        $data['user'] = $this->Gestion_account_model->getData($_SESSION['ident']);


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

        //COMPTE
        $data['compte_compte'] =$this->lang->line("compte_compte");
        $data['compte_modifier'] =$this->lang->line("compte_modifier");
        $data['compte_pseudo'] =$this->lang->line("compte_pseudo");
        $data['compte_naissance'] =$this->lang->line("compte_naissance");
        $data['compte_modifier2'] =$this->lang->line("compte_modifier2");

        $data['accueil_prenoms'] =$this->lang->line("accueil_prenoms");
        $data['accueil_famille'] =$this->lang->line("accueil_famille");
        $data['accueil_lieu_naissance'] =$this->lang->line("accueil_lieu_naissance");
        $data['connexion_co'] =$this->lang->line("connexion_co");
        $data['connexion_co_confirmation'] =$this->lang->line("connexion_co_confirmation");
        //FIN COMPTE

        $this->load->view('Header_user_view', $data);
        $this->load->view('Gestion_account_view', $data);
        $this->load->view('Footer_view', $data);
    }

    public function updateData()
    {
        $this->load->model('Gestion_account_model');

        $id = $this->input->get('id');

        $name = $this->input->post('user_nom');
        $firstname = $this->input->post('user_prenom');
        $mail = $this->input->post('user_email');
        $date = $this->input->post('user_date');
        $lieu = $this->input->post('user_lieu');
        $mdp = $this->input->post('mdp');


        $this->Gestion_account_model->updateData($name, $firstname, $mail, $date, $lieu, $mdp, $id);

        redirect(base_url().'Gestion_account?txt=Success');

    }
}