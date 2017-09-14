<?php

class Product_model extends CI_Model {
    
	private $table = "product";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;
	}
	public function check_duplicate($data){
		$this->db->where($data);

	    $query = $this->db->get($this->table);

	    $count_row = $query->num_rows();

	    if ($count_row > 0) {
	        return TRUE; 
	     } else {
	        return FALSE; 
	     }
	   
	}

	public function read($condition=null){
		
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->order_by('productID', 'asc'); 
		if( isset($condition) ) $this->db->where($condition);
		
		$query=$this->db->get();

		return $query->result_array();		
	}

	public function update($id,$data){
		
	}
	public function get_product($data){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	
	public function delete_product($data){
		
	}
}