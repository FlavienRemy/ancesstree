<?php

class Accueil extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {
        $this->load->model('Accueil_model');
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

        $data['titre'] = 'AncesTree'; //Titre de la page

        $data['javascript'] = 'accueil.js'; // fichier js à appeler

        $data['blog'] = $this->Accueil_model->get_article();

        if (isset($_SESSION['ident'])) {


        foreach ($this->Accueil_model->verif_grad($_SESSION['ident']) as $item) {
            $user = $item->user_droit;
        }
        }



        if (!isset($_SESSION['ident']) || $user !== 'user' || empty($_SESSION['ident'])) {
            $this->load->view('Header_view', $data);
        }
        else {
            $data['user'] = 'user';
            $this->load->view('Header_user_view', $data);
        }

        //CONTENU ACCUEIL
        $data['accueil_bienvenue'] = $this->lang->line("accueil_bienvenue");
        $data['accueil_titre'] = $this->lang->line("accueil_titre");
        $data['accueil_titre_2'] = $this->lang->line("accueil_titre_2");
        $data['accueil_intro'] = $this->lang->line("accueil_intro");
        $data['accueil_decouverte'] = $this->lang->line("accueil_decouverte");
        $data['accueil_decouverte_soustitre'] = $this->lang->line("accueil_decouverte_soustitre");
        $data['accueil_blog_soustitre'] = $this->lang->line("accueil_blog_soustitre");
        $data['accueil_histoire'] = $this->lang->line("accueil_histoire");
        $data['accueil_histoire_soustritre'] = $this->lang->line("accueil_histoire_soustritre");
        $data['accueil_contenu_1'] = $this->lang->line("accueil_contenu_1");
        $data['accueil_contenu_2'] = $this->lang->line("accueil_contenu_2");
        $data['accueil_aide'] = $this->lang->line("accueil_aide");
        $data['accueil_aide_soustitre'] =$this->lang->line("accueil_aide_soustitre");

        $data['creer_compte'] = $this->lang->line("creer_compte");
        $data['deja_compte'] = $this->lang->line("deja_compte");
        $data['ouvrir_session'] = $this->lang->line("ouvrir_session");
        $data['bouton_rechercher'] = $this->lang->line("bouton_rechercher");
        $data['bouton_contacter'] = $this->lang->line("bouton_contacter");

        $data['accueil_prenoms'] = $this->lang->line("accueil_prenoms");
        $data['ouvrir_prenoms_entrez'] = $this->lang->line("ouvrir_prenoms_entrez");
        $data['accueil_famille'] = $this->lang->line("accueil_famille");
        $data['accueil_famille_entrez'] = $this->lang->line("accueil_famille_entrez");
        $data['accueil_lieu_naissance'] = $this->lang->line("accueil_lieu_naissance");
        $data['accueil_annee_naissance'] = $this->lang->line("accueil_annee_naissance");
        $data['accueil_lieu_deces'] = $this->lang->line("accueil_lieu_deces");
        $data['accueil_annee_deces'] = $this->lang->line("accueil_annee_deces");
        $data['accueil_obligatoire'] = $this->lang->line("accueil_obligatoire");
        $data['accueil_statut'] = $this->lang->line("accueil_statut");
        $data['accueil_deces'] = $this->lang->line("accueil_deces");
        $data['accueil_mariage'] = $this->lang->line("accueil_mariage");
        $data['accueil_naissance'] = $this->lang->line("accueil_naissance");
        $data['accueil_nom_marie'] = $this->lang->line("accueil_nom_marie");
        $data['accueil_prenom_marie'] = $this->lang->line("accueil_prenom_marie");
        $data['accueil_nom_mariee'] = $this->lang->line("accueil_nom_mariee");
        $data['accueil_prenom_mariee'] = $this->lang->line("accueil_prenom_mariee");
        $data['accueil_periode'] = $this->lang->line("accueil_periode");
        $data['accueil_siecle'] = $this->lang->line("accueil_siecle");

        $data['accueil_nom'] = $this->lang->line("accueil_nom");
        $data['accueil_prenom'] = $this->lang->line("accueil_prenom");
        $data['accueil_lieu'] = $this->lang->line("accueil_lieu");
        $data['accueil_ajouter'] = $this->lang->line("accueil_ajouter");

        $data['connexion_sexe'] = $this->lang->line("connexion_sexe");
        $data['connexion_homme'] = $this->lang->line("connexion_homme");
        $data['connexion_femme'] = $this->lang->line("connexion_femme");
        //FIN CONTENU ACCUEIL

        //FOOTER

        $data['footer_accueil'] =$this->lang->line("footer_accueil");
        $data['footer_inscription'] =$this->lang->line("footer_inscription");
        $data['footer_recrutement'] =$this->lang->line("footer_recrutement");
        $data['footer_politique'] =$this->lang->line("footer_politique");

        //FIN FOOTER

        //BLOG
        $data['blog_plus'] =$this->lang->line("blog_plus");
        //FIN BLOG

        $this->load->view('Accueil_view', $data);
        $this->load->view('Footer_view', $data);
    }

    public function ajouterData() {

        $type=$this->input->post('bouton');
        $nom=$this->input->post('nom');
        $prenom= ucfirst(strtolower($this->input->post('prenom')));
        $lieu=$this->input->post('lieu');
        $date=$this->input->post('date');
        $nomfemme=$this->input->post('nomfemme');
        $prenomfemme= ucfirst(strtolower($this->input->post('prenomfemme')));
        $nomhomme=$this->input->post('nomhomme');
        $prenomhomme= ucfirst(strtolower($this->input->post('prenomhomme')));
        $sexe=$this->input->post('sexe');

        $this->load->model('Accueil_model');

        $this->Accueil_model->addData($type, $nom, $prenom, $lieu, $date, $nomfemme, $nomhomme, $prenomhomme, $prenomfemme, $sexe);


        redirect(base_url().'Accueil');



    }

}