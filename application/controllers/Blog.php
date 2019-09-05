<?php

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

    public function index()
    {


        $this->load->model('Blog_model');

        $data['titre'] = 'Blog';
        $data['javascript'] = 'accueil.js';

        $data['blog'] = $this->Blog_model->get_article();

        $data['article'] = $this->Blog_model->get_1_article($this->input->get('id'));

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

        //BLOG
        $data['blog_plus'] =$this->lang->line("blog_plus");
        //FIN BLOG

        $this->load->view('Header_view', $data);
        $this->load->view('Blog_view', $data);
        $this->load->view('Footer_view', $data);



        /*$data['valide'] = 'pas encore validé';

        if ($this->input->get('test') == TRUE) {
            $data['msg'] = $this->input->get('test');
        }
        else {}

        $data['blog'] = $this->Blog_model->get_article();

        $this->load->view('Header_view');
        $this->load->view('Blog_view', $data);*/
    }

    public function add() {

       /* $this->load->model('Blog_model');

        $title = $this->input->post('titre');
        $content = $this->input->post('content');
        $tags = $this->input->post('tags');

        date_default_timezone_set('France');

        $date = date('Y-m-d');

        $validation = $this->Blog_model->add_article($title, $content, $date, $tags);
        redirect(Blog.'/?test='.$validation.'');*/

       //----------

       /* if (empty($title) || empty($content)) {
            echo $date['invalide'] = 'field required';
        }

        else {
            if ($this->db->query("INSERT INTO blog (blog_titre, blog_contenu) VALUES ('$title', '$content')")) {
                $msg_confirmation = 'Article ajouté';
                redirect(Blog.'/?test='.$msg_confirmation.'');
            }
        }*/



    }
}