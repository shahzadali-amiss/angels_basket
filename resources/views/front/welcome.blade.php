@extends('layouts.front')
@section('main')

<div class="slider-area slider-bg1">
	<div class="layer"></div>
	<div class="slider-active">
		<div class="single-slider d-flex align-items-center slider-height ">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-xl-12 col-lg-12 col-md-12 ">
						<div class="hero__caption">
							<div class="shop-tittle heartbeat">
								<h2 class="font-head">Delicious</h2>
							</div>
							<h1 data-animation="fadeInUp" class="mb-2 font-para" data-delay=".6s ">Angel's Basket 
							</h1>
							<h2 data-animation="fadeInUp" class="h1 text-dark mb-4" data-delay=".8s">We specialized in eggless cakes
							</h2>
							<div class="slider-btns">
								<a data-animation="fadeInUp" data-delay="1s" href="{{ route('product') }}" class="btn slider-btn">Explore Menu
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-shape bounce-animate">
		<img src="{{asset('img/hero/hero-shape.png')}}" alt="a piece of delicious cake">
	</div>
</div>

@include('inc.popular-items')

@include('inc.story-section', ['heading' => "Creating Memorable Moments", 'description' => "We bake and serve fresh, delicious and hygienic cakes that brings the joy and attention puller to your celebrations. We customized your birthday party cakes, anniversary and wedding celebration cakes and create memorable special moments."])

@include('inc.our-services') 

@include('inc.bg-attachment1')

@include('inc.testimonial')

@include('inc.insta-gallery')

@endsection

