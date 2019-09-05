<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 07/06/2019
 * Time: 15:45
 */

class Gestion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('grocery_CRUD');
        $this->lang->load("message","english");
        if (!isset($_SESSION['ident']) || $_SESSION['ident'] != 'admin') redirect(base_url() . 'login');
    }

    public function index()

    {

        $data['css_files'] = array();


        $data['titre'] ='Gestion';
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

        //GESTION
        $data['gestion_titre1'] =$this->lang->line("gestion_titre1");
        $data['gestion_titre2'] =$this->lang->line("gestion_titre2");
        $data['gestion_titre3'] =$this->lang->line("gestion_titre3");
        $data['gestion_soustitre'] =$this->lang->line("gestion_soustitre");
        $data['gestion_individu'] =$this->lang->line("gestion_individu");
        $data['gestion_blog'] =$this->lang->line("gestion_blog");
        //FIN GESTION

        $this->load->view('Header_admin_view', $data);
        $this->load->view('Gestion_view', $data);
        $this->load->view('Footer_admin_view', $data);

    }

    public function individus()
    {
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('individus');
        $crud->unset_clone();
        $this->config->set_item('grocery_crud_file_upload_allow_file_types','gif|jpeg|jpg|png');
        $crud->set_field_upload('indi_photo','assets/images');
        $crud->unset_clone();

        $output = $crud->render();
        $data['css_files'] = array();

        $data['titre'] = 'Gestion - Individus';
        $data = (array)$output;

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

        $this->load->view('Header_admin_view', $data);
        $this->load->view('Admin_tables_view', $data);
        $this->load->view('Footer_admin_view', $data);

    }

    public function blog(){
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('blog');
        //$this->config->set_item('grocery_crud_file_upload_allow_file_types','gif|jpeg|jpg|png');
        $crud->set_field_upload('blog_images','assets/images');
        $crud->display_as('blog_titre','Title');
        $crud->display_as('blog_contenu','Content');
        $crud->unset_print();
        $crud->unset_export();
        $crud->unset_clone();

        $output = $crud->render();
        $data['css_files'] = array();

        $data['titre'] = 'Gestion - Blog';

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

        $this->load->view('Header_admin_view', $data);
        $this->load->view('Admin_tables_view', (array)$output);
        $this->load->view('Footer_admin_view', $data);

    }

    public function contact(){

        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('contact');
        $crud->unset_print();
        $crud->unset_export();
        $crud->unset_clone();

        $output = $crud->render();
        $data['css_files'] = array();

        $data['titre'] = 'Gestion - Contact';

        //HEADER
        $data['header_recherche'] = $this->lang->line("header_recherche");
        $data['header_arbre'] = $this->lang->line("header_arbre");
        $data['header_connexion'] = $this->lang->line("header_connexion");
        $data['header_langue'] = $this->lang->line("header_langue");

        $data['header_creer_arbre'] = $this->lang->line("header_creer_arbre");
        $data['header_deconnexion'] = $this->lang->line("header_deconnexion");
        $data['header_accueil'] = $this->lang->line("header_accueil");
        $data['header_individus'] = $this->lang->line("header_individus");
        //FIN HEADER

        //FOOTER

        $data['footer_accueil'] =$this->lang->line("footer_accueil");
        $data['footer_inscription'] =$this->lang->line("footer_inscription");
        $data['footer_recrutement'] =$this->lang->line("footer_recrutement");
        $data['footer_politique'] =$this->lang->line("footer_politique");

        //FIN FOOTER

        $this->load->view('Header_admin_view', $data);
        $this->load->view('Admin_tables_view', (array)$output);
        $this->load->view('Footer_admin_view', $data);

    }

}
