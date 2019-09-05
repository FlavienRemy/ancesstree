<?php

class Confidentialite extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {
        $data['titre'] ='Privacy policy';
        $data['javascript'] ='accueil.js';

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

        $this->load->view('Header_view', $data);
        $this->load->view('Confidentialite_view');
        $this->load->view('Footer_view', $data);

    }

}