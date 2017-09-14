<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{	
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('dashboard/dashboard');
		$this->load->view('includes/footer');
	
	}	
}