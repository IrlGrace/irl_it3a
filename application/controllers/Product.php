<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_model','Product');
	}
	
	public function index()
	{	$data['title'] = "List of Product";
		
		$product = array();
		
		//$condition = array('sex'=>'F','course'=>'BSIT');
		
		$rs = $this->Product->read();
 
		foreach($rs as $r){
			$info = array(
						'productID' => $r['productID'],
						'productDesc' => $r['productDesc'],
						'categoryID' => $r['categoryID'],
						'quantity' => $r['quantity'],
						'price' => $r['price']					
						);
			$product[] = $info;
		}
		
		$data['product'] = $product;

		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('product/product',$data);
		$this->load->view('includes/footer');
	}	

	public function add_product($cid){
        $data = array();
		$data['title']='Add Product';
		if(!$cid='null'){
			$data['cid']=$cid;
		}
		//LOADING CATEGORY

		$category = $this->getCategory();
		
		$data['category'] = $category;

		//POST
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 

			$validate = array(
				array('field'=>'productDesc', 'label'=>'productDesc', 'rules'=>'required|min_length[2]'),
				array('field'=>'categoryID', 'label'=>'categoryID', 'rules'=>'required'),
				array('field'=>'quantity', 'label'=>'quantity', 'rules'=>'required|min_length[2]'),
				array('field'=>'price', 'label'=>'price', 'rules'=>'required|min_length[2]')

			);

			$this->form_validation->set_rules($validate);
				
	        if ($this->form_validation->run() === FALSE)
	        {
	 			$data['errors'] = validation_errors();
	 		}		
	        else
	        {
	        	$rows=$this->getRowsInCategory($_POST['categoryID']);
	        	$rows++;
	        	$pid=$this->assignProductID($_POST['categoryID'],$rows);
	        	//echo $pid;
	        	
	        	$record = array(	'productID' => $pid,
	        						'productDesc' => $_POST['productDesc'],
									'categoryID'=>$_POST['categoryID'],
									'quantity' =>$_POST['quantity'],
									'price' => $_POST['price']
								);
	        	$duplicate= $this->Product->check_duplicate($record);
	        	
				if($duplicate){
					$data['duplicate']=TRUE;
				}else{
					$last_id = $this->Product->create($record);
					
					$data['added']=TRUE;
				}

	        }			
			
		}
		
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/menu');
		$this->load->view('product/add_product',$data);
		$this->load->view('includes/footer');
		

	}
	public function getRowsInCategory($cid){
		$record = array(	'categoryID'=>$_POST['categoryID'],);
		$rs=$this->Product->get_product($record);
		$numOfRows=sizeof($rs);
		return $numOfRows;
	}
	public function assignProductID($categoryID,$num){
		$digit='';
		if($num<10){
			$digit='000'.$num;
		}elseif($num<100&&$num>9){
			$digit='00'.$num;
		}elseif($num<1000&&$num>99){
			$digit='0'.$num;
		}else{
			$digit=''.$num;
		}
		$pid=$categoryID.'-'.$digit;
		return $pid;
	}
	public function getCategory(){
		//LOADING CATEGORY
		$this->load->model('category_model','Category');

		$category = array ();

		$rs = $this->Category->read();

		foreach($rs as $r){
			$info = array(
						'categoryNo' => $r['categoryNo'],
						'categoryDesc' => $r['categoryDesc'],					
						);
			$category[] = $info;
		}
		
		return $category;

	}
	public function update_category(){
		
	}
	
}