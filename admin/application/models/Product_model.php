<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {

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
	function list_product()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}

	function list_tags()
	{
		$this->db->select('*');
		$this->db->from('tags');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}
}
