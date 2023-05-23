<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	
	public function getLoginDetail($username,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$username);
		$this->db->where(array('password'=>md5($password),'status'=>1));
		$query = $this->db->get();
		return $query;
	
	}
	
	function recentlyAddedCategory()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->order_by("id", "desc");
		$this->db->limit(10);
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
	//echo $this->db->last_query();exit;
		return $query;
	}
	
	function totalRoles()
	{
		$this->db->select('count(id) as tRoles');
		$this->db->from('role');
		$this->db->where(array('status'=>1));
		$result = $this->db->get();
		return $result;
	}
	function totalUsers()
	{
		$this->db->select('count(id) as tUsers');
		$this->db->from('user');
		$this->db->where(array('status'=>1));
		$result = $this->db->get();
		return $result;
	}
	function totalCategory()
	{
		$this->db->select('count(id) as tBlogs');
		$this->db->from('category');
		$this->db->where(array('status'=>1));
		$result = $this->db->get();
		return $result;
	}
	
	
	
}
