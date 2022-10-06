<!doctype html> 
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Fresh Cakes, Hygienic Cakes - Angels Basket, The Pastry Shop</title>
		<meta name="description" content="Angels basket, birthday party cakes, wedding celebration cakes. We at the cakes and pastry shop baking hygienic cakes, fresh cake is our priority.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo/angels-logo2.png')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
		<link rel="stylesheet" href="{{asset('css/progressbar_barfiller.css')}}">
		<link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
		<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	    <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
	    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"> 
		<link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('css/slick.css')}}">
		<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<style type="text/css">
		.filelabel {
		    /*width: 120px;*/
		    background-color: #fff;
		    border: 2px dashed #a02f2f;
		    border-radius: 5px;
		    display: block;
		    padding: 5px;
		    transition: border 300ms ease;
		    cursor: pointer;
		    text-align: center;
		    margin: 0;
		}
		.filelabel i {
		    display: block;
		    font-size: 30px;
		    padding-bottom: 5px;
		}
		.filelabel i,
		.filelabel .title {
		  color: #a02f2f;
		  transition: 200ms color;
		}
		.filelabel:hover {
		  border: 2px solid #1665c4;
		}
		.filelabel:hover i,
		.filelabel:hover .title {
		  color: #1665c4;
		}
		#FileInput{
		    display:none;
		}

		</style>
		@stack('styles')

	</head>
	<body>
		<!-- <div id="preloader-active">
			<div class="preloader d-flex align-items-center justify-content-center">
				<div class="preloader-inner position-relative">
					<div class="preloader-circle"></div>
					<div class="preloader-img pere-text">
						<img src="{{asset('img/logo/angels-logo2.png')}}" alt="angel's basket logo">
					</div>
				</div>
			</div>
		</div> -->
		<header id="header1" class="w-100">
    		<nav class="d-flex justify-content-between">
    			<div class="menu-button py-4 position-relative">
        			<div class="box v-center">
          				<div class="bar1 mb-2 bg-theme"></div>
          				<div class="bar2 mb-2 bg-theme"></div>
      					<div class="bar3 bg-theme"></div>
        			</div>
      			</div>
      			<div class="call-to py-4 position-relative d-none d-lg-block">
       				<a href="tel:(+91) XXXX XXX XXX" class="header-btn mr-25 v-center font-weight-bold">
       					<i class="fas fa-phone-alt"></i>  011 - 41664499
       				</a>
      			</div>
      			<div class="logo-outer">
    				<a href="{{route('home')}}">
         				<img src="{{asset('img/logo/angels-logo1.png')}}" class="img-fluid" alt="angel's basket logo">
        			</a>
      			</div>
      			<div class="icons position-relative">
        			<ul class="v-center r-0">
						<li class="button-header">
							<a href="#" class="btn header-btn2 d-none d-lg-block">Custom Order</a>
			  				<a href="#" class="d-lg-none">
			  					<i class="fas fa-cookie-bite d-lg-none text-theme fa-2x"></i>
			  				</a>
						</li>
		 			</ul>	
      			</div>
      			@if(Session::has('mobile'))
      			<div class="d-none d-md-block">
      				<a href="{{route('cart')}}" class="bg-theme v-center cart-square">
      					<i class="fas fa-shopping-cart"></i>
      				</a>
      			</div>
      			@endif
    		</nav>
    		<div class="menu-sidepanel bg-theme" id="side-panel">
    			@if(Session::has('mobile'))
	        	<div class="user-mob">
	        		<span class="text-white font-weight-bold h3">User Id : {{Session::get('mobile')}}</span>
	        	</div>
	        	@endif
		      	<ul>
		        	<li>
		        		<a href="{{route('home')}}" class="d-block w-100 h-100">HOME</a>
		        	</li>
		        	<li>
		        		<a href="{{route('about')}}" class="d-block w-100 h-100">WHO WE ARE</a>
		        	</li>
		        	<li>
		        		<a href="{{route('service')}}" class="d-block w-100 h-100">OUR SERVICES</a>
		        	</li>
		        	<li>
		        		<a href="{{route('product')}}" class="d-block w-100 h-100">OUR MENU</a>
		        	</li>
		        	<li>
		        		<a href="{{route('gallery')}}" class="d-block w-100 h-100">GALLERY</a>
		        	</li>
		        	@if(Session::has('mobile'))
		        	<li class="d-md-none">
		        		<a href="{{route('cart')}}" class="d-block w-100 h-100">CART</a>
		        	</li>

		        	<li>
		        		<a href="{{route('orders')}}" class="d-block w-100 h-100">ORDERS</a>
		        	</li>
		        	@endif
		        <!-- <li><a href="blog.html" class="d-block w-100 h-100">BLOGS</a></li> -->
		        	<li>
		        		<a href="{{route('contact')}}" class="d-block w-100 h-100">GET IN TOUCH</a>
		        	</li>
		        	@if(Session::has('mobile'))
		        	<li>
		        		<a href="{{route('logout')}}" class="d-block w-100 h-100">LOGOUT</a>
		        	</li>
		        	@else
		        	<li>
		        		<a href="{{route('get-mobile')}}" class="d-block w-100 h-100">LOGIN / REGISTER</a>
		        	</li>
		        	@endif
		      	</ul> 
		    </div>
		</header>
		<main>
	      	@section('main')
	      	@show
		</main>
		<footer>
			<div class="footer-wrapper">
				<div class="footer-area footer-padding">
					<div class="container">
	 					<div class="row justify-content-between">
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
								<div class="single-footer-caption mb-50">
									<div class="single-footer-caption mb-30">
										<div class="footer-logo mb-35 w-50">
											<a href="#">
												<img src="{{asset('img/logo/angels-logo1.png')}}" class="w-50"  alt="angel's basket logo">
											</a>
										</div>
										<div class="footer-tittle">
											<div class="text-theme font-weight-bold">MAA BAKER'S</div>	
											<div class="display-4 font-weight-bold">Angel's Basket</div>	
											<div class="footer-pera">
												<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <b>Maa Bakers</b> | All rights reserved
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
								<div class="single-footer-caption mb-50">
									<div class="footer-tittle mb-20">
										<h4 class="text-theme font-head">Reach Us</h4>
										<p>C-28, Main Market, Block C, Amar Colony, Lajpat Nagar 4, New Delhi, Delhi 110024
										</p>
									</div>
									<ul class="mb-20">
										<li class="number"><!-- <a href="#">(+91) XXXX XXX XXX</a> -->
											<a href="tel:(+91) XXXX XXX XXX" class="mr-25 font-weight-bold"> 
												<i class="fas fa-phone-alt"></i> (+91) XXXX XXX XXX
											</a>
											<a href="tel:01141664499" class="mr-25 font-weight-bold"> 
		    									<i class="fas fa-mobile"></i> (+91) - 9818954045 / 9810890044
											</a>
										</li>
									</ul>
									<div class="footer-social">
										<!-- <a href="#">
											<i class="fab fa-twitter-square"></i>
										</a> -->
										<a href="https://www.facebook.com/angelsbakery.in">
											<i class="fab fa-facebook-square"></i>
										</a>
										<a href="https://www.instagram.com/explore/locations/1016368121/angels-basket-the-pastry-shop/">
											<i class="fab fa-instagram-square"></i>
										</a>
										<!-- <a href="#"><i class="fab fa-linkedin"></i></a>
										<a href="#"><i class="fab fa-pinterest-square"></i></a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom-area">
					<div class="container">
						<div class="footer-border">
							<div class="row">
								<div class="col-xl-12 ">
									<div class="footer-copy-right text-center">
										<p>Made with 
											<i class="fa fa-heart color-danger" aria-hidden="true"></i> by 
											<a href="https://amiss.in/" target="_blank" rel="nofollow noopener">AMISS</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div id="back-top">
			<a title="Go to Top" href="#">
				<i class="fas fa-level-up-alt"></i>
			</a>
		</div>
		<div class="customOrder hide">
	  		<div class="image"></div>
	  		<div class="layer"></div>
			<div class="orderclose">
				<i class="fas fa-times text-white fa-2x"></i>
			</div>
	 	 	<div class="form-outer">
	    		<form method="post" action="{{ route('custom_order') }}" enctype="multipart/form-data">
	    			@csrf
	     	 		<div class="h2 text-white text-center py-2">Custom Order</div>
	  				<div class="input-group-icon mt-15">
	      				<div class="icon">
	      					<i class="fas fa-user text-theme" aria-hidden="true"></i>
	      				</div>
	      				<input type="text" name="full_name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input">
	      			</div>
	  				<div class="input-group-icon mt-15">
	      				<div class="icon">
	      					<i class="fa fa-mobile text-theme" aria-hidden="true"></i>
	      				</div>
	      				<input type="tel" maxlength="10" minlength="10" name="mobile" placeholder="Mobile Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'" required class="single-input">
	      			</div>
	      			<div class="input-group-icon mt-15">
	      				<div class="icon">
	      					<i class="fas fa-map-marker-alt text-theme"></i>
	      				</div>
	      				<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
	      			</div>
	      			<div class="input-group-icon mt-15">
	      				<div class="icon">
	      					<i class="fas fa-calendar text-theme" aria-hidden="true"></i>
	      				</div>
	      				<div class="form-select" id="default-select">
							  <input list="event" name="event" class="single-input" placeholder="Select Event"> 
							  <datalist id="event">
							  	<option value="">Select Event</option>
							    <option value="Birthday">
							    <option value="Marriage Anniversary">
							    <option value="Festival Celebration">
							    <option value="Other">
							  </datalist>
	      					<!-- <select name="event">
	      						<option value="">Select Event</option>
	      						<option value="1">Birthday</option>
	      						<option value="2">Marriage Anniversary</option>
	      						<option value="3">Festival Celebration</option>
	      						<option value="4">Other</option>
	      					</select> -->
	     	 			</div>
	      			</div>
	      			<div class="input-group-icon mt-15 ">
	      				<!-- <input type="file" name="sample_image" id="file" class="single-input bg-light" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Image'"/> -->
					    <label style="color: #fff;">
					      <span class="w-100">
					      	Custom Design
					      </span>
					      <small>Upload Your Customized Design, If Needed.</small>
					    </label>
						<label class="filelabel">
						    <i class="fa fa-paperclip">
						    </i>
						    <span class="title">
						        Browse File/Image 
						    </span>
						    <input class="FileUpload1" id="FileInput" name="image" type="file"/>
						</label>
	      			</div>
	      			
	      			<div class="mt-25 text-center">
	      				<button class="genric-btn default circle text-theme">
	      					<i class="fas fa-paper-plane"></i> Submit Order Request
	      				</button>
	      			</div>
	    		</form>
	  		</div>
		</div>
		@include('inc.fade-message')
		<!-- <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script> -->
		<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- <script src="{{asset('js/popper.min.js')}}"></script> -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		<script src="{{asset('js/wow.min.js')}}"></script>
		<!-- <script src="{{asset('js/animated.headline.js')}}"></script> -->
		<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/slick.min.js')}}"></script>

		<script src="{{asset('js/gijgo.min.js')}}"></script>
		<!-- <script src="{{asset('js/jquery.slicknav.min.js')}}"></script> -->
		<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('js/jquery.barfiller.js')}}"></script>

		<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
		<!-- <script src="{{asset('js/waypoints.min.js')}}"></script> -->
		<!-- <script src="{{asset('js/jquery.countdown.min.js')}}"></script> -->
		<!-- <script src="{{asset('js/hover-direction-snake.min.html')}}"></script> -->

		<!-- <script src="{{asset('js/contact.js')}}"></script> -->
		<!-- <script src="{{asset('js/jquery.form.js')}}"></script> -->
		<script src="{{asset('js/jquery.validate.min.js')}}"></script>
		<!-- <script src="{{asset('js/mail-script.js')}}"></script> -->
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>

		<script src="{{asset('js/plugins.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
		@stack('scripts')
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
	      window.dataLayer = window.dataLayer || [];
	      function gtag(){dataLayer.push(arguments);}
	      gtag('js', new Date());

	      gtag('config', 'UA-23581568-13');
		</script>
		<!-- image script -->
	<script>

	$("#FileInput").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".filelabel i").removeClass().addClass('fa fa-file-image-o');
                $(".filelabel i, .filelabel .title").css({'color':'#208440'});
                $(".filelabel").css({'border':' 2px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o');
                $(".filelabel i, .filelabel .title").css({'color':'red'});
                $(".filelabel").css({'border':' 2px solid red'});

            }
		  else if(extension == 'doc' || extension == 'docx'){
		            $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
		            $(".filelabel i, .filelabel .title").css({'color':'#2388df'});
		            $(".filelabel").css({'border':' 2px solid #2388df'});
		        }
            else{
                $(".filelabel i").removeClass().addClass('fa fa-file-o');
                $(".filelabel i, .filelabel .title").css({'color':'black'});
                $(".filelabel").css({'border':' 2px solid black'});
            }

            if(fileName ){
                if (fileName.length > 10){
                    $(".filelabel .title").text(fileName.slice(0,4)+'...'+extension);
                }
                else{
                    $(".filelabel .title").text(fileName);
                }
            }
            else{
                $(".filelabel .title").text(labelVal);
            }
        });

	</script>

	</body>
</html>