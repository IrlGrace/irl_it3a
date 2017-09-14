<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$this->load->view('includes/headerHome');
		$this->load->view('includes/navigationHome');
		$this->load->view('home/home');
		$this->load->view('includes/footer');
	}

	public function checkLogin(){
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|callback_verifyUser');

		if($this->form_validation->run()==false){
			$this->load->view('includes/headerHome');
			$this->load->view('includes/navigationHome');
			$this->load->view('home/home');
			$this->load->view('includes/footer');
		}else{
			//redirect('Home/index');
			$this->load->view('includes/header');
			$this->load->view('includes/navigation');
			$this->load->view('includes/menu');
			$this->load->view('dashboard/dashboard');
			$this->load->view('includes/footer');
		}

	}
	public function verifyUser(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$this->load->model('LoginModel');

		if($this->LoginModel->login($email,$password)){
			return true;
		}else{
			$this->form_validation->set_message('verifyUser','Incorrect Email or Passsword');
			return false;
		}
	}

	public function logout(){
			$this->load->view('includes/headerHome');
			$this->load->view('includes/navigationHome');
			$this->load->view('home/home');
			$this->load->view('includes/footer');
	}
}

?>