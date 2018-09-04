<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class User extends CI_Model {

    public function getUser()
    {
        $data = $this->db->query("SELECT username FROM users");
        return $data->result_array();
    }
}