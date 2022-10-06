@extends('layouts.front')
@section('main')
<div class="container-fluid bg-light pt-150 pb-100 px-0 pb-clear">
    <div class="container px-0">
       	<div class="row">
         	<div class="col-12 bg-white pt-60 pb-60 pl-40 pr-40 shadow">
           		
              <div class="h1 font-weight-bold text-center text-success w-100">Congratulations</div>
              <div class="text-center h4 mt-5">
                Your order has been placed with Order Id <span class="bg-light p-1">{{$order->order_id}}</span> <br>
                Note this Order Id in order to track your order.<br>
                Thanks for giving us a chance to make you smile. 
              </div>
         	</div>	
       	</div>
    </div>
</div>

@endsection

