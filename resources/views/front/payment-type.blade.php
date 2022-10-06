@extends('layouts.front')
@section('main')
<div class="container-fluid bg-light pt-150 pb-100 px-0 pb-clear">
    <div class="container px-0">
       	<div class="row">
         	<div class="col-12 bg-white pt-60 pb-60 pl-40 pr-40 shadow">
           		<div class="">
           			<span class="h1 font-weight-bold">Select Payment Type</span>
           		</div>
           		<hr>
<!----------------------------table---------------->

           		<form class="" id="shippingdetailsform" action="{{route('payment-type')}}" method="post">
                @csrf

                <div class="row justify-content-center">
                  
                  <div class="col-md-11 form-check mt-4">
                    <label class="form-check-label">
                      <input type="radio" name="pmt_type" class="form-check-input payment-radio" value="cash" checked><span class="ml-2">Cash on delivery</span>
                    </label>  
                  </div>
                  <div class="col-md-11 form-check mt-4">
                    <label class="form-check-label">
                      <input type="radio" name="pmt_type" class="form-check-input payment-radio" value="online" disabled><span class="ml-2 text-muted">Online Payment</span>
                    </label>  
                  </div>
                  
                </div>
                <div class="mt-5 px-4 px-md-5">
                  <button class="btn text-center py-4 h3" type="submit">Submit</button>
                </div>
              </form>

<!---------------------table end------------>
         	</div>	
       	</div>
    </div>
</div>

@endsection

@push('styles')
  <style>
    .payment-radio{
      height: 20px;
    }
  </style>
@endpush

