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
								<div class="page-title">Employee List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Employee</li>
							</ol>
						</div>
					</div>
					<?php $this->load->view('includes/msg');?>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group">
											<a style="color:#fff;"href="<?=base_url();?>add-employee">
												<button  type="button" class="btn btn-info"
										 data-toggle="modal" data-target="#mediumModel" >add <i class="fa fa-plus"></i> </button>
										 </a>
											</div>
										</div>
										
									</div>
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width" id="example4">
											<thead>
												<tr>
													<th> S. No</th>
													<th> Name </th>
													<th> Mobile Number </th>
													<th> Email </th>	
													<th> Address </th>
													<th> Action </th>
												</tr>
											</thead>
											<tbody>
											<?php
													if(isset($emp) && $emp->num_rows()>0)
													{
													$i=1;
														foreach($emp->result() as $e)
														{
															$eid=$e->id;
															$name=$e->name;
															$mobileNumber=$e->mobileNumber;
															$email=$e->email;
															$image=$e->image;
															$address=$e->address;
															?>
												<tr class="odd gradeX">
													<td><?=$i;?></td>
													<td><?=$name;?></td>
													<td><?=$mobileNumber;?></td>
													<td><?=$email;?></td>
												
													<td><?=$address;?></td>
													<td>
														<a href="<?=base_url();?>view-employee/<?=$eid;?>" class="btn btn-success btn-xs">
															<i class="fa fa-eye"></i>
														</a>
														<a href="<?=base_url();?>edit-employee/<?=$eid;?>" class="btn btn-primary btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a data-id="<?=$eid;?>"  class="editemployeeclass btn btn-danger btn-xs">
															<i class="fa fa-trash-o"></i>
														</a>
														
													</td>
												</tr>
													<?php 
													$i++;
													}
													}?>
												
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
			<div class="modal fade" id="editmediumModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
									<form action="<?=base_url();?>Employee/deleteEmployee" method="post">
										<div class="form-body">
											
											<div class="form-group row">
												<p style="margin-left: 19px;">Do You Wante Delete?</p>

												<input type="hidden" name="employeeId" id="hiddenid">
												</div>
											
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<input type="submit" name="submit" class="btn btn-info m-r-20" value="Yes">
													<button type="button" class="btn btn-default">No</button>
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
		<script>
	$(".editemployeeclass").click(function(){
    $('#editmediumModel').modal('show');
	var id=$(this).attr('data-id');
	 //alert(id);
	 $('#hiddenid').val(id);
     });
	 </script>