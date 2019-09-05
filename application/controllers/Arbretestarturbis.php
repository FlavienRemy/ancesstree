<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 17/06/2019
 * Time: 13:57
 */

class Arbretestarturbis extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }


    public function index(){

        $this->load->model('Arbretestarturbis_model');
        $recup = $this->Arbretestarturbis_model->get_infos();
        $data['infosarbre']= $recup;

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

        //ARBRE
        $data['arbre_titre'] =$this->lang->line("arbre_titre");
        $data['arbre_soustitre'] =$this->lang->line("arbre_soustitre");
        $data['arbre_continuer'] =$this->lang->line("arbre_continuer");
        $data['arbre_arbre'] =$this->lang->line("arbre_arbre");
        $data['arbre_propre'] =$this->lang->line("arbre_propre");
        $data['arbre_gerer'] =$this->lang->line("arbre_gerer");
        $data['arbre_telecharger'] =$this->lang->line("arbre_telecharger");
        $data['arbre_membres'] =$this->lang->line("arbre_membres");
        //FIN ARBRE

        $this->load->view('Header_arbre_user_view',$data);
        $this->load->view('arbretestarturbis_view',$data);
        $this->load->view('Footer_admin_view',$data);
	}
}
