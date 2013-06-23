<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller{
    public function index (){
        $this->load->view('Crud_view');
    }

    public function add_articles(){
        
    }
}

?>