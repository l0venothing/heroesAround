<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_view_onepage extends MY_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('contact_model');
    }

	public function index(){
		$this->render('main');
	}

}