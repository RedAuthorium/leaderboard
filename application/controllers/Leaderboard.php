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
        $data = $this->user->getUser();
        $this->load->view('leaderboard/index', ['datas' => $data]); 
    }
    
}
