<!-- data tables -->
<link href="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('includes/header');?>
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php $this->load->view('includes/sidebar');?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Roles List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Roles</li>
							</ol>
						</div>
					</div>
					<?php $this->load->view('includes/msg');?>
					<div class="row">
						<div class="col-md-8">
							<div class="card card-topline-red">
								
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group">
												<button type="button" class="btn btn-info"
										 data-toggle="modal" data-target="#mediumModel">Add <i class="fa fa-plus"></i></button>
											</div>
										</div>
										
									</div>
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width" id="example4" style="width:128px">
											<thead>
												<tr>
													<th> S.No </th>
													<th> Name </th>
													<th> Action </th>
												</tr>
											</thead>
											<tbody>
												<?php
													if(isset($rol) && $rol->num_rows()>0)
													{
													$i=1;
														foreach($rol->result() as $r)
														{
														
															//$id=$r->id;
															$id=$r->id;
															$rolename=$r->name;
															?>
												<tr class="odd gradeX">
												  
													<td><?=$i;?></td>
													<td><?=$rolename;?></td>
													
													<td>
													<a href="javascript:;"  data-id="<?=$id;?>" data-name="<?=$rolename;?>" class="editroleclass btn btn-primary btn-xs ">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="javascript:;"  data-id="<?=$id;?>"  class="deleteroleclass btn btn-danger btn-xs ">
															<i class="fa fa-trash-o"></i>
														</a>
													
													</td>
												</tr>
												<?php $i=$i+1;} }?>
												
											</tbody>
										</table>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
	   </div>
			<!-- end page content -->
			<!-- Midium Model -->
					<div class="modal fade" id="mediumModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					 aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel">Add Role</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="<?=base_url();?>add_role" method="post">
										<div class="form-body">
											
											<div class="form-group">
												<label class="control-label">Name<span class="required"> * </span></label>
												
													<input type="text" name="rolename" data-validation="required" placeholder="Enter name" class="form-control input-height">
												
											</div>
											
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<input type="submit" id="add_role" name="submit" class="btn btn-info m-r-20" value="Submit">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												</div>
											</div>
										</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
			<!-- Modal -->
		
                <div class="modal fade" id="editmediumModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					 aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel">Edit Role</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="<?=base_url();?>edit_role" method="post">
										<div class="form-body">
											
											<div class="form-group row">
												
												<div class="col-md-12">
												<label class="control-label">Role Name
													<span class="required"> * </span>
												</label>
													<input type="text" data-validation="required" name="rolename" id="editroleid" placeholder="Enter name" class="form-control input-height">
												<input type="hidden" name="hiddenroleid" id="hiddenroleid">
												</div>
											</div>
											
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<input type="submit" name="submit" class="btn btn-info m-r-20" value="Submit">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												</div>
											</div>
										</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
					    <div class="modal fade" id="delete1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					 aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel">delete Role</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="<?=base_url();?>delete_role" method="post">
										<div class="form-body">
											
											<div class="form-group row">
												<p style="margin-left: 19px;">Do you want to delete?</p>
												<input type="hidden" name="hiddengffgdtpid" id="hiddenid">
												</div>
											
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<input type="submit" name="submit" class="btn btn-info m-r-20" value="Yes">
													<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
												</div>
											</div>
										</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
			<?php $this->load->view('includes/footer');?>
			<!-- data tables -->
	<script src="<?=base_url();?>/assets/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="<?=base_url();?>/assets/table_data.js"></script>
	<script src="<?=base_url();?>assets/jquery.form-validator.min.js"></script>
	<script>
	$(".editroleclass").click(function(){
    $('#editmediumModel').modal('show');
	var name=$(this).attr('data-name');
	var id=$(this).attr('data-id');
	 $('#editroleid').val(name);
	 $('#hiddenroleid').val(id);
     });
	 $(".deleteroleclass").click(function(){
    $('#delete1').modal('show');
	
	var id=$(this).attr('data-id');
	//alert(id);
	 $('#hiddenid').val(id);
     });
	 
	</script>
	