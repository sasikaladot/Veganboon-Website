<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	function list_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}
	
	function viewBlog($id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where(array('status'=>1,'id'=>$id));
		$query = $this->db->get();
		return $query;
	}
	
	function viewCategory($categoryId)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where(array('status'=>1,'id'=>$categoryId));
		$query = $this->db->get();
		return $query;
	}
	
	
}
