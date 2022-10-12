@extends('layouts.front')
@section('main')
<div class="container-fluid bg-light pt-150 pb-100 px-0 pb-clear">
    <div class="container px-0">
       	<div class="row">
         	<div class="col-12 col-md-8 bg-white pt-60 pb-60 pl-40 pr-40 shadow">
           		<div class="">
           			<span class="h1 font-weight-bold">Shopping Cart</span>
           			<span class="h3 float-right py-2">{{count($carts)}} Items</span>
           		</div>
           		<hr>
<!----------------------------table---------------->

           		<form class="" id="cartdetailsform" action="{{route('checkout')}}" method="post">
              @csrf
              <div class="cart-table-wrap">
            		<div class="cart-table">
            			<div class="table-head">
            				<div class="details">Product Details</div>
            				<div class="quantity">Quantities</div>
            				<div class="price">Price</div>
            				<div class="total">Total</div>
            			</div>
            			@foreach($carts as $key => $cart)
                  <div class="table-row">
            				<div class="details">
            					<img src="{{asset('uploads')}}/{{$cart->getProduct->image}}" width="60px" alt="cake">{{ucwords($cart->getProduct->name)}}
            				</div>
            				<div class="quantity">
             	 				<input type="button" class="minus_in_qnt" value="-">
                        <input type="number" class="qnt" readonly="" name="quantities[{{$key}}]" value="{{$cart->quantity}}" class="">
              					<input type="button" class="add_in_qnt" value="+">
            				</div>
            				<div class="price">{{$cart->getProduct->offer_price}}</div>
            				<div class="total"></div>
            			</div>
                  @endforeach
            		</div>
            	</div>
              </form>

<!---------------------table end------------>
         		<div class="mt-5 row justify-content-end">
          			<div class="col-3 col-md-7">
          				<a href="{{route('product')}}" class="text-theme d-none d-md-block">
          					<i class="fas fa-long-arrow-alt-left mr-2"></i>Continue Shopping
          				</a>
          			</div>
          			<div class="col-9 col-md-5">
            			<span class="h2 font-weight-bold mr-3">Subtotal:</span>
            			<span class="h2 font-weight-bold py-2 subtotal"></span>
          			</div>
         		</div>
         	</div>
         	<div class="col-12 col-md-4 bg-theme pt-60 pb-100 pl-30 pr-30">
            	<div class="">
            		<span class="h1 font-weight-bold text-white">Order Summary</span>
             	</div>
             	<!-- <hr>
             	<div class="mt-10">
            		<label class="text-white">Delivery Address</label>
            		<input type="text" name="address" placeholder="Delivery Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Delivery Address'" required class="single-input">
            	</div> -->
             	<hr>
             	<div class="text-white row">
             		<span class="h4 col-7">Subtotal</span>
             		<span class="h4 text-right col-5 subtotal" id="subtotal"></span>
           		</div>
           		<div class="text-white row">
           			<span class="h4 col-7">Delivery Charges</span>
           			<span class="h4 text-right col-5" id="charge">50</span>
           		</div>
           		<div class="text-white row mt-3">
           			<span class="h3 col-6 font-weight-bold">Grand Total</span>
           			<span class="h3 text-right col-6 font-weight-bold" id="grand"></span>
           		</div>
           		<div class="checkout-button mt-5 mt-md-0  px-4 px-md-5">
                    @if($carts)
           			<a href="#" onclick="$('#cartdetailsform').submit();" class="bg-white text-theme text-center py-4 h3">Checkout</a>
                    @endif
           		</div>
         	</div>
       	</div>
    </div>
</div>

@endsection