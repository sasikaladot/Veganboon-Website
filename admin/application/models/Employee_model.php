<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	function list_role()
	{
		$this->db->select('id,name');
		$this->db->from('role');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
		return $query;
	}
	function list_emp()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
	//echo $this->db->last_query();exit;
		return $query;
	}
	function viewEmployee($id)
	{
		$this->db->select('e.*,r.id as roleId,r.name as roleName');
		$this->db->from('user as e');
		$this->db->join('role as r','r.id=e.roleId','INNER');
		$this->db->where(array('e.status'=>1,'e.id'=>$id));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}
	function get_emp($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('status'=>1,'id'=>$id));
		$query = $this->db->get();
	//echo $this->db->last_query();exit;
		return $query;
	}
	
}
