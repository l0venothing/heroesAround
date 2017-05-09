<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Top extends CI_Controller{

public function News() {
    parent::__construct();
    
   
    
  }

public function index(){

    $this->load->view("article_view");
}

}