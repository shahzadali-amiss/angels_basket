@extends('layouts.front')
@section('main')
<div class="container-fluid bg-light pt-150 pb-100 px-0 pb-clear">
    <div class="container px-0">
       	<div class="row">
         	<div class="col-12 bg-white pt-60 pb-60 pl-40 pr-40 shadow">
            <div class="">
              <span class="h1 font-weight-bold">Your Orders</span>
            </div>
            <hr>
            <div class="table-responsive">
              <table class="table table-width">
                <thead class="thead-dark">
                  <tr>
                    <th width="5%">#</th>
                    <th width="25%">Product Details</th>
                    <th width="15%">Order ID</th>
                    <th width="10%">Amount</th>
                    <th width="30%">Address</th>
                    <th width="15%" style="text-align: center;">Order Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $orders as $key => $order )
                  <tr class="border border-bottom">
                    <th>{{$key+1}}</th>
                    <td>
                      <table cellpadding="10">
                        @foreach($order->getCarts as $k => $cart)
                        <tr>
                          <td width="80px" height="80px" style="@if($k==0){{'border:none;'}}@endif"><img src="{{asset('uploads')}}/{{$cart->getProductImage->image}}" width="80px" class="front-orders-image"></td>
                          <td style="@if($k==0){{'border:none;'}}@endif">{{ucwords($cart->getProduct->name)}}<br>&#x20b9; {{$cart->getProduct->offer_price}}</td>
                        </tr>
                        @endforeach
                      </table>
                    </td>
                    <td><span class="p-1 bg-light">{{$order->order_id}}</span></td>
                    <td>&#x20b9; {{$order->amount}}</td>
                    <td>{{ucwords($order->name)}}<br>City : {{$order->city}}<br>{{ucwords($order->house)}}, {{ucwords($order->area)}}, Near {{ucwords($order->landmark)}}, {{$order->state}} - {{$order->pincode}}</td>
                    <td class="text-center">
                      @if($order->order_status=='pending')
                        <span class="text-white bg-warning p-2 rounded">Pending</span>
                      @elseif($order->order_status=='delivered')
                        <span class="text-white bg-success p-2 rounded">Delivered</span>
                      @elseif($order->order_status=='cancelled')
                        <span class="text-white bg-danger p-2 rounded">Cancelled</span>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
         	</div>	
       	</div>
    </div>
</div>

@endsection

@push('styles')
<style>
  .table-width{
    width: 130%;
  }

  @media (max-width: 480px){
    .table-width{
      width: 450%;
    }    
  }
  .front-orders-image{
      border-radius: 5%;
      border: 1px solid #ddd;
      padding: 5px;
  }
</style>
@endpush

