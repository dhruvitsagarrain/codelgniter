<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
     
	function __construct() { 
        parent::__construct(); 
        $this->load->library('form_validation'); 
    } 
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('dashboard');
	}
}
