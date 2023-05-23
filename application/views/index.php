<?php include 'include/header.php';?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  @import url(https://fonts.googleapis.com/css?family=Raleway);

/*=== Basic box styling  ===*/
.box {
  background: #7fb370   none repeat scroll 0 0;
  color: white;
  font-family: "Raleway", sans-serif;
  font-size: 14px;
  font-weight: 600;
  height: 150px;
  line-height: 150px;
  margin: 0 auto 3%;
  padding: 20px;
  text-align: left;
  text-transform: capitalize;
  width: 80%;
}
/*=== Trigger  ===*/
.animate {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

/*=== Optional Delays, change values here  ===*/
.one {
  -webkit-animation-delay: 0.5s;
  -moz-animation-delay: 0.5s;
  animation-delay: 0.5s;
}

.two {
  -webkit-animation-delay: 1.5s;
  -moz-animation-delay: 1.5s;
  animation-delay: 1.5s;
}

.three {
  -webkit-animation-delay: 2.5s;
  -moz-animation-delay: 2.5s;
  animation-delay: 2.5s;
}

.four {
  -webkit-animation-delay: 3.5s;
  -moz-animation-delay: 3.5s;
  animation-delay: 3.5s;
}

.five {
  -webkit-animation-delay: 4.5s;
  -moz-animation-delay: 4.5s;
  animation-delay: 4.5s;
}

.six {
  -webkit-animation-delay: 5.5s;
  -moz-animation-delay: 5.5s;
  animation-delay: 5.5s;
}

.seven {
  -webkit-animation-delay: 6.5s;
  -moz-animation-delay: 6.5s;
  animation-delay: 6.5s;
}

.eight {
  -webkit-animation-delay: 7.5s;
  -moz-animation-delay: 7.5s;
  animation-delay: 7.5s;
}

/*=== Animations start here  ===*/

/*==== FADE IN UP ===*/
@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

/*=== FADE IN DOWN ===*/
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}
@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/*=== FADE IN LEFT ===*/
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

/*==== FADE IN RIGHT ===*/
@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}

/*=== FADE IN  ===*/
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

/*=== FADE IN UP Big ===*/
.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
}
@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/*=== FADE IN DOWN Big ===*/
.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig;
}
@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/*=== FADE IN LEFT Big ===*/
.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
}
@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/*=== FADE IN RIGHT Big ===*/
.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig;
}
@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

  </style>
<!-- Start of Slider section
	============================================= -->
	<section id="organio-slider" class="organio-slider-section">
		<rs-module-wrap id="rev_slider_15_1_wrapper" data-alias="home-1" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
			<rs-module id="rev_slider_15_1" style="" data-version="6.5.5">
						<rs-slides>
						<rs-slide style="position: absolute;" data-key="rs-50" data-title="Slide" data-anim="ms:0ms;" data-in="o:0;" data-out="a:false;">
						<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#f3f3f3;" data-parallax="off" data-no-retina>
<rs-group
id="slider-15-slide-50-layer-1" 
data-type="group"
data-xy="xo:30px,30px,22px,22px;y:m;yo:-30px,-30px,0,0;"
data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
data-dim="w:800px,800px,400px,400px;h:372px,372px,302px,262px;"
data-rsp_o="off"
data-rsp_bd="off"
data-frame_0="o:1;"
data-frame_1="sp:0;"
data-frame_999="o:0;st:w;sR:9000;sA:9000;"
style="z-index:13;"
							><!--
							--><rs-layer
							id="slider-15-slide-50-layer-2" 
							class="slider-title"
							data-type="text"
							data-color="#1a2428"
							data-xy="yo:-9px;"
							data-text="w:normal;s:60,80,45,42;l:80,80,52,45;fw:700;"
							data-rsp_o="off"
							data-rsp_bd="off"
							data-frame_0="y:-100%;"
							data-frame_0_mask="u:t;"
							data-frame_1="st:700;sp:1200;sR:700;"
							data-frame_1_mask="u:t;"
							data-frame_999="o:0;st:w;sR:7100;"
							style="z-index:9;font-family:'Lora'; padding-bottom: 15px;font-size:60px !important;"
							> <img src="assets/img/logotext.png" alt="logo"><br>
							choice for a <br />
						    healthier life.
								</rs-layer><!--

								--><rs-layer
								id="slider-15-slide-50-layer-5" 
								data-type="text"
								data-color="#454545"
								data-xy="yo:254px,254px,166px,147px;"
								data-text="w:normal;s:20,20,18,18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1000;sp:1200;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6800;"
								style="z-index:10;font-family:'Barlow';"
								>Prominent brand for healthy food
								</rs-layer>
								<a
								id="slider-15-slide-50-layer-6" 
								class="rs-layer"
								href="shop.html" target="_self"
								data-type="text"
								data-color="#000000"
								data-xy="y:b;"
								data-text="w:normal;s:18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1300;sp:1200;sR:1300;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6500;"
								style="z-index:11;font-family:'Roboto';"
								> 
								</a>
								<rs-layer
								id="slider-15-slide-50-layer-9" 
								data-type="image"
								data-xy="xo:170px;y:b;yo:27px;"
								data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
								data-dim="w:['52px','52px','52px','52px'];h:['56px','56px','56px','56px'];"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="x:100%;skX:-45;"
								data-frame_1="st:1600;sp:1000;sR:1600;"
								data-frame_999="o:0;st:w;sR:6400;"
								style="z-index:12;"
								><img src="assets/img/product/o1.png" alt="slider-arow1" class="tp-rs-img" width="52" height="56" data-no-retina> 
								</rs-layer>
								</rs-group>
							<rs-layer
							id="slider-15-slide-50-layer-3" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-30px,-24px,-130px,-80px;y:t,t,m,m;yo:42px,34px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:539px,448px,340px,209px;h:573px,477px,362px,223px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:900;sp:1500;sR:900;"
							data-frame_999="o:0;st:w;sR:6900;"
							data-loop_0="y:-10;"
							data-loop_999="y:10;sp:4000;e:sine.inOut;yym:t;"
							style="z-index:15;"
							><img src="assets/img/product/o1.png" alt="slider-layer2" class="tp-rs-img" width="539" height="573" data-no-retina> 
							</rs-layer>
							<rs-layer
							id="slider-15-slide-50-layer-7" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-315px,-262px,0,0;yo:140px,116px,30px,20px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:258px,214px,162px,99px;h:265px,220px,167px,103px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1090;sp:1300;"
							data-frame_999="o:0;st:w;sR:7610;"
							data-loop_0="xR:8px;"
							data-loop_999="xR:8px;crd:t;sp:4500;st:0;"
							style="z-index:16;"
							><img src="assets/img/product/g2.png" alt="slider-layer4" class="tp-rs-img" width="258" height="265" data-no-retina> 
							</rs-layer>
							<rs-layer
							id="slider-15-slide-50-layer-8" 
							class="rs-pxl-1"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-240px,-199px,-151px,0;y:b;yo:-30px,-24px,-18px,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:252px,209px,158px,97px;h:274px,228px,173px,106px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:17;"
							><img src="assets/img/product/o1.png" alt="slider-layer3" class="tp-rs-img" width="252" height="274" data-no-retina> 
							</rs-layer>
							<rs-layer
							id="slider-15-slide-50-layer-10" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:c;xo:-40px,-33px,-25px,0;y:b;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:219px,182px,138px,85px;h:228px,189px,143px,88px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:18;"
							><img src="assets/img/product/g1.png" alt="slider-layer7" class="tp-rs-img" width="219" height="228" data-no-retina> 
							</rs-layer>
							<rs-layer
							id="slider-15-slide-50-layer-11" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:c;xo:100px,83px,63px,38px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:177px,147px,111px,68px;h:152px,126px,95px,58px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:19;"
							><img src="assets/img/product/g2.png" alt="slider-layer5" class="tp-rs-img" width="177" height="152" data-no-retina> 
							</rs-layer>
							<rs-layer
							id="slider-15-slide-50-layer-12" 
							class="rs-pxl-4"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-120px,-99px,-75px,-46px;yo:145px,120px,91px,56px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:201px,167px,126px,77px;h:157px,130px,98px,60px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:20;"
							><img src="assets/img/product/g3.png" alt="slider-layer6" class="tp-rs-img" width="201" height="157" data-no-retina> 
							</rs-layer>
							<rs-layer
							id="slider-15-slide-50-layer-13" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-190px,-158px,30px,0;y:b;yo:0,0,20px,80px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:145px,120px,91px,56px;h:192px,159px,120px,74px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:21;"
							><img src="assets/img/product/le1.png" alt="slider-layer8" class="tp-rs-img" width="145" height="192" data-no-retina> 
							</rs-layer>			
							</rs-slide>
							<rs-slide style="position: absolute;" data-key="rs-51" data-title="Slide" data-anim="ms:0ms;r:0;" data-in="o:0;" data-out="a:false;">
								<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#f3f3f3;" data-parallax="off" data-no-retina>
<!--
--><rs-group
id="slider-15-slide-51-layer-1" 
data-type="group"
data-xy="x:r,r,l,l;xo:30px,30px,22px,22px;y:m;yo:-30px,-30px,0,0;"
data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
data-dim="w:567px,567px,400px,400px;h:372px,372px,302px,262px;"
data-rsp_o="off"
data-rsp_bd="off"
data-frame_0="o:1;"
data-frame_1="sp:0;"
data-frame_999="o:0;st:w;sR:9000;sA:9000;"
style="z-index:13;"
							><!--
							--><rs-layer
							id="slider-15-slide-51-layer-2" 
							class="slider-title"
							data-type="text"
							data-color="#1a2428"
							data-xy="yo:-9px;"
							data-text="w:normal;s:50,80,45,42;l:80,80,52,45;fw:700;"
							data-rsp_o="off"
							data-rsp_bd="off"
							data-frame_0="y:-100%;"
							data-frame_0_mask="u:t;"
							data-frame_1="st:700;sp:1200;sR:700;"
							data-frame_1_mask="u:t;"
							data-frame_999="o:0;st:w;sR:7100;"
							style="z-index:9;font-family:'Lora'; padding-bottom: 15px;"
							> <img src="assets/img/logotext.png" alt="logo"><br>
						    choice for a<br> healthier life.
								</rs-layer><!--

								--><rs-layer
								id="slider-15-slide-51-layer-5" 
								data-type="text"
								data-color="#454545"
								data-xy="yo:254px,254px,166px,147px;"
								data-text="w:normal;s:20,20,18,18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1000;sp:1200;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6800;"
								style="z-index:10;font-family:'Barlow';"
								>Prominent brand for healthy food
								</rs-layer><!--

								--><a
								id="slider-15-slide-51-layer-6" 
								class="rs-layer"
								href="shop.html" target="_self"
								data-type="text"
								data-color="#000000"
								data-xy="y:b;"
								data-text="w:normal;s:18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1300;sp:1200;sR:1300;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6500;"
								style="z-index:11;font-family:'Roboto';"
								>
								</a><!--
							--></rs-group><!--

							--><rs-layer
							id="slider-15-slide-51-layer-0" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:l,l,r,r;xo:-30px,-24px,0,0;y:t,t,m,m;yo:67px,55px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:376px,313px,237px,146px;h:376px,313px,237px,146px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:50,41,31,19;"
							data-frame_1="st:700;sp:1000;sR:700;"
							data-frame_999="o:0;st:w;sR:7300;"
							style="z-index:14; margin-left: 171px;"
							><img src="assets/img/slider2.png" alt="h1-slide2-layer1" class="tp-rs-img" width="376" height="376" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-51-layer-3" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:l,l,r,r;xo:0,0,-130px,-80px;y:b,b,m,m;yo:40px,33px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:629px,523px,397px,244px;h:499px,415px,315px,194px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:900;sp:1500;sR:900;"
							data-frame_999="o:0;st:w;sR:6900;"
							data-loop_0="y:-10;"
							data-loop_999="y:10;sp:4000;e:sine.inOut;yym:t;"
							style="z-index:15;"
							><img src="assets/img/slider1.png" alt="h1-slide2-layer2" class="tp-rs-img" width="629" height="499" data-no-retina> 
							</rs-layer><!--

						

						><!--

							--><rs-layer
							id="slider-15-slide-51-layer-8" 
							class="rs-pxl-1"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r,r,r,l;xo:110px,91px,69px,0;y:b;yo:33px,27px,20px,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:176px,146px,110px,67px;h:140px,116px,88px,54px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:17;"
							><img src="assets/img/slider6.png" alt="h1-slide2-layer3" class="tp-rs-img" width="204" height="160" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-51-layer-10" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:c;xo:-40px,-33px,-25px,0;y:b;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:219px,182px,138px,85px;h:228px,189px,143px,88px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:18;"
							><img src="assets/img/slider4.png" alt="slider-layer7" class="tp-rs-img" width="219" height="228" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-51-layer-11" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-160px,-133px,-101px,-62px;y:b;yo:200px,166px,126px,77px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:177px,147px,111px,68px;h:152px,126px,95px,58px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:19;"
							><img src="assets/img/slider3.png" alt="slider-layer5" class="tp-rs-img" width="177" height="152" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-51-layer-12" 
							class="rs-pxl-4"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-120px,-99px,-75px,-46px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:201px,167px,126px,77px;h:157px,130px,98px,60px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:20;"
							><img src="assets/img/slider5.png" alt="slider-layer6" class="tp-rs-img" width="201" height="157" data-no-retina> 
							</rs-layer><!--

						<!--
							-->						</rs-slide>
							<rs-slide style="position: absolute;" data-key="rs-52" data-title="Slide" data-anim="ms:0ms;r:0;" data-in="o:0;" data-out="a:false;">
								<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#f3f3f3;" data-parallax="off" data-no-retina>
<!--
--><rs-group
id="slider-15-slide-52-layer-1" 
data-type="group"
data-xy="xo:30px,30px,22px,22px;y:m;yo:-30px,-30px,0,0;"
data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
data-dim="w:800px,800px,400px,400px;h:372px,372px,302px,262px;"
data-rsp_o="off"
data-rsp_bd="off"
data-frame_0="o:1;"
data-frame_1="sp:0;"
data-frame_999="o:0;st:w;sR:9000;sA:9000;"
style="z-index:12;"
							><!--
							--><rs-layer
							id="slider-15-slide-52-layer-2" 
							class="slider-title"
							data-type="text"
							data-color="#1a2428"
							data-xy="yo:-9px;"
							data-text="w:normal;s:50,80,45,42;l:80,80,52,45;fw:700;"
							data-rsp_o="off"
							data-rsp_bd="off"
							data-frame_0="y:-100%;"
							data-frame_0_mask="u:t;"
							data-frame_1="st:700;sp:1200;sR:700;"
							data-frame_1_mask="u:t;"
							data-frame_999="o:0;st:w;sR:7100;"
							style="z-index:9;font-family:'Lora'; padding-bottom: 15px;"
							> <img src="assets/img/logotext.png" alt="logo"><br>
							choice for a <br>
						    healthier life. 
								</rs-layer><!--

								--><rs-layer
								id="slider-15-slide-52-layer-5" 
								data-type="text"
								data-color="#454545"
								data-xy="yo:254px,254px,166px,147px;"
								data-text="w:normal;s:20,20,18,18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1000;sp:1200;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6800;"
								style="z-index:10;font-family:'Barlow';"
								>Prominent brand for healthy food 
								</rs-layer><!--

								--><a
								id="slider-15-slide-52-layer-6" 
								class="rs-layer"
								href="shop.html" target="_self"
								data-type="text"
								data-color="#000000"
								data-xy="y:b;"
								data-text="w:normal;s:18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1300;sp:1200;sR:1300;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6500;"
								style="z-index:11;font-family:'Roboto';"
								> 
								</a><!--
							--></rs-group><!--

							

							--><rs-layer
							id="slider-15-slide-52-layer-3" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:80px,66px,-130px,-80px;y:t,t,m,m;yo:52px,43px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:524px,436px,331px,204px;h:613px,510px,387px,238px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:900;sp:1500;sR:900;"
							data-frame_999="o:0;st:w;sR:6900;"
							data-loop_0="y:-10;"
							data-loop_999="y:10;sp:4000;e:sine.inOut;yym:t;"
							style="z-index:14;"
							><img src="assets/img/slider13.png" alt="h1-slide3-layer2" class="tp-rs-img" width="524" height="613" data-no-retina> 
							</rs-layer><!--

						<!--

							--><rs-layer
							id="slider-15-slide-52-layer-7" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-260px,-216px,0,0;yo:0,0,30px,20px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:136px,113px,85px,52px;h:181px,150px,113px,69px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1090;sp:1300;"
							data-frame_999="o:0;st:w;sR:7610;"
							data-loop_0="xR:8px;"
							data-loop_999="xR:8px;crd:t;sp:4500;st:0;"
							style="z-index:16;"
							><img src="assets/img/slider10.png" alt="h1-slide3-layer4" class="tp-rs-img" width="136" height="181" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-52-layer-8" 
							class="rs-pxl-1"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:220px,183px,139px,0;y:b;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:231px,192px,145px,89px;h:206px,171px,129px,79px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:17;"
							><img src="assets/img/slider11.png" alt="h1-slide3-layer3" class="tp-rs-img" width="231" height="206" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-52-layer-10" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:c;xo:-40px,-33px,-25px,0;y:b;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:219px,182px,138px,85px;h:228px,189px,143px,88px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:18;"
							><img src="assets/img/slider10.png" alt="slider-layer7" class="tp-rs-img" width="219" height="228" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-52-layer-11" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-140px,-116px,-88px,-54px;yo:120px,99px,75px,46px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:177px,147px,111px,68px;h:152px,126px,95px,58px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:19;"
							><img src="assets/img/slider9.png" alt="slider-layer5" class="tp-rs-img" width="177" height="152" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-52-layer-12" 
							class="rs-pxl-4"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-140px,-116px,-88px,-54px;y:b;yo:30px,24px,18px,11px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:201px,167px,126px,77px;h:157px,130px,98px,60px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:20;"
							><img src="assets/img/slider10.png" alt="slider-layer6" class="tp-rs-img" width="201" height="157" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-52-layer-13" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-190px,-158px,30px,0;y:b;yo:0,0,20px,80px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:145px,120px,91px,56px;h:192px,159px,120px,74px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:21;"
							><img src="assets/img/slider9.png" alt="slider-layer8" class="tp-rs-img" width="145" height="192" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-52-layer-41" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r,r,l,l;yo:0,0,30px,20px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:258px,214px,162px,99px;h:265px,220px,167px,103px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1090;sp:1300;"
							data-frame_999="o:0;st:w;sR:7610;"
							data-loop_0="xR:8px;"
							data-loop_999="xR:8px;crd:t;sp:4500;st:0;"
							style="z-index:15;"
							><img src="assets/img/slider9.png" alt="slider-layer4" class="tp-rs-img" width="258" height="265" data-no-retina> 
							</rs-layer><!--
							-->						</rs-slide>
<rs-slide style="position: absolute;" data-key="rs-53" data-title="Slide" data-anim="ms:0ms;r:0;" data-in="o:0;" data-out="a:false;">
								<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#f3f3f3;" data-parallax="off" data-no-retina>
<!--
--><rs-group
id="slider-15-slide-53-layer-1" 
data-type="group"
data-xy="xo:30px,30px,22px,22px;y:m;yo:-30px,-30px,0,0;"
data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
data-dim="w:800px,800px,400px,400px;h:372px,372px,302px,262px;"
data-rsp_o="off"
data-rsp_bd="off"
data-frame_0="o:1;"
data-frame_1="sp:0;"
data-frame_999="o:0;st:w;sR:9000;sA:9000;"
style="z-index:12;"
							><!--
							--><rs-layer
							id="slider-15-slide-53-layer-2" 
							class="slider-title"
							data-type="text"
							data-color="#1a2428"
							data-xy="yo:-9px;"
							data-text="w:normal;s:50,80,45,42;l:80,80,52,45;fw:700;"
							data-rsp_o="off"
							data-rsp_bd="off"
							data-frame_0="y:-100%;"
							data-frame_0_mask="u:t;"
							data-frame_1="st:700;sp:1200;sR:700;"
							data-frame_1_mask="u:t;"
							data-frame_999="o:0;st:w;sR:7100;"
							style="z-index:9;font-family:'Lora'; padding-bottom: 15px;"
							> <img src="assets/img/logotext.png" alt="logo"><br>
							choice for a <br>
						    healthier life. 
								</rs-layer><!--

								--><rs-layer
								id="slider-15-slide-53-layer-5" 
								data-type="text"
								data-color="#454545"
								data-xy="yo:254px,254px,166px,147px;"
								data-text="w:normal;s:20,20,18,18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1000;sp:1200;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6800;"
								style="z-index:10;font-family:'Barlow';"
								>Prominent brand for healthy food 
								</rs-layer><!--

								--><a
								id="slider-15-slide-53-layer-6" 
								class="rs-layer"
								href="shop.html" target="_self"
								data-type="text"
								data-color="#000000"
								data-xy="y:b;"
								data-text="w:normal;s:18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1300;sp:1200;sR:1300;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6500;"
								style="z-index:11;font-family:'Roboto';"
								> 
								</a><!--
							--></rs-group><!--

							

							--><rs-layer
							id="slider-15-slide-53-layer-3" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:80px,66px,-130px,-80px;y:t,t,m,m;yo:52px,43px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:524px,436px,331px,204px;h:613px,510px,387px,238px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:900;sp:1500;sR:900;"
							data-frame_999="o:0;st:w;sR:6900;"
							data-loop_0="y:-10;"
							data-loop_999="y:10;sp:4000;e:sine.inOut;yym:t;"
							style="z-index:14;"
							><img src="assets/img/b5.png" alt="h1-slide3-layer2" class="tp-rs-img" width="524" height="613" data-no-retina> 
							</rs-layer><!--

						<!--

							--><rs-layer
							id="slider-15-slide-53-layer-7" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-260px,-216px,0,0;yo:0,0,30px,20px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:136px,113px,85px,52px;h:181px,150px,113px,69px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1090;sp:1300;"
							data-frame_999="o:0;st:w;sR:7610;"
							data-loop_0="xR:8px;"
							data-loop_999="xR:8px;crd:t;sp:4500;st:0;"
							style="z-index:16;"
							><img src="assets/img/b6.png" alt="h1-slide3-layer4" class="tp-rs-img" width="136" height="181" data-no-retina> 
							</rs-layer><!--

							
							
							--><rs-layer
							id="slider-15-slide-53-layer-10" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:c;xo:-40px,-33px,-25px,0;y:b;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:219px,182px,138px,85px;h:228px,189px,143px,88px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:18;"
							><img src="assets/img/b3.png" alt="slider-layer7" class="tp-rs-img" width="219" height="228" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-53-layer-11" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-140px,-116px,-88px,-54px;yo:120px,99px,75px,46px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:177px,147px,111px,68px;h:152px,126px,95px,58px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:19;"
							><img src="assets/img/b1.png" alt="slider-layer5" class="tp-rs-img" width="177" height="152" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-53-layer-12" 
							class="rs-pxl-4"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-140px,-116px,-88px,-54px;y:b;yo:30px,24px,18px,11px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:201px,167px,126px,77px;h:157px,130px,98px,60px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:20;"
							><img src="assets/img/b2.png" alt="slider-layer6" class="tp-rs-img" width="201" height="157" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-53-layer-13" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-190px,-158px,30px,0;y:b;yo:0,0,20px,80px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:145px,120px,91px,56px;h:192px,159px,120px,74px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:21;"
							><img src="assets/img/b3.png" alt="slider-layer8" class="tp-rs-img" width="145" height="192" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-53-layer-41" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r,r,l,l;yo:0,0,30px,20px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:258px,214px,162px,99px;h:265px,220px,167px,103px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1090;sp:1300;"
							data-frame_999="o:0;st:w;sR:7610;"
							data-loop_0="xR:8px;"
							data-loop_999="xR:8px;crd:t;sp:4500;st:0;"
							style="z-index:15;"
							><img src="assets/img/b4.png" alt="slider-layer4" class="tp-rs-img" width="258" height="265" data-no-retina> 
							</rs-layer><!--
							--></rs-slide>
							
							  5-- <rs-slide style="position: absolute;" data-key="rs-54" data-title="Slide" data-anim="ms:0ms;r:0;" data-in="o:0;" data-out="a:false;">
								<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#f3f3f3;" data-parallax="off" data-no-retina>
<!--
--><rs-group
id="slider-15-slide-54-layer-1" 
data-type="group"
data-xy="x:r,r,l,l;xo:30px,30px,22px,22px;y:m;yo:-30px,-30px,0,0;"
data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
data-dim="w:567px,567px,400px,400px;h:372px,372px,302px,262px;"
data-rsp_o="off"
data-rsp_bd="off"
data-frame_0="o:1;"
data-frame_1="sp:0;"
data-frame_999="o:0;st:w;sR:9000;sA:9000;"
style="z-index:13;"

                           
                         
							 
							<!--
							--><rs-layer
							id="slider-15-slide-54-layer-2" 
							class="slider-title"
							data-type="text"
							data-color="#1a2428"
							data-xy="yo:-9px;"
							data-text="w:normal;s:50,80,45,42;l:80,80,52,45;fw:700;"
							data-rsp_o="off"
							data-rsp_bd="off"
							data-frame_0="y:-100%;"
							data-frame_0_mask="u:t;"
							data-frame_1="st:700;sp:1200;sR:700;"
							data-frame_1_mask="u:t;"
							data-frame_999="o:0;st:w;sR:7100;"
							style="z-index:9;font-family:'Lora'; padding-bottom: 15px;"
							> <br /><img src="assets/img/logotext.png" alt="logo"><br>
						    choice for a healthier life.
								</rs-layer><!--
                            
								--><rs-layer
								id="slider-15-slide-54-layer-5" 
								data-type="text"
								data-color="#454545"
								data-xy="yo:254px,254px,166px,147px;"
								data-text="w:normal;s:20,20,18,18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1000;sp:1200;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6800;"
								style="z-index:10;font-family:'Barlow';"
								> Prominent brand for healthy food
								</rs-layer><!--

								--><a
								id="slider-15-slide-54-layer-6" 
								class="rs-layer"
								href="shop.html" target="_self"
								data-type="text"
								data-color="#000000"
								data-xy="y:b;"
								data-text="w:normal;s:18;l:30;"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:1300;sp:1200;sR:1300;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:6500;"
								style="z-index:11;font-family:'Roboto';"
								>
								</a><!--
							--></rs-group><!--

							--><rs-layer
							id="slider-15-slide-54-layer-0" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:l,l,r,r;xo:-30px,-24px,0,0;y:t,t,m,m;yo:67px,55px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:376px,313px,237px,146px;h:376px,313px,237px,146px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:50,41,31,19;"
							data-frame_1="st:700;sp:1000;sR:700;"
							data-frame_999="o:0;st:w;sR:7300;"
							style="z-index:14; margin-left: 171px;"
							><img src="assets/img/banner376.png" alt="h1-slide2-layer1" class="tp-rs-img" width="376" height="376" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-54-layer-3" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:l,l,r,r;xo:0,0,-130px,-80px;y:b,b,m,m;yo:40px,33px,0,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:629px,523px,397px,244px;h:499px,415px,315px,194px;"
							data-vbility="t,t,t,f"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:900;sp:1500;sR:900;"
							data-frame_999="o:0;st:w;sR:6900;"
							data-loop_0="y:-10;"
							data-loop_999="y:10;sp:4000;e:sine.inOut;yym:t;"
							style="z-index:15;"
							><img src="assets/img/bannert269.png" alt="h1-slide2-layer2" class="tp-rs-img" width="629" height="499" data-no-retina> 
							</rs-layer><!--

						

						><!--

							--><rs-layer
							id="slider-15-slide-54-layer-8" 
							class="rs-pxl-1"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r,r,r,l;xo:110px,91px,69px,0;y:b;yo:33px,27px,20px,0;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:176px,146px,110px,67px;h:140px,116px,88px,54px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:17;"
							><img src="assets/img/banner201.png" alt="h1-slide2-layer3" class="tp-rs-img" width="204" height="160" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-54-layer-10" 
							class="rs-pxl-3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:c;xo:-40px,-33px,-25px,0;y:b;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:219px,182px,138px,85px;h:228px,189px,143px,88px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:18;"
							><img src="assets/img/banner177.png" alt="slider-layer7" class="tp-rs-img" width="219" height="228" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-54-layer-11" 
							class="rs-pxl-2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-160px,-133px,-101px,-62px;y:b;yo:200px,166px,126px,77px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:177px,147px,111px,68px;h:152px,126px,95px,58px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:19;"
							><img src="assets/img/banner219.png" alt="slider-layer5" class="tp-rs-img" width="177" height="152" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-15-slide-54-layer-12" 
							class="rs-pxl-4"
							data-type="image"
							data-rsp_ch="on"
							data-xy="x:r;xo:-120px,-99px,-75px,-46px;"
							data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
							data-dim="w:201px,167px,126px,77px;h:157px,130px,98px,60px;"
							data-frame_0="y:-50,-41,-31,-19;"
							data-frame_1="st:1100;sp:1300;"
							data-frame_999="o:0;st:w;sR:7600;"
							style="z-index:20;"
							><img src="assets/img/banner219.png" alt="slider-layer6" class="tp-rs-img" width="201" height="157" data-no-retina> 
							</rs-layer><!--

						<!--
							--></rs-slide>

</rs-module>
				</rs-module-wrap>
				<!-- END REVOLUTION SLIDER -->
			</section>
<!-- End of Slider section
	============================================= -->

<!-- Start of shop banner section
	============================================= -->			
	<section id="or-shop-banner" class="or-shop-banner-section">
		<div class="container">
			<div class="or-shop-banner-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="or-shop-banner-innerbox position-relative wow fadeInUp ">
							<div class="or-shop-banner-text headline pera-content">
								<h3>Impeccable Quality </h3>
								<p>Ethical practices to provide outstanding quality of our products and services. </p>
								 
							</div>
							<div class="or-shop-banner-img-wrapper">
								<div class="or-shop-banner-img-1 position-absolute">
									<img src="assets/img/home1.png" alt="Image">
								</div>
								<div class="or-shop-banner-img-2 position-absolute">
									<img src="assets/img/home2.png" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="or-shop-banner-innerbox position-relative type-2  wow fadeInUp ">
							<div class="or-shop-banner-text  headline pera-content">
								<h3>True Wellness</h3>
								<p>Products free of toxic chemicals and assured True Wellness</p>
								 
							</div>
							<div class="or-shop-banner-img-wrapper">
								<div class="or-shop-banner-img-1 position-absolute">
									<img src="assets/img/home3.png" alt="Image">
								</div>
								<div class="or-shop-banner-img-2 position-absolute">
									<img src="assets/img/home4.png" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Start of Slider section
	============================================= -->

<!-- Start of About us section
	============================================= -->
	<section id="or-about-1" class="or-about-section-1">
		<div class="container">
		  <div class="or-shop-banner-content">
		    <div class="row">
		      <div class="col-lg-6">
			     <div class="or-about-content-1 position-relative">
				    <div id="demo" class="carousel slide" data-ride="carousel">
					  <ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					  </ul>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="assets/img/a1.jpg" alt="Los Angeles" width="654" height="504">
						     
						</div>
						<div class="carousel-item">
						   <img src="assets/img/dhal.jpg" alt="Los Angeles" width="654" height="504">
						     
						</div>
						<div class="carousel-item">
						   <img src="assets/img/2.jpg" alt="Los Angeles" width="654" height="504">
						     
						</div>
						<div class="carousel-item">
						   <img src="assets/img/3.jpg" alt="Los Angeles" width="654" height="504">
						     
						</div>
						<div class="carousel-item">
						   <img src="assets/img/4.jpg" alt="Los Angeles" width="654" height="504">
						     
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </a>
					</div>
					</div>
					</div>
	         <div class="col-lg-6">
				<div class="or-about-text-area  d-flex justify-content-end">
					<div class="or-about-img-text-wrapper-1">
						<div class="or-section-title headline pera-content wow fadeInUp">
							<span class="sub-title">Approach</span>
							<p>Veganboon is the prestigious in house brand of <b>Shanta Impex Pvt Ltd</b>. Veganboon is the brand of our Food venture, set up to meet the growing demands of crops like Rice, Cereals, Pulses, Vegetables, Fruits and value added products.</p><br>
							<p>We adapted an integrated approach in cultivating, monitoring and selling our products to make the process efficient, transparent and as fair as possible through Contract Farming. </p>
						</div>
						<div class="or-about-feature-wrapper d-flex wow fadeInUp" data-wow-delay="200ms">
							<div class="or-about-feature-innebox headline pera-content d-flex">
								<div class="or-about-feature-icon">
									<img src="assets/img/icon/a-icon2.png" alt="icon">
								</div>
								<div class="or-about-feature-text">
									<h3 style="color: #66aa30;">Speciality Produce</h3>
									<p>We also specialise in Organic food products.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</section>
<!-- End of About Us section
	============================================= -->

<!-- Start of Why choose section
	============================================= -->
	<!--<section id="or-why-choose-2" class="or-why-choose-section-2">
		<div class="container">
			<div class="or-why-choose-content-2">
				<div class="row">
				
					<div class="col-lg-6">
						<div class="or-why-choose-text-wrapper-2">
						
							<div class="or-why-choose-feature-2">
								<div class="or-why-choose-feature-item-2 d-flex align-items-center">
									<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon-pay"></i>
									</div>
									<div class="or-why-choose-feature-text pera-content">
										<h3>Contract Farming</h3>
									</div>
								</div>
								<div class="or-why-choose-feature-item-2 d-flex align-items-center">
									<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon flaticon-lorry"></i>
									</div>
									<div class="or-why-choose-feature-text pera-content">
										<h3>Cultivating, Packing and Supplying of Fresh Fruits & Vegetables</h3>
									</div>
								</div>
								<div class="or-why-choose-feature-item-2 d-flex align-items-center">
									<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon flaticon-fruits"></i>
									</div>
									<div class="or-why-choose-feature-text pera-content">
										<h3>Processing fresh to Frozen Fruits and Vegetables (No artificial/synthetic preservatives)</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-5">
							<div class="or-why-choose-feature-2">					
								<div class="or-why-choose-feature-item-2 d-flex align-items-center">
									<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon flaticon-grocery"></i>
									</div>
									<div class="or-why-choose-feature-text pera-content">
										<h3>Processing fresh to Dehydrated Fruits and Vegetables</h3>
									</div>
								</div>
								<div class="or-why-choose-feature-item-2 d-flex align-items-center">
									<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon flaticon-oil"></i>
									</div>
									<div class="or-why-choose-feature-text pera-content">
										<h3>Natural extraction of Pure and Natural Coconut Oil, Sesame Oil and Garlic Oil</h3>
									</div>
								</div>
								<div class="or-why-choose-feature-item-2 d-flex align-items-center">
									<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon flaticon-cardboard"></i>
									</div>
									<div class="or-why-choose-feature-text pera-content">
										<h3>Dhals, Cereals, Lentils and Spices</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
			</div>
	</section>-->
<!-- End of Why choose  section
	============================================= -->
	
	
	<section id="features" class="section lb">
  <div class="container">
    <div class="row">
	<div class="or-section-title-4 headline-2 pera-content">
		<h2 class="text-center" style="padding-bottom: 64px;">Our Core Competency</h2>
	 </div><br>
	 
	  <div class="col-sm-6">
      <div class="box animate fadeInUp one or-why-choose-feature-item-2 d-flex align-items-center">
		<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
			<i class="flaticon-pay"></i>
		</div>
		<div class="or-why-choose-feature-text pera-content">
			<h3>Contract Farming</h3>
		</div>
	</div>
    </div>
	<div class="col-sm-6">
      <div class="box animate fadeInDown two or-why-choose-feature-item-2 d-flex align-items-center">
		<div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
			<i class="flaticon flaticon-lorry"></i>
		</div>
		<div class="or-why-choose-feature-text pera-content">
			<h3>Cultivating, Packing and Supplying of Fresh Fruits & Vegetables</h3>
		</div>
	</div>
    </div>
	 <div class="col-sm-6">
      <div class="box animate fadeInLeft three or-why-choose-feature-item-2 d-flex align-items-center">
      <div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
			<i class="flaticon flaticon-fruits"></i>
		</div>
		<div class="or-why-choose-feature-text pera-content">
			<h3>Processing fresh to Frozen Fruits and Vegetables (No artificial/synthetic preservatives)</h3>
		</div>
	</div>
    </div>
       <div class="col-sm-6">
      <div class="box animate fadeInRight four or-why-choose-feature-item-2 d-flex align-items-center">
       <div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
				<i class="flaticon flaticon-grocery"></i>
			</div>
			<div class="or-why-choose-feature-text pera-content">
				<h3>Processing fresh to Dehydrated Fruits and Vegetables</h3>
			</div>
		</div>
		</div>

       <div class="col-sm-6">
      <div class="box animate fadeIn five or-why-choose-feature-item-2 d-flex align-items-center">
	 <div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
				<i class="flaticon flaticon-oil"></i>
			</div>
			<div class="or-why-choose-feature-text pera-content">
				<h3>Natural extraction of Pure and Natural Coconut Oil, Sesame Oil and Garlic Oil</h3>
			</div>
		</div>
		</div>

       <div class="col-sm-6">
      <div class="box animate fadeInUpBig six or-why-choose-feature-item-2 d-flex align-items-center">
      <div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
				<i class="flaticon flaticon-cardboard"></i>
			</div>
			<div class="or-why-choose-feature-text pera-content">
				<h3>Dhals, Cereals, Lentils and Spices</h3>
			</div>
		</div>
		</div>

     

    </div>
  </div>
</section>


 <div id="features" class="section lb" style="background-color: #ffffff;padding-bottom:70px;">
        <div class="container">
            <div class="section-title text-center">
                <h3>Features</h3>
                <p class="lead"></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <div class="fl-inner">
                                <h4>24/7 Support</h4>
                                <p>We create a personalized, predictive, and effortless Customer experience. Call us at (+91) 999-490-4938. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="fa fa-cogs"></i>
                            <div class="fl-inner">
                                <h4>Excellent Service</h4>
                                <p>We focus on continuing to offer dedicated services to our customers with focus on Quality and trustworthiness. </p>
                            </div>
                        </li>
                        
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                          <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="fl-inner">
                                <h4>Time On Delivery</h4>
                                <p>The company has its own transport system, to ensure door delivery to its clients, on time.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="uploads/features.png" class="img-center img-fluid" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                           <i class="fa fa-phone"></i>
                            <div class="fr-inner">
                                <h4>Customer Assitance</h4>
                                <p>Our Customer assistance provides service to customers before, during and after a purchase of our product. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="fa fa-users"></i>
                            <div class="fr-inner">
                                <h4>User Friendly</h4>
                                <p>We don't deliver a product, We deliver an experience for every customers. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="fa fa-hand-o-right"></i>
                            <div class="fr-inner">
                                <h4>Quality</h4>
                                <p>Our employees are highly experienced & will work hard to deliver quality products in a quick time.  </p>
                            </div>
                        </li>
                       
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



<!-- Start of Category section
	============================================= -->
	<section id="or-category" class="or-category-section" data-background="assets/img/home/cat-bg.jpg">
		<div class="container">
			<div class="or-section-title headline pera-content text-center middle-align wow fadeInUp" data-wow-delay="50ms">
				<span class="sub-title">Categories</span>
			</div>
			<div class="or-category-content">
				<div class="or-category-slider-wrapper position-relative">
					<div class="or-category-slider-area">
					<?php
					if(isset($category_list)&& $category_list->num_rows()>0){
						$i=1;
						foreach($category_list->result() as $list){

							$cid=$list->id;
							$title=$list->title;
							$name=$list->name;
							$image=$list->image;
							$category_status=$list->status;
					?>
						<div class="organio-inner-item">
							<div class="or-category-slider-inner-item text-center position-relative type-1">
								<div class="or-category-img position-relative">
									
									<img loading="lazy" src="<?=base_url();?>assets/img/home/<?=$image;?>" alt="">
									<div class="cat-latter position-absolute text-uppercase">O</div>
								</div>
								<div class="or-category-text headline pera-content">
									<h3><?=$name;?></h3><br>
								</div>
							</div>
						</div>
						<?php } } ?>
						<div class="organio-inner-item">
							<div class="or-category-slider-inner-item text-center type-2 position-relative">
								<div class="or-category-img position-relative">
									<img src="assets/img/home/vegetable.png" alt="">
									<div class="cat-latter position-absolute text-uppercase">D</div>
								</div>
								<div class="or-category-text headline pera-content">
									<h3>Dehydrated Vegetables</h3>								
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-category-slider-inner-item text-center type-3 position-relative">
								<div class="or-category-img position-relative">
									<img src="assets/img/home/flour.png" alt="">
									<div class="cat-latter position-absolute text-uppercase">F</div>
								</div>
								<div class="or-category-text headline pera-content">
									<h3>Flour</h3><br>								
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-category-slider-inner-item text-center type-4 position-relative">
								<div class="or-category-img position-relative">
									<img src="assets/img/home/grains.png" alt="">
									<div class="cat-latter position-absolute text-uppercase">G</div>
								</div>
								<div class="or-category-text headline pera-content">
									<h3>Grains </h3><br>								
								</div>
							</div>
						</div>
						
						<div class="organio-inner-item">
							<div class="or-category-slider-inner-item text-center type-2 position-relative">
								<div class="or-category-img position-relative">
									<img src="assets/img/home/peat.png" alt="">
									<div class="cat-latter position-absolute text-uppercase">K</div>
								</div>
								<div class="or-category-text headline pera-content">
									<h3>Kitchen Garden Coco Peat</h3>
									
								</div>
							</div>
						</div>
						 
					</div>
					<div class="carousel_nav  clearfix">
						<button type="button" class="or-category-left_arrow"><img src="assets/img/icon/arrow1.png" alt=""></button>
						<button type="button" class="or-category-right_arrow"><img src="assets/img/icon/arrow2.png" alt=""></button>
					</div>
				</div>
			</div>
		</div>
	</section>				
<!-- End of Category section
	============================================= -->





 <?php include 'include/footer.php';?>		
