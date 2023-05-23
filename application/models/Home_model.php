<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	
	function __construct()
    {
        parent::__construct();
	}

    function list_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where(array('status'=>1));
		$result = $this->db->get();
		return $result;
	}
}