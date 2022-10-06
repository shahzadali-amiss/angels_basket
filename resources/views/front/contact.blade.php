@extends('layouts.front')
@section('main')

@include('inc.inner-hero',['heading'=>"Contact", 'subheading'=>"Reach Us"])

<section class="contact-section">
	<div class="container">
		<div class="mb-5 pb-4">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.0040772474822!2d77.2435603291806!3d28.569272976714092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3b40b734709%3A0xac776f8540515300!2sAngels%20Basket%20The%20pastry!5e0!3m2!1sen!2sin!4v1617276828341!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
			</iframe>
		</div>
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title font-head">Get in Touch</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/cakes/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
		 						<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
							</div>
						</div>
					</div>
					<div class="mt-3 mb-100 mb-lg-3">
						<button type="submit" class="button button-contactForm btn header-btn2">Send</button>
					</div>
				</form>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon">
						<i class="ti-home"></i>
					</span>
					<div class="media-body">
						<h3>Angel's Basket</h3>
						<p>C-28, Main Market, Block C, Amar Colony, Lajpat Nagar 4, New Delhi, Delhi 110024
						</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon">
						<i class="ti-tablet"></i>
					</span>
					<div class="media-body">
						<h3>(+91)XXX XXX XXXX</h3>
						<p>24 x 7</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon">
						<i class="ti-email"></i>
					</span>
					<div class="media-body">
						<h3>
							<a href="" class="__cf_email__" data-cfemail="10636560607f626450737f7c7f627c79723e737f7d">[email&#160;protected]
							</a>
						</h3>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection