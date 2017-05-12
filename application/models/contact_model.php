<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_model extends CI_Model {
   private $table = "contact";
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function create($nom, $prenom, $email, $message){
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'message' => $message,
        );
        $this->db->insert($this->table, $data);
    }
}