
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
        public $data =array();
     
    public function render($view, $template='template/base/index')//affiche + infos que je te donne
    {
        $this->data["view_content"] = $this->load->view($view, $this->data, TRUE);
        $this->load->view($template, $this->data);
    }
   


}