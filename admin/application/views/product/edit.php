<link href="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('includes/header');?>
<link href="<?=base_url();?>assets/select2/css/select2.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

<style>
.input-group .input-group-addon {
border-radius: 0;
border-color: #d2d6de;
background-color: #fff;
border: 1px solid #d2d6de;
padding: 6px 12px;
}
.form-control{
width: 100%;
height: 34px;
padding: 6px 12px;
background-color: #fff;
border: 1px solid #c2cad8;
box-shadow: none!important;
outline: 0!important;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
font-size: 14px;
line-height: 1.42857;
color: #555;
}
.fa{
padding-top:8px;
}
</style>
<div class="page-container">
<?php $this->load->view('includes/sidebar');?>
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Edit Blog</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li>&nbsp;<a class="parent-item" href="<?=base_url();?>/blog">Blog</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li class="active">Edit Blog</li>
				</ol>
			</div>
		</div>
		<!-- Midium Model -->
		<?php
		if(isset($blog) && $blog->num_rows()>0)
		{
				$b=$blog->row();
				$id=$b->id;
				$title=$b->title;
				$blogDate=$b->blogDate;
				$description=$b->description;
				$image	=$b->image;
				
		} ?>
		
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card card-box">
					<div class="card-head">
						<header>Edit Blog</header>	
					</div>
					<div class="card-body" id="bar-parent">
						<form action="<?=base_url();?>edit-blog/<?=$id;?>" method="post" enctype="multipart/form-data">
							<div class="form-body">
								<div class="form-group row">
									<label class="control-label col-md-3">Title
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">											
										<input type="text" value="<?=$title;?>" name="title" data-validation="required" placeholder="Enter patient name" class="form-control input-height">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Blog Date
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">											
										<input type="date" value="<?=$blogDate;?>" name="blogDate" data-validation="required" placeholder="Enter patient name" class="form-control input-height">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Description
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<textarea type="text" name="description" data-validation="required" placeholder="Enter mobile number" class="form-control input-height" /><?=$description;?></textarea> </div>
								</div>
								
								<div class="form-group row">
									<label class="control-label col-md-3">Profile Image
									</label>
									<div class="col-md-5 compose-editor">
										<input name="image" type="file" placeholder="Enter Your Image"class="form-control default" multiple>
										<input type="hidden" name="hiddenImage" value="<?=$image;?>">
									</div>
									
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<img src="<?=base_url();?>/uploads/blog/<?=$image;?>" style="width:75px;height:75px;" /> 
									</div>
								</div>
								
							</div>
							<div class="form-actions">
								<div class="row">
									<div class="offset-md-3 col-md-9">
										<input type="submit" name="submit" class="btn btn-info m-r-20" value="Submit">
										<button type="button" class="btn btn-default" data-dismiss="">Cancel</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
	</div>
</div>
</div>
<?php $this->load->view('includes/footer');?>
<script src="<?=base_url();?>assets/select2/js/select2.js"></script>
<script src="<?=base_url();?>assets/select2/js/select2-init.js"></script>
<script src="<?=base_url();?>assets/jquery.form-validator.min.js"></script>