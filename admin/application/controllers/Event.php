<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_model'); 	
	}
	
	public function eventList()
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['event']=$this->Event_model->list_event();
		//echo $this->db->last_query();exit;
		$this->load->view('event/list',$data);
	}
	
	public function viewEvent($id)
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['viewEvent']=$this->Event_model->viewEvent($id);
		//echo $this->db->last_query();exit;
		$this->load->view('event/view',$data);
	}
	
	function addEvent()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			//echo "dsdsd";exit;
			$title=$this->input->post('title');
			$name=$this->input->post('name');
			$place=$this->input->post('place');
			$description=$this->input->post('description');
			$eventDate=$this->input->post('eventDate');
			$eventTime=$this->input->post('eventTime');
			
			if (!is_dir('uploads/event')) {
				mkdir('./uploads/event', 0777, TRUE);

			}
			if(file_exists($_FILES['image']['tmp_name']))
			{
			$temp_user_img=$_FILES['image']['tmp_name'];
			$eimage=str_replace(' ', '_', $_FILES["image"]["name"]);
			$allowed =  array('png,jpeg,jpg');
			$extension1 = pathinfo($eimage, PATHINFO_EXTENSION);
			$eimage=date('ymdhi').'.'.$extension1;
			$targetPath='./uploads/event/';
			$targetFile=$targetPath.$eimage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="event";
			$values=array('title'=>$title,
			             'name'=>$name,
			             'place'=>$place,
			             'description'=>$description,
			             'eventDate'=>$eventDate,
			             'eventTime'=>$eventTime,
						 'image'=>$eimage,
						 'createdAt'=>date('Y-m-d h:i:s'),
						 'createdBy'=>$currentUser,
						 'status'=>1);
			$result=$this->Common_model->insert_table($table,$values);
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully added');
				redirect('event');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('event');
			}
			
		}
		$this->load->view('event/add');
	}
	
	function editEvent($eventId)
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$title=$this->input->post('title');
			$name=$this->input->post('name');
			$place=$this->input->post('place');
			$description=$this->input->post('description');
			$eventDate=$this->input->post('eventDate');
			$eventTime=$this->input->post('eventTime');
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
			$targetPath='./uploads/event/';
			$targetFile=$targetPath.$newImage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="event";
			$where=array("id"=>$eventId);
			$values=array('title'=>$title,
			             'name'=>$name,
			             'place'=>$place,
			             'description'=>$description,
			             'eventDate'=>$eventDate,
			             'eventTime'=>$eventTime,
						 'image'=>$newImage,
						 'updatedAt'=>date('Y-m-d h:i:s'),
						 'updatedBy'=>$currentUser,
						 'status'=>1);
						 
			$result=$this->Common_model->updateTable($table,$where,$values);
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully Updated');
				redirect('event');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('event');
			}
			
		}
		$data['event']=$this->Event_model->viewEvent($eventId);
		
		$this->load->view('event/edit',$data);
	}
	
	function deleteEvent()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$blogId=$this->input->post('blogId');
			$table="event";
			$where=array("id"=>$blogId);
			$values=array('status'=>0,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
			$result=$this->Common_model->updateTable($table,$where,$values);
			
			if($result)
			{
				$this->session->set_userdata('suc','successfully deleted');
				redirect('event');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('event');
			}
		}	
	}
}
