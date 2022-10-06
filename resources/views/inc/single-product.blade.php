<div class="single-items text-center mb-30">
	<div class="items-top">
		<img src="{{asset('uploads/'.$image)}}" alt="chocolate cake">
	</div>
	<div class="items-bottom">
		<h4 class="">
			<a href="#">{{$name}}</a>
		</h4>
		<!-- <p>Land behold it created good saw after she'd our set.</p> -->
		<button onclick="$('#addtocart{{$product_id}}').submit();"  class="btn order-btn">₹ {{$price}}, Add to cart</button>
		<form id="addtocart{{$product_id}}" action="{{route('add-to-cart')}}" method="post">
			@csrf
			<input type="hidden" name="p_id" value="{{$product_id}}">
		</form>
	</div>
</div>