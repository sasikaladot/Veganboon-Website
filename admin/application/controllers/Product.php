<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model'); 	
	}
	
	public function productList()
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['product']=$this->Product_model->list_product();
		$this->load->view('product/list',$data);
	}
	
	public function viewProduct($id)
	{
		if($this->session->userdata('id')==""){redirect('');}
		
		$data['viewProduct']=$this->Product_model->viewProduct($id);
		//echo $this->db->last_query();exit;
		$this->load->view('product/view',$data);
	}
	
	function addProduct()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		$data['category']=$this->Product_model->list_category();
		//echo $this->db->last_query();exit;
		$data['list_protags']=$this->Product_model->list_tags();
		if($this->input->post('submit'))
		{
			//echo "dsdsd";exit;
			$categoryId=$this->input->post('categoryId');
			$name=$this->input->post('name');
			$description=$this->input->post('description');
			$nutritionFacts=$this->input->post('nutritionFacts');
			$product_tags = $this->input->post('product_tags[]');
            $tags = implode(',', $this->input->post('product_tags'));
			
			foreach ($product_tags as $key => $value) {
                $tablename = 'tags';
                $data = array(
                    'productId ' => $product_id,
                    'tags' => $product_tags[$key],
                    'status' => 1
                );
                $product_tags = $this->Common_model->insert_table($tablename, $data);
                $producttag_id = $this->db->insert_id();
            }

			if (!$product) {
                $this->session->set_userdata('err', '  Please try again! your add tags');
                redirect('admin/products');
            }

			$table="product";
			$values=array('categoryId'=>$categoryId,
			             'name'=>$name,
			             'description'=>$description,
			             'nutritionFacts'=>$nutritionFacts,
						 'createdAt'=>date('Y-m-d h:i:s'),
						 'createdBy'=>$currentUser,
						 'status'=>1);
			$result=$this->Common_model->insert_table($table,$values);
			$productId=$this->db->insert_id();
			
			
				foreach($_FILES['image']['tmp_name'] as $key=>$value)
				{
					if($_FILES['image']['tmp_name'])
					{
						if (!is_dir('uploads/product')) {
						mkdir('./uploads/product', 0777, TRUE);
						}
						$temp_vehicle_doc=$_FILES['image']['tmp_name'][$key];
						$productImage=str_replace(' ', '_', $_FILES["image"]["name"][$key]);
						$extension1 = pathinfo($productImage, PATHINFO_EXTENSION);
						$pImage=$productId.'-'.$productImage;
						$document='uploads/product/'.$pImage;
						$targetPath = './uploads/product/'; 
						$targetFile=$targetPath.$pImage;
						
						if(move_uploaded_file($temp_vehicle_doc, $targetFile))
						{ 
							$tablename='productimage';
							$data=array('productId'=>$productId,
										'image'=>$pImage,
										'status'=>1);
								
							$product=$this->Common_model->insert_table($tablename,$data);
						//echo $this->db->last_query();

						}		 
					}		
				}
			
			
			//echo $this->db->last_query();exit;
			if($result)
			{
				$this->session->set_userdata('suc','successfully added');
				redirect('product');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect(product);
			}
			
		}
		$this->load->view('product/add',$data);
	}
	
	function editProduct($productId)
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
			$targetPath='./uploads/product/';
			$targetFile=$targetPath.$newImage;
			move_uploaded_file($temp_user_img, $targetFile);
			}
			$table="product";
			$where=array("id"=>$productId);
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
				redirect('product');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('product');
			}
			
		}
		$data['product']=$this->Product_model->viewProduct($productId);
		$this->load->view('product/edit',$data);
	}
	
	function deleteProduct()
	{
		if($this->session->userdata('id')==""){redirect('');}
		$currentUser=$this->session->userdata('id');
		
		if($this->input->post('submit'))
		{
			$productId=$this->input->post('productId');
			$table="product";
			$where=array("id"=>$productId);
			$values=array('status'=>0,'updatedAt'=>date('Y-m-d h:i:s'),'updatedBy'=>$currentUser);
			$result=$this->Common_model->updateTable($table,$where,$values);
			
			if($result)
			{
				$this->session->set_userdata('suc','successfully deleted');
				redirect('product');
				
			}
			else
			{
				$this->session->set_userdata('err','Please try again');
				redirect('product');
			}
		}	
	}
}
