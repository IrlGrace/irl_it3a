<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('category_model','Category');
	}

	public function index()
	{	$data['title'] = "List of Category";
		
		$category = array();
		
		//$condition = array('sex'=>'F','course'=>'BSIT');
		
		$rs = $this->Category->read();

		foreach($rs as $r){
			$info = array(
						'categoryNo' => $r['categoryNo'],
						'categoryDesc' => $r['categoryDesc'],					
						);
			$category[] = $info;
		}
		
		$data['category'] = $category;
		
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('category/category',$data);
		$this->load->view('includes/footer');
	}	
	public function add_category(){
        $data = array();
		$data['title']='Add Category';

		if( $_SERVER['REQUEST_METHOD']=='POST'){ 
				
				$this->form_validation->set_rules('categoryDesc','Category Name','required');
	 		//NEED NG CHECK FOR DUPLICATION!
	        if ($this->form_validation->run() === FALSE)
	        {
	 			
	 		}		
	        else
	        {
	        	$record = array(	
									'categoryDesc'=>$_POST['categoryDesc'],
								);
	        	$duplicate= $this->Category->check_duplicate($record);
	        	
				if($duplicate){
					$data['duplicate']=TRUE;
				}else{
					$last_id = $this->Category->create($record);
					
					$data['added']=TRUE;
				}

	        }			
			
		}
		
		
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('category/add_category',$data);
		$this->load->view('includes/footer');
		

	}
	public function update_category($categoryNo){
		$data = array();
		$data['title']='Update Category';
		$category = array();
		//GETTING DATA
		//$record = array('categoryNo'=>$categoryNo);
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 
				
				$this->form_validation->set_rules('categoryDesc','Category Name','required');
	 		//NEED NG CHECK FOR DUPLICATION!
	        if ($this->form_validation->run() === FALSE)
	        {
	 			
	 		}		
	        else
	        {

	        	$record = array(	
									'categoryDesc'=>$_POST['categoryDesc'],
								);
	        	print_r($record);
	        	$duplicate= $this->Category->check_duplicate($record);
	        	
				if($duplicate){
					$data['duplicate']=TRUE;
				}else{
					$data['updated'] = $this->Category->update($categoryNo,$record);
					
					
				}

	        }			
			
		}else{
			$rs= $this->Category->get_category($categoryNo);

			print_r($rs);
			foreach($rs as $r){
				$info = array(
							'cn' => $r['categoryNo'],
							'cd' => $r['categoryDesc']					
							);
				$category = $info;
			}
			
			print_r($category);
			$data['edit']=true;
			$data['chosen']=$category;
		}
		
		
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('category/add_category',$data);
		$this->load->view('includes/footer');

		
	}
	public function delete_category($categoryNo){
		$data = array();
		$data['title']='List of Category';

		$record = array(	
									'categoryNo'=>$categoryNo,
								);

    	$data['deleted']=$this->Category->delete_category($record);

		  
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('category/category',$data);
		$this->load->view('includes/footer');

	}
}