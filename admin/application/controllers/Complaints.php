<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaints extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Complaints_model'); 	
	}
	
	public function complaintList()
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['complaints']=$this->Complaints_model->list_complaint();
		$this->load->view('complaints/list',$data);
	}
	
	public function viewComplaint($id)
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['viewComplaint']=$this->Complaints_model->viewComplaint($id);
		//echo $this->db->last_query();exit;
		$this->load->view('complaints/view',$data);
	}
	public function editComplaint()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		//$data['viewComplaint']=$this->Complaints_model->viewComplaint($id);
		
		if($this->input->post('editSubmit'))
		{
			$complaintId=$this->input->post('complaintId');
			$complaintStatus=$this->input->post('complaintStatus');
			$table="complaints";
			$where=array("id"=>$complaintId);
			$values=array('complaintStatus'=>$complaintStatus,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
			$result=$this->Common_model->updateTable($table,$where,$values);
			
			if($result)
			{
				$this->session->set_userdata('suc','successfully Updated');
				redirect('complaints');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('complaints');
			}
		}	
		$this->load->view('complaints/view',$data);
	}
	public function deleteComplaint()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		if($this->input->post('submit'))
		{
			$complaintId=$this->input->post('complaintId');
			
			$table="complaints";
			$where=array("id"=>$complaintId);
			$values=array('status'=>0,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
			$result=$this->Common_model->updateTable($table,$where,$values);
			
			if($result)
			{
				$this->session->set_userdata('suc','successfully Updated');
				redirect('complaints');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('complaints');
			}
		}	
		$this->load->view('complaints/view',$data);
	}
}
