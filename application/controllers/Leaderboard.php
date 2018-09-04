<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaderboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }

	public function index()
	{	
        $this->load->model('user');
        $data1 = $this->user->getUser();
        $data = array('data1' => $data1);
        $this->load->view('leaderboard', $data);

        

        $this->load->model('user');
        $data = $this->user->getUser();

        // print_r($data);
        // die();
        // $data1 = $this->user->getUser();
        // $data = array('data1' => $data1);
        // $view['data']=$data;
        $this->load->view('leaderboard.blade.php', ['datas' => $data]);
    }
    
}
