<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Complaints_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	function list_complaint()
	{
		$this->db->select('*');
		$this->db->from('complaints');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}
	
	function viewComplaint($id)
	{
		$this->db->select('*');
		$this->db->from('complaints');
		$this->db->where(array('status'=>1,'id'=>$id));
		$query = $this->db->get();
		return $query;
	}
	
	
	
}
