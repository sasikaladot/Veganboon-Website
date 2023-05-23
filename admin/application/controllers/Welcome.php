<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Common_model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function dashboard()
	{
		
		$data['roles']=$this->User_model->totalRoles();
		$data['users']=$this->User_model->totalUsers();
		$data['category']=$this->User_model->totalCategory();
		//$data['events']=$this->User_model->totalEvents();
		$data['categoryList']=$this->User_model->recentlyAddedCategory();
		//$data['eventList']=$this->User_model->recentlyAddedEvent();
		$this->load->view('dashboard',$data);
	}
	public function login()
	{
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$check=$this->User_model->getLoginDetail($username,$password);
		if($check->num_rows()>0)
		{
		$ch=$check->row();
		$this->session->set_userdata('username',$ch->email);
		$this->session->set_userdata('role',$ch->roleId);
		$this->session->set_userdata('image',$ch->image);
		$this->session->set_userdata('id',$ch->id);
		$this->session->set_userdata('suc',' Successfully Logged in..!');
		redirect('dashboard');
		
		}
		else
		{
		$this->session->set_userdata('err','The username or password is incorrect.');
		redirect('');
		}
		
	}
	public function logout()
	{
		$admin_id=$this->session->userdata('id');
		
        $data = array('id' => '', 'email' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('');
	}
	
	public function changePassword()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			
			$newpassword=$this->input->post('newpassword');
			$employeeId=$this->input->post('employeeId');
			
			$table="user";
			$where=array("id"=>$employeeId);
			$values=array('password'=>md5($newpassword),
			              'updatedBy'=>$currentUser);
						 
			$result=$this->Common_model->updateTable($table,$where,$values);
			if($result)
			{
				$this->session->set_userdata('suc','successfully Updated');
				redirect('change-password');
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('change-password');
			}
			
		}
		$this->load->view('changepassword');
	}
	
}
