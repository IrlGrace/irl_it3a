<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	

	public function sales_report(){
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('report/sales_report');
		$this->load->view('includes/footer');
		
	}
	public function inventory_report(){

		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('report/inventory_report');
		$this->load->view('includes/footer');
	}
	public function product_purchase(){

		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('report/product_purchase');
		$this->load->view('includes/footer');
	}
	
}