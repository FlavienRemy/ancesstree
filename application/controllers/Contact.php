<?php

class Contact extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {


        $data['titre'] = 'Contact'; //Titre de la page

        $data['javascript'] = 'accueil.js'; // fichier js à appeler

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

        //CONTACT
        $data['contact_objet'] =$this->lang->line("contact_objet");
        $data['contact_demande'] =$this->lang->line("contact_demande");
        $data['contact_envoyer'] =$this->lang->line("contact_envoyer");
        $data['contact_contact'] =$this->lang->line("contact_contact");
        $data['accueil_nom'] =$this->lang->line("accueil_nom");
        $data['accueil_prenom'] =$this->lang->line("accueil_prenom");
        $data['accueil_obligatoire'] =$this->lang->line("accueil_obligatoire");
        //FIN CONTACT

        $this->load->view('Header_view', $data);
        $this->load->view('Contact_view');
        $this->load->view('Footer_view', $data);
    }

    public function new_contact(){

        $this->load->model('Contact_model');

        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('sujet');
        $message = $this->input->post('message');

        $this->Contact_model->add_contact($nom,$prenom,$email,$phone,$subject,$message);
        redirect(base_url().'Contact?txt=Votre message a été envoyé.');

    }

}