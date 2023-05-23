<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Role_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	 
	function list_rol()
	{
		$this->db->select('*');
		$this->db->from('role');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
	//echo $this->db->last_query();exit;
		return $query;
	}
	 
}
