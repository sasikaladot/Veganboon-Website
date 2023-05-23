<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model'); 	
	}
	
	public function employee_list()
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['emp']=$this->Employee_model->list_emp();
	
		$this->load->view('employee/list',$data);
	}
	public function viewEmployee($id)
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['viewEmployee']=$this->Employee_model->viewEmployee($id);
		//echo $this->db->last_query();exit;
		$this->load->view('employee/view',$data);
	}
	function add_employee()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		$data['role']=$this->Employee_model->list_role();
		
		if($this->input->post('submit'))
		{
			//echo "dsdsd";exit;
			$employeename=$this->input->post('employeename');
			$mobileNumber=$this->input->post('mobileNumber');
			$roleId=$this->input->post('roleId');
			$address=$this->input->post('address');
			$email=$this->input->post('email');
			$password=$this->input->post('Password');
			
			if (!is_dir('uploads/user')) {
				mkdir('./uploads/user', 0777, TRUE);

			}
			if(file_exists($_FILES['employeeImg']['tmp_name']))
			{
			$temp_user_img=$_FILES['employeeImg']['tmp_name'];
			$eImage=str_replace(' ', '_', $_FILES["employeeImg"]["name"]);
			$allowed =  array('png,jpeg,jpg');
			$extension1 = pathinfo($eImage, PATHINFO_EXTENSION);
			$eImage=date('ymdhi').'.'.$extension1;
			$targetPath='./uploads/user/';
			$targetFile=$targetPath.$eImage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="user";
			$values=array('name'=>$employeename,
			             'mobileNumber'=>$mobileNumber,
			             'roleId'=>$roleId,
						 'address'=>$address,
						 'email'=>$email,
						 'image'=>$eImage,
						 'password'=>md5($password),
						 'createdAt'=>date('Y-m-d h:i:s'),
						 'createdBy'=>$currentUser,
						 'status'=>1);
			$result=$this->Common_model->insert_table($table,$values);
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully added');
				redirect('employee');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('employee');
			}
			
		}
		$this->load->view('employee/add',$data);
	}
	function editEmployee($empid)
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$employeename=$this->input->post('employeename');
			$roleId=$this->input->post('roleId');
			$mobileNumber=$this->input->post('mobileNumber');
			$address=$this->input->post('address');
			$email=$this->input->post('email');
			$image=$this->input->post('image');
			$hiddenImage=$this->input->post('hiddenImage');
			$password=$this->input->post('password');
			$hiddenPassword=$this->input->post('hiddenPassword');
			if($password=="")
			{
				$newpassword=$hiddenPassword;
			}
			else
			{
				$newpassword=md5($password);
			}
			if($image==""){
				$newImage=$hiddenImage;
			}
			
			if(file_exists($_FILES['image']['tmp_name']))
			{
			$temp_user_img=$_FILES['image']['tmp_name'];
			$newImage=str_replace(' ', '_', $_FILES["image"]["name"]);
			$allowed =  array('png,jpeg,jpg');
			$extension1 = pathinfo($newImage, PATHINFO_EXTENSION);
			$newImage=date('ymdhi').'.'.$extension1;
			$targetPath='./uploads/user/';
			$targetFile=$targetPath.$newImage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="user";
			$where=array("id"=>$empid);
			$values=array('name'=>$employeename,
			             'roleId'=>$roleId,
			             'mobileNumber'=>$mobileNumber,
						 'address'=>$address,
						 'email'=>$email,
						 'image'=>$newImage,
						 'password'=>$newpassword,
						 'updatedAt'=>date('Y-m-d h:i:s'),
						 'updatedBy'=>$currentUser,
						 'status'=>1);
						 
			$result=$this->Common_model->updateTable($table,$where,$values);
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully Updated');
				redirect('employee');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('employee');
			}
			
		}
		$data['role']=$this->Employee_model->list_role();
		$data['emp']=$this->Employee_model->viewEmployee($empid);
		$this->load->view('employee/edit',$data);
	}
	
	function deleteEmployee()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			//echo "test";exit;
			$employeeId=$this->input->post('employeeId');
			//echo $employeeId;exit;
			$table="user";
			$where=array("id"=>$employeeId);
			$values=array('status'=>0,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
			$result=$this->Common_model->updateTable($table,$where,$values);
			
			if($result)
			{
				$this->session->set_userdata('suc','successfully deleted');
				redirect('employee');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('employee');
			}
		}	
	}
}
