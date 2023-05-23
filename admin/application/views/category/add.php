<link href="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!--select2-->
<link href="<?=base_url();?>assets/select2/css/select2.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('includes/header');?>
<div class="page-container">
	<!-- start sidebar menu -->
	<?php $this->load->view('includes/sidebar');?>
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Add Category</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li>&nbsp;<a class="parent-item" href="<?=base_url();?>/category">category</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Add category</li>
					</ol>
				</div>
			</div>
			<!-- Midium Model -->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Category</header>	
						</div>
						<div class="card-body" id="bar-parent">
							<form action="<?=base_url();?>add-category" method="post" enctype="multipart/form-data">
								<div class="form-body">
									<div class="form-group row">
										<label class="control-label col-md-3">Title
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">											
											<input type="text" name="title" data-validation="required" placeholder="Enter Title" class="form-control input-height">
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">											
											<input type="text" name="name" data-validation="required" placeholder="Enter Name" class="form-control input-height">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="control-label col-md-3">Blog Image
										</label>
										<div class="col-md-5 compose-editor">
											<input name="image" type="file" data-validation="required" placeholder="Enter Your Image"class="form-control default">
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