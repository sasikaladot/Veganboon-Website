 <?php include 'include/header.php';?>		
<style>


/*
 * 1) Modify the duration and delay.
 * 2) Modify the animation function.
 * 3) Try to combine the simple-square-to-circle and simple-scale animations (one & three).
 * 4) Why can't you combine animation simple-rotate and simple-scale?
 * 5) Add a new shape and animate its color.
 */

.simple-shape {
  width: 500px;
  height: 267px;
  display: inline-block;
  margin: 1px;
}



.four {
 
  -webkit-animation: simple-move 2s 2s linear infinite alternate;
  animation: simple-move 2s 2s linear infinite alternate;
}

@-webkit-keyframes simple-square-to-circle {
  100% {
    -webkit-border-radius: 50%;
  }
}

@keyframes simple-square-to-circle {
  100% {
    border-radius: 50%;
  }
}

@-webkit-keyframes simple-rotate {
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes simple-rotate {
  100% {
    transform: rotate(360deg);
  }
}

@-webkit-keyframes simple-scale {
  100% {
    -webkit-transform: scale(1.5);
  }
}

@keyframes simple-scale {
  100% {
    transform: scale(1.5);
  }
}

@-webkit-keyframes simple-move {
  100% {
    -webkit-transform: translate(50px, 0);
  }
}

@keyframes simple-move {
  100% {
    transform: translate(50px, 0);
  }
}



</style>
<!-- Start of Breadcrumb section
	============================================= -->
	<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/products.webp">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="or-breadcrumbs-content text-center">
				<div class="page-title headline"><h1>Approach</h1></div>
				<div class="or-breadcrumbs-items ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Approach</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Why choose section
	============================================= -->
	<section >
		<div class="container">
			<div class="or-why-choose-content">  
				<div class="row">
					<div class="col-lg-6" style="padding-top: 101px;">
						<div class="or-why-choose-feature position-relative">
							<div class="row">
								<div class="col-md-6">
									<div class="or-why-choose-feature-innerbox headline pera-content text-center">
										<div class="or-why-choose-feature-icon position-relative d-flex align-items-center justify-content-center">
											<i class="flaticon-return"></i>
										</div>
										<div class="or-why-choose-feature-text">
											<h3>Purely Natural</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="or-why-choose-feature-innerbox headline pera-content text-center">
										<div class="or-why-choose-feature-icon position-relative d-flex align-items-center justify-content-center">
											<i class="flaticon-leaf"></i>
										</div>
										<div class="or-why-choose-feature-text">
											<h3>100% Fresh</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="or-why-choose-feature-innerbox headline pera-content text-center">
										<div class="or-why-choose-feature-icon position-relative d-flex align-items-center justify-content-center">
											<i class="flaticon-headphones"></i>
										</div>
										<div class="or-why-choose-feature-text">
											<h3>Support 24/7</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="or-why-choose-feature-innerbox headline pera-content text-center">
										<div class="or-why-choose-feature-icon position-relative d-flex align-items-center justify-content-center">
											<i class="flaticon-credit-card"></i>
										</div>
										<div class="or-why-choose-feature-text">
											<h3>Trusted Brand</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="or-why-choose-text-wrapper">
							<div class="or-section-title headline pera-content">
								<span class="sub-title">Approach</span>
								<h2 class="case-animate-time">Trust, Pure and Wellness</h2>
								<p style="text-align:justify">Shanta Impex Pvt. Ltd is an India based Food company, set up to meet the growing demand for naturally grown crop and fruit and on the idea of creating an efficient bridge between small farmers in india and buyers across the world seeking high quality pure and fresh food. We adopted an intergrated approach to procuring,monitoring and selling our products to make the process as efficient,transpatent and fair as possible.</p>
							    <p style="text-align:justify">All Shanta Impex Pvt. Ltd. products support health and True Wellness and are made with loving care. Each product is one link in a chain of connectedness between Mother Nature, our farmers and you. By choosing Shanta Impex Pvt. Ltd. you are completing this chain, actively participating in our mission to create a sustainable environment of True Wellness, providing training and a life of dignity to our farmers, and bringing health, happiness and True Wellness to you</p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Why choose section
	============================================= -->


<!-- Start of Feeatur section
	============================================= -->
	<section id="or-portfolio" class="or-portfolio-section" >
		<div class="container">
			<div class="or-feature-content position-relative">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content" style="padding: 43px 30px 45px;">
							<div class="or-feature-img">
								<img src="assets/img/vision.png" alt="">
							</div>
							<div class="or-feature-text">
								<h3 style="font-size: 23px;">Our Vision</h3>
								<p>To be the most reliable supplier of pure and fresh products worldwide and also to promote sustainable farming methods among small and marginal farmers.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content" style="padding: 43px 30px 45px;">
							<div class="or-feature-img">
								<img src="assets/img/strength.png" alt="">
							</div>
							<div class="or-feature-text">
								<h3 style="font-size: 23px;">Our Strength</h3>
								<p>Customer Centric Model
									Consistent Commitment in Quality delivery
									Strong warehouse facility
									Ethical and Sustainable policy</p>
							</div>
						</div>
					</div>
				    <div class="col-lg-4 col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content">
							<div class="or-feature-img">
								<img src="assets/img/mission.png" alt="">
							</div>
							<div class="or-feature-text">
								<h3 style="font-size: 23px;">Our Mission</h3>
								<p>Promoting pure and natural fresh Farming over commercial farming. Maintaining transparency in dealing with customers and farmers. 
								economical or social Upliftment of small and marginal farmers .</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Feeatur section
	============================================= -->
	

	
		
	<!-- Start of Why choose section
	============================================= -->
	<section id="or-portfolio" class="or-portfolio-section" >
		<div class="container">
			<div class="or-why-choose-content">  
				<div class="row">
						<div class="col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content">
							<div class="or-feature-text">
								<h3>CSR</h3>
								<p>Shanta Impex has a policy of engaging in various activities for
									Corporate Social Responsibility to support the underprivileged, marginalised and weaker sections of the society.
									We respect the culture and customs of every nation and contribute to their development</p>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
					<div class="simple-shape four" >
					<div class="or-feature-img">
								<img src="assets/img/csr1.jpg" alt="">
							</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Start of service innerbox section
	============================================= -->
	<section id="or-service-page" class="or-service-page-section" style="padding-top: 20px;">
		<div class="container">
		<div class="or-section-title headline pera-content text-center middle-align wow fadeInUp" data-wow-delay="0ms" style="padding-bottom:40px;">
				<h4 class="case-animate-time">Our Development Blueprint is based on a Five Pillar Formula</h4>
				<span class="sub-title">Shanta Impex = A(EC)2</span>
			</div>
			<div class="or-service-page-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="or-service-page-innerbox headline pera-content position-relative">
							<div class="grid-item-inner wow fadeInUp" data-wow-duration="1.2s">
								<div class="item--featured"> 
									<a href="#">
										<img src="assets/img/about/ab3.jpg" alt="">
									</a>
								</div>
								<div class="item--icon icon-psb text-center">
									<i class="flaticon-cardboard"></i>
								</div>
								<div class="item--holder">
									<h3 class="item--title">Augment Quality and Volume on Existing Commodities</h3>
								</div>
								<div class="item--holder-hover">
									<div class="item--holder-inner">
										<h3 class="item--title">
											<a href="service-single.html">Shanta Impex = A(EC)2</a>
										</h3>
										<div class="item--content"> Augment Quality and Volume on Existing Commodities.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="or-service-page-innerbox headline pera-content position-relative">
							<div class="grid-item-inner wow fadeInUp" data-wow-duration="1.2s">
								<div class="item--featured"> 
									<a href="#">
										<img src="assets/img/about/ab2.jpg" alt="">
									</a>
								</div>
								<div class="item--icon icon-psb text-center">
									<i class="flaticon-cardboard"></i>
								</div>
								<div class="item--holder">
									<h3 class="item--title">Endeavour constantly to explore New Markets and New Product Lines</h3>
								</div>
								<div class="item--holder-hover">
									<div class="item--holder-inner">
										<h3 class="item--title">
											<a href="service-single.html">Shanta Impex = A(EC)2</a>
										</h3>
										<div class="item--content"> Endeavour constantly to explore New Markets and New Product Lines.</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="or-service-page-innerbox headline pera-content position-relative">
							<div class="grid-item-inner wow fadeInUp" data-wow-duration="1.2s">
								<div class="item--featured"> 
									<a href="#">
										<img src="assets/img/about/ab4.jpg" alt="">
									</a>
								</div>
								<div class="item--icon icon-psb text-center">
									<i class="flaticon-cardboard"></i>
								</div>
								<div class="item--holder">
									<h3 class="item--title">Chiselling our Brand Name and Reputation</h3>
								</div>
								<div class="item--holder-hover">
									<div class="item--holder-inner">
										<h3 class="item--title">
											<a href="service-single.html">Shanta Impex = A(EC)2</a>
										</h3>
										<div class="item--content"> Chiselling our Brand Name and Reputation.</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="or-service-page-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="or-service-page-innerbox headline pera-content position-relative">
							<div class="grid-item-inner wow fadeInUp" data-wow-duration="1.2s">
								<div class="item--featured"> 
									<a href="#">
										<img src="assets/img/about/ab5.jpg" alt="">
									</a>
								</div>
								<div class="item--icon icon-psb text-center">
									<i class="flaticon-cardboard"></i>
								</div>
								<div class="item--holder">
									<h3 class="item--title">Ethical practices</h3>
								</div>
								<div class="item--holder-hover">
									<div class="item--holder-inner">
										<h3 class="item--title">
											<a href="service-single.html">Shanta Impex = A(EC)2</a>
										</h3>
										<div class="item--content">Ethical practices.</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="or-service-page-innerbox headline pera-content position-relative">
							<div class="grid-item-inner wow fadeInUp" data-wow-duration="1.2s">
								<div class="item--featured"> 
									<a href="#">
										<img src="assets/img/about/ab1.jpg" alt="">
									</a>
								</div>
								<div class="item--icon icon-psb text-center">
									<i class="flaticon-cardboard"></i>
								</div>
								<div class="item--holder">
									<h3 class="item--title">Contribution to the Society</h3>
								</div>
								<div class="item--holder-hover">
									<div class="item--holder-inner">
										<h3 class="item--title">
											<a href="service-single.html">Shanta Impex = A(EC)2</a>
										</h3>
										<div class="item--content"> Contribution to the Society.</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
<!-- End of service innerbox section
	============================================= -->
	
		
 <?php include 'include/footer.php';?>		
			