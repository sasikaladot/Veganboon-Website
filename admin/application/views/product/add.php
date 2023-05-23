<link href="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!--select2-->
<link href="<?=base_url();?>assets/summernote/summernote.css" rel="stylesheet">
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
						<div class="page-title">Add Product</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li>&nbsp;<a class="parent-item" href="<?=base_url();?>/product">Product</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Add Product</li>
					</ol>
				</div>
			</div>
			<!-- Midium Model -->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Product</header>	
						</div>
						<div class="card-body" id="bar-parent">
							<form action="<?=base_url();?>add-product" method="post" enctype="multipart/form-data">
								<div class="form-body">
									<div class="form-group row">
										<label class="control-label col-md-3">Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">											
											<input type="text" name="name" data-validation="required" placeholder="Enter Name" class="form-control input-height">
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Category
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">											
											<select class="form-control select2" id="departentId" name="categoryId" data-validation="required">
											<option value="" selected="selected">Select</option>
											<?php
												   if(isset($category) && $category->num_rows()>0)
												   { 
													   foreach($category->result() as $categories)
													   {
														   ?> <option value="<?=$categories->id;?>"><?=$categories->name;?></option><?php
													   }
												   }
											?>     
												
											</select>
										</div>
									</div>
						
									<div class="form-group row">
										<label class="control-label col-md-3">Tags
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
										<select class="form-control select2" multiple="multiple" id="product_tags_id" name="product_tags[]"  data-validation="required">
									       <option value="" selected="selected">Select</option>
                                    <?php
											if(isset($list_protags) && $list_protags->num_rows()>0)
											{
												foreach($list_protags->result() as $list)
												{
													$tagid=$list->id;
													$product_id=$list->productId;
													$product_tags=$list->tags;
													?><option value="<?=$tagid;?>"><?=$product_tags;?></option><?php
												}
											}
											?>
                                </select>
							</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Product Image
										</label>
										<div class="col-md-5 compose-editor">
											<input name="image[]" type="file" multiple data-validation="required" placeholder="Enter Your Image"class="form-control default">
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Description
											<span class="required" aria-required="true"> * </span>
										</label>
										<div class="col-md-10">											
											<textarea id="describenotes" name="description" data-validation="required" 
											placeholder="Enter Description" class="form-control input-height"></textarea>
											<div id="editor_error"> </div>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Nutrition Facts
											<span class="required"> * </span>
										</label>
										<div class="col-md-10">											
											<textarea id="nutrinotes" name="nutritionFacts" data-validation="required" placeholder="Enter Description" 
											class="form-control input-height"></textarea>
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
<script src="<?=base_url();?>assets/summernote/summernote.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#describenotes,#nutrinotes').summernote({
        
        fontNames: ["Arial", "Arial Black", "Comic Sans MS", "Courier New", "Helvetica Neue", "Helvetica", "Impact", "Lucida Grande", "Tahoma", "Times New Roman", "Verdana", "Poppins"],
fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150']
/*  toolbar: [
     // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
   ]
        */
    });
});

</script>
<script>
$(document).ready(function() {
    function initializeSelect2(selectElementObj) {
        selectElementObj.select2({
            width: "100%",
            multiple: true,
            tags: true
        });
    }
    $("#product_tags_id").each(function() {
        initializeSelect2($(this));
    });

});
</script>
<script>
$("#departentId").change(function() {
	//alert("hi123");
    var cat = $(this).val();
	//console.log(cat);
    gat_subcat_details(cat);
    get_keywords(cat);

});