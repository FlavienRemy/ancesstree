<?php

class Recherche extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {
        $this->load->model('Recherche_model');

    /*    $data['recherche'] = $this->Recherche_model->get_search('REMY');

        $data['recherche2'] = $this->Recherche_model->get_search_2('REMY');

        echo '<pre>';
        var_dump($this->Recherche_model->get_search('REMY'));
        echo '</pre>';
        echo '<pre>';
        var_dump($data['recherche2']);
        echo '</pre>';*/ //recherche de données


        //$data['Recherche'] = $this->Recherche_model-> ($this->input->post());

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

        $this->load->view('Header_view');
        $this->load->view('Recherche_view');
    }

    public function result() {

        $this->load->model('Recherche_model');

        $name = $this->input->post('name');
        $firstname = $this->input->post('firstname');
        $d_naissance = $this->input->post('d_naissance');
        $l_naissance = $this->input->post('l_naissance');
        $d_deces = $this->input->post('d_deces');
        $l_deces = $this->input->post('l_deces');


        $data['name'] = strtoupper($this->input->post('name'));
        $data['nbname'] = $this->Recherche_model->count_name($name);
        $data['nbnameville'] = $this->Recherche_model->count_by_categorie($name);
       // var_dump($this->Recherche_model->count_name($name));

        $data['recherche'] = $this->Recherche_model->get_search($name, $firstname, $d_naissance, $l_naissance, $d_deces, $l_deces);

        foreach ($this->Recherche_model->get_search($name, $firstname, $d_naissance, $l_naissance, $d_deces, $l_deces) as $search) {

        foreach ($this->Recherche_model->getMariage($search->indi_id) as $key) {
            $data['nom_marie'][$search->indi_id] = $key->indi_prenom.' '. $key->indi_nom;
        }

        }

        //$data['recherche'] = array_unique($this->Recherche_model->get_search_cp2($name, $firstname), SORT_REGULAR);

        /*$data['individu'] = $this->Recherche_model->get_search($name);

        $individus = '';


        foreach ($data['individu'] as $key) {
            $individus .= $key->indi_id.', ';
        }


        $data['recherche2'] = $this->Recherche_model->get_parents($individus);*/ // Recherche2 - famille

        /*var_dump($this->Recherche_model->get_search_cp2($name, $firstname));
        echo '<hr>';
        print_r($data['recherche']);
        echo '<hr> test';
        print_r(array_unique($this->Recherche_model->get_search_cp2($name, $firstname), SORT_REGULAR));*/ //verif
        //redirect(Blog.'/?test='.$validation.'');

        $data['titre'] = 'Recherche : '.$name;
        $data['javascript'] = 'recherche.js'; // fichier js à appeler



        //$data['Recherche'] = $this->Recherche_model-> ($this->input->post());

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

        if (isset($_SESSION['ident'])){
            $this->load->view('Header_user_view', $data);
        }else {
            $this->load->view('Header_view', $data);

        }

        //RECHERCHE
        $data['recherche_titre'] = $this->lang->line("recherche_titre");
        $data['recherche_soustitre'] =$this->lang->line("recherche_soustitre");
        $data['recherche_partager'] =$this->lang->line("recherche_partager");
        $data['recherche_resultats'] =$this->lang->line("recherche_resultats");
        $data['recherche_voici'] =$this->lang->line("recherche_voici");
        $data['recherche_nom'] =$this->lang->line("recherche_nom");
        $data['recherche_nom2'] =$this->lang->line("recherche_nom2");
        $data['recherche_region'] =$this->lang->line("recherche_region");
        $data['recherche_arbre'] =$this->lang->line("recherche_arbre");
        $data['recherche_porter'] =$this->lang->line("recherche_porter");
        $data['recherche_resultats2'] =$this->lang->line("recherche_resultats2");

        $data['accueil_mariage'] =$this->lang->line("accueil_mariage");
        $data['accueil_naissance'] =$this->lang->line("accueil_naissance");
        $data['accueil_deces'] =$this->lang->line("accueil_deces");
        $data['accueil_lieu'] =$this->lang->line("accueil_lieu");

        //FIN RECHERCHE
        
        $this->load->view('Recherche_result_view', $data);
        $this->load->view('Footer_view', $data);

    }
}