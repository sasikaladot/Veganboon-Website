<?php $this->load->view('includes/header');?>
		
		<!-- start page container -->
		<div class="page-container">
			<?php $this->load->view('includes/sidebar');?>
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<?php 
									if(isset($roles) && $roles->num_rows()>0){
									$b=$roles->row();	
									$tRoles=$b->tRoles;
									}
									?>
									<div class="info-box-content">
										<span class="info-box-text">Total Roles</span>
										<span class="info-box-number"><?=$tRoles;?></span>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<?php 
									if(isset($users) && $users->num_rows()>0){
									$b=$users->row();	
									$tUsers=$b->tUsers;
									}
									?>
									<div class="info-box-content">
										<span class="info-box-text">Total User</span>
										<span class="info-box-number"><?=$tUsers;?></span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i class="material-icons">local_library</i></span>
									<?php 
									if(isset($category) && $category->num_rows()>0){
									$b=$category->row();	
									$tCategory=$b->tBlogs;
									}
									?>
									
									<div class="info-box-content">
										<span class="info-box-text">Total Blog</span>
										<span class="info-box-number"><?=$tCategory;?></span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									
									<div class="info-box-content">
										<span class="info-box-text">Total Event</span>
										<span class="info-box-number">10</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-body ">
									<h4>Category List</h4>
									<div class="row table-padding">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group">
												<a href="<?=base_url();?>add-category" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group pull-right">
												<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-hover table-checkable order-column full-width" id="example4">
											<thead>
												<tr>
													<th> S. No</th>
													<th> Title </th>
													<th> Date </th>
													<th> Description </th>	
													<th> Action </th>
												</tr>
											</thead>
											<tbody>
											<?php
											if(isset($blogList) && $blogList->num_rows()>0)
											{
											$i=1;
											foreach($blogList->result() as $e)
											{
												$id=$e->id;
												$title=$e->title;
												$blogDate=$e->blogDate;
												$newDate = date("d-m-Y", strtotime($blogDate));
												$description=$e->description;
												$length=strlen($description);
												$description1 = substr($description, 0, 75);
												$image=$e->image;
											?>
												<tr class="odd gradeX">
													<td><?=$i;?></td>
													<td><?=$title;?></td>
													<td><?=$newDate;?></td>
													<td><?php if($length>75){ echo $description1.' ... ';} else {echo $description1;};?></td>
													<td>
														<a href="<?=base_url();?>view-blog/<?=$id;?>" class="btn btn-success btn-xs">
															<i class="fa fa-eye"></i>
														</a>
														<a href="<?=base_url();?>edit-blog/<?=$id;?>" class="btn btn-primary btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a data-id="<?=$id;?>"  class="editemployeeclass btn btn-danger btn-xs">
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
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-body ">
									<h4>Event List</h4>
									<div class="row table-padding">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group">
												<a href="<?=base_url();?>add-event" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group pull-right">
												<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-hover table-checkable order-column full-width" id="example4">
											<thead>
												<tr>
													<th> S. No</th>
													<th> Title </th>
													<th> Name </th>
													<th> Place </th>
													<th> Date </th>
													<th> Time </th>
													<th> Action </th>
												</tr>
											</thead>
											<tbody>
											<?php
											if(isset($eventList) && $eventList->num_rows()>0)
											{
											$i=1;
											foreach($eventList->result() as $e)
											{
												$id=$e->id;
												$title=$e->title;
												$name=$e->name;
												$place=$e->place;
												$description=$e->description;
												$eventDate=$e->eventDate;
												$newDate = date("d-m-Y", strtotime($eventDate));
												$eventTime=$e->eventTime;
												$image=$e->image;
											?>
												<tr class="odd gradeX">
													<td><?=$i;?></td>
													<td><?=$title;?></td>
													<td><?=$name;?></td>
													<td><?=$place;?></td>
													<td><?=$newDate;?></td>
													<td><?=$eventTime;?></td>
													<td>
														<a href="<?=base_url();?>view-event/<?=$id;?>" class="btn btn-success btn-xs">
															<i class="fa fa-eye"></i>
														</a>
														<a href="<?=base_url();?>edit-event/<?=$id;?>" class="btn btn-primary btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a data-id="<?=$id;?>"  class="editemployeeclass btn btn-danger btn-xs">
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
			<!-- end page content -->
			
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<?php $this->load->view('includes/footer');?>