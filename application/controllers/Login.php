<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 17/05/2019
 * Time: 15:10
 */
class Login extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load("message","english");
    }

	public function index(){

	    $data['titre'] = 'Sign in';

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
        $data['connexion_co'] = $this->lang->line("connexion_co");
        $data['connexion_compte'] = $this->lang->line("connexion_compte");
        $data['connexion_inscription'] = $this->lang->line("connexion_inscription");

//FIN CONNEXION

        $this->load->view('Header_view', $data);
        $this->load->view('Login_view');
	    $this->load->view('Footer_view');
	}

	public function verif(){

		$this->load->model('Login_model');

		if (!($this->Login_model->verif_user($this->input->post('mail'), $this->input->post('mdp')))) {

			redirect(base_url() . 'Login');




		}

	else{
		$droit = $this->Login_model->verif_grad($this->input->post('mail'), $this->input->post('mdp'));

		$_SESSION['ident'] = "";


		if ($droit[0]->user_droit =='admin' ){

			$_SESSION['ident'] = 'admin';

			redirect(base_url().'Gestion');

			}
			else{

                $user = $this->Login_model->pseudo_user($this->input->post('mail'));

                foreach ($user as $key) {
                    $_SESSION['ident'] = $key->user_pseudo;
                }


                redirect(base_url());



			}
		}

	}






	public function deconnexion(){
		unset($_SESSION['ident']);
		redirect(base_url());
	}


}
