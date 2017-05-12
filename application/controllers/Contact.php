<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('contact_model');
    }
	public function index(){
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
        $this->contact_model->contact($nom, $prenom, $email, $message);
		$this->render('main');
	}
}
?>