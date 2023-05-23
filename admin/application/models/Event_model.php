<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	function list_event()
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where(array('status'=>1));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}
	
	function viewEvent($id)
	{
		$this->db->select('id,title,name,image,place,description,eventDate,eventTime');
		$this->db->from('event');
		$this->db->where(array('status'=>1,'id'=>$id));
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query;
	}
	
}
