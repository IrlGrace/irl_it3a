<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{	

		$this->load->view('includes/headerHome');
		$this->load->view('includes/navigationHome');
		$this->load->view('home/home');
		$this->load->view('includes/footer');
		
	}

	public function register(){
		
	}
	public function about(){
		$this->load->view('includes/headerHome');
		$this->load->view('includes/navigationHome');
		$this->load->view('home/about');
		$this->load->view('includes/footer');
	}
	
	
}