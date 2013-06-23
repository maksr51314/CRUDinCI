<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller{
    public function index (){
        $this->load->view('Crud_view');
    }

    public function add_article(){
        $data['title'] = "5 стаття";
        $data['text'] = "блаблабаа";
        $data['data'] = "2013-05-03";

        $this->load->model('Crud_model');
        $this->Crud_model->add_article($data);
    }
}

?>