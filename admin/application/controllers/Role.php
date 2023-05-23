<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Role_model'); 
	}

	public function listrole()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$data['rol']=$this->Role_model->list_rol();
		$this->load->view('roles/role_list',$data);
	}
	function addrole()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$role=$this->input->post('rolename');
			
			$table="role";

			$values=array('name'=>$role,
						 'createdAt'=>date('Y-m-d h:i:s'),
						 'createdBy'=>$currentUser,
						 'status'=>1);
						 
			$result=$this->Common_model->insert_table($table,$values);
			if($result)
						{
							$this->session->set_userdata('suc','successfully added');
							redirect('roles');
						}
						else
						{
							$this->session->set_userdata('err','Please try again');
							redirect('roles');
						}
			
		}
	}
	function editrole()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$rolename=$this->input->post('rolename');
			$primaryid=$this->input->post('hiddenroleid');
			
			$table="role";
			$where=array("id"=>$primaryid);
			$values=array('name'=>$rolename,
						 'updatedAt'=>date('Y-m-d h:i:s'),
						 'updatedBy'=>$currentUser,
						 'status'=>1);
						 
			$result=$this->Common_model->updateTable($table,$where,$values);
			 //echo $this->db->last_query();exit;
			if($result)
						{
							$this->session->set_userdata('suc','successfully Updated');
							redirect('roles');
						}
						else
						{
							$this->session->set_userdata('err','Please try again');
							redirect('roles');
						}
          //echo $this->db->last_query();exit;
		}
		$this->load->view('roles/role_list',$data);
	}
	function deleterole()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{

			$primaryid=$this->input->post('hiddengffgdtpid');
			//echo $primaryid ; exit;
			$table="role";
			$where=array("id"=>$primaryid);
			$values=array(
			'status'=>0,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
						 
			$result=$this->Common_model->updateTable($table,$where,$values);
			if($result)
						{
							$this->session->set_userdata('suc','successfully deleted');
							redirect('roles');
							
						}
						else
						{
							$this->session->set_userdata('err','Please try again');
							redirect('roles');
						}
			
		}
	}

}
