<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model{

    function add_article($data){
        $this->db->insert('articles', $data);
    }

    public function edit_article($data){
        $this->db->where('title', '5 стаття');
        $this->db->update('articles', $data);
    }
    public function del_article(){

    }
}

?>