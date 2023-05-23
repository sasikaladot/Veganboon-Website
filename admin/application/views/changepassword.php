<link href="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('includes/header');?>
<?=
$id=$this->session->userdata('id');
?>
<div class="page-container">
	<!-- start sidebar menu -->
	<?php $this->load->view('includes/sidebar');?>
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">My Profile</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">My Profile</li>
					</ol>
				</div>
			</div>
			<!-- Midium Model -->
			<?php $this->load->view('includes/msg');?>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-body" id="bar-parent">
							<form action="<?=base_url();?>Welcome/changePassword" method="post">
								<div class="form-body">
									<div class="form-group row">
										<label class="control-label col-md-3">Current Password
											<span class="required"> * </span>
										</label>
										<div class="input-group col-md-5">
											<input name="oldpassword" id="currentPassword" type="text" data-validation="required" placeholder="Enter your current password" class="form-control" /> 
											<span class="input-group-btn" id="hideTick">
												<button style="height: 39px;" type="button" class="btn btn-success btn-check"><i class="fa fa-check"></i></button>
											</span>
											<span class="input-group-btn wrongPassword" style="display:none" id="hideTick">
												<button style="height: 39px;" type="button" class="btn btn-danger btn-check"><i class="fa fa-times"></i></button>
											</span>
											<input type="hidden" name="employeeId" value="<?=$id;?>" id="employeeId"/>
										</div>
										
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">New Password
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input name="newpassword" type="text" placeholder="Enter your New password" class="form-control" />
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<input type="submit" name="submit" class="btn btn-info m-r-20" value="Submit">
											<button type="button" class="btn btn-default">Cancel</button>
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
<script src="<?=base_url();?>assets/jquery.form-validator.min.js"></script>
<script>
$(document).ready(function() {
    $("#hideTick").hide();
});
</script>
<script>

var base_path=$('body').attr('data-path');
$("#currentPassword").keyup(function(){
	var oldPassword=$("#currentPassword").val();
	var employeeId=$('#employeeId').val();
	//alert(oldPassword);
	var url=base_path+"Welcome/getOldPassword";
	//alert(url);
	$.post(url,{oldPassword:oldPassword,employeeId:employeeId,csrf_test_name:$.cookie('csrf_cookie_name')},function(result)
	{
		if(result=="true")
		{
			$('input[type="submit"]').attr('disabled',false);
			$("#hideTick").show();
			$(".wrongPassword").css("display", "none");
			
		}
		else
		{
			
		$('input[type="submit"]').attr('disabled',true);
		$("#hideTick").hide();
		$(".wrongPassword").css("display", "block");
			
		}
	});
});
</script>