<?php
$roleId=$this->session->userdata('role');
?>
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
						 data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							
							<li class="nav-item start active open">
								<a href="<?=base_url();?>dashboard" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
									
									
								</a>
								
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">group</i>
									<span class="title">Human Resource</span>
									<span class="arrow"></span>
									
									
									
								</a>
								<ul class="sub-menu">
									<li class="nav-item  ">
										<a href="<?=base_url();?>roles" class="nav-link ">
											<span class="title">Role</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="<?=base_url();?>employee" class="nav-link ">
											<span class="title">Employee</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item  ">
								<a href="<?=base_url();?>category" class="nav-link nav-toggle">
								    <i class="material-icons">gamepad</i>
									<span class="title">Category</span></a>
								
							</li>
							<li class="nav-item  ">
								<a href="<?=base_url();?>product" class="nav-link nav-toggle">
								    <i class="material-icons"> gamepad</i>
									<span class="title">Product</span></a>
								
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
		