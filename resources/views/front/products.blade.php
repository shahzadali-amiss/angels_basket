@extends('layouts.front')
@section('main')

@include('inc.inner-hero',['heading'=>"Our Products", 'subheading'=>"Delicious"])
<section class="popular-items section-padding40">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
				<div class="section-tittle text-center mb-60">
					<span>Most Popular</span>
					<h2 class="font-head">Our Exclusive Cakes</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach( $products as $product )
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				@include('inc.single-product',['name'=> $product->name, 'price'=> $product->offer_price, 'image'=>$product->image, 'product_id'=> $product->id])
			</div>
			@endforeach
		</div>
	</div>
</section>

@include('inc.insta-gallery')
@endsection