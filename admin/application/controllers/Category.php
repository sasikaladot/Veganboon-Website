<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model'); 	
	}
	
	public function categoryList()
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['category']=$this->Category_model->list_category();
		$this->load->view('category/list',$data);
	}
	
	public function viewCategory($id)
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['viewCategory']=$this->Category_model->viewCategory($id);
		//echo $this->db->last_query();exit;
		$this->load->view('category/view',$data);
	}
	
	function addCategory()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			//echo "dsdsd";exit;
			$title=$this->input->post('title');
			$name=$this->input->post('name');
			if (!is_dir('uploads/category')) {
				mkdir('./uploads/category', 0777, TRUE);

			}
			if(file_exists($_FILES['image']['tmp_name']))
			{
			$temp_user_img=$_FILES['image']['tmp_name'];
			$bimage=str_replace(' ', '_', $_FILES["image"]["name"]);
			$allowed =  array('png,jpeg,jpg');
			$extension1 = pathinfo($bimage, PATHINFO_EXTENSION);
			$bimage=date('ymdhi').'.'.$extension1;
			$targetPath='./uploads/category/';
			$targetFile=$targetPath.$bimage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="category";
			$values=array('title'=>$title,
			             'name'=>$name,
			             'image'=>$bimage,
						 'createdAt'=>date('Y-m-d h:i:s'),
						 'createdBy'=>$currentUser,
						 'status'=>1);
			$result=$this->Common_model->insert_table($table,$values);
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully added');
				redirect('category');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('category');
			}
			
		}
		$this->load->view('category/add');
	}
	
	function editCategory($categoryId)
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$title=$this->input->post('title');
			$name=$this->input->post('name');
			$hiddenImage=$this->input->post('hiddenImage');
			$image=$this->input->post('image');
			
			
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
			$targetPath='./uploads/category/';
			$targetFile=$targetPath.$newImage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="category";
			$where=array("id"=>$categoryId);
			$values=array('title'=>$title,
			             'name'=>$name,
			             'image'=>$newImage,
						 'updatedAt'=>date('Y-m-d h:i:s'),
						 'updatedBy'=>$currentUser,
						 'status'=>1);
						 
			$result=$this->Common_model->updateTable($table,$where,$values);
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully Updated');
				redirect('category');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('category');
			}
			
		}
		$data['category']=$this->Category_model->viewCategory($categoryId);
		$this->load->view('category/edit',$data);
	}
	
	function deleteCategory()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$categoryId=$this->input->post('categoryId');
			$table="category";
			$where=array("id"=>$categoryId);
			$values=array('status'=>0,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
			$result=$this->Common_model->updateTable($table,$where,$values);
			
			if($result)
			{
				$this->session->set_userdata('suc','successfully deleted');
				redirect('category');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('category');
			}
		}	
	}
}
