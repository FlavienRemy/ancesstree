<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 12/06/2019
 * Time: 10:56
 */

class Team extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {
        $data['titre'] ='Team';
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

        //TEAM
        $data['team_team'] = $this->lang->line("team_team");
        $data['team_equipe'] = $this->lang->line("team_equipe");
        $data['team_equipe_soustitre'] = $this->lang->line("team_equipe_soustitre");
        $data['team_secretaire'] = $this->lang->line("team_secretaire");
        $data['team_secretaire_texte'] = $this->lang->line("team_secretaire_texte");
        $data['team_tresoriere'] = $this->lang->line("team_tresoriere");
        $data['team_tresoriere_texte'] = $this->lang->line("team_tresoriere_texte");
        $data['team_genealogiste'] = $this->lang->line("team_genealogiste");
        $data['team_genealogiste_texte'] = $this->lang->line("team_genealogiste_texte");
        $data['team_etude'] = $this->lang->line("team_etude");
        $data['team_etude_texte'] = $this->lang->line("team_etude_texte");
        $data['team_president'] = $this->lang->line("team_president");
        $data['team_president_texte'] = $this->lang->line("team_president_texte");
        $data['team_rejoindre'] = $this->lang->line("team_rejoindre");
        $data['team_developpeur'] = $this->lang->line("team_developpeur");
        $data['team_admin'] = $this->lang->line("team_admin");
        //FIN TEAM
        
        $this->load->view('Header_view', $data);
        $this->load->view('Team_view');
        $this->load->view('Footer_view', $data);


    }
}