@extends('layouts.front')
@section('main')
<div class="container-fluid bg-light pt-150 pb-100 px-0 pb-clear">
    <div class="container px-0">
       	<div class="row">
         	<div class="col-12 bg-white pt-60 pb-60 pl-40 pr-40 shadow">
           		<div class="">
           			<span class="h1 font-weight-bold">Shipping Details</span>
           		</div>
           		<hr>
<!----------------------------table---------------->

           		<form class="" id="shippingdetailsform" action="{{route('shipping-details')}}" method="post">
                @csrf

                <div class="row">
                  

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label" for="checkout-state">State<span class="text-danger">*</span></label>
                    <select class="form-select" id="checkout-state" name="state" required="" autocomplete="nope">
                      <option value="">Select state</option>
                      @foreach($states as $state)
                      <option value="{{$state->id}}" {{ $mobile->state==$state->id ? 'selected':'' }}>{{ucwords($state->name)}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label" for="checkout-city">City<span class="text-danger">*</span></label>
                    <select class="form-select" id="checkout-city" name="city" required="">
                      <option value="">Select city</option>
                      @if(isset($cities))
                        @foreach($cities as $city)
                          <option value="{{$city->id}}" {{ $mobile->city==$city->id ? 'selected':'' }}>{{$city->name}}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label">Full Name<span class="text-danger">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="name" autocomplete="nope" value="{{$mobile->name}}" required="">
                  </div>

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label">House/Street/Locality<span class="text-danger">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="house" required="" autocomplete="nope" value="{{$mobile->house}}">
                  </div>

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label">Village/Area<span class="text-danger">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="area" required="" autocomplete="nope" value="{{$mobile->area}}">
                  </div>

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label">Landmark<span class="text-danger">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="landmark" required="" autocomplete="nope" value="{{$mobile->landmark}}">
                  </div>

                  <div class="col-md-6 form-group mt-4">
                    <label class="form-label">Pincode<span class="text-danger">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="pincode" required="" minlength="6" maxlength="6" autocomplete="nope" value="{{$mobile->pincode}}">
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

@push('scripts')
  <script type="text/javascript">
  jQuery(document).ready(function($){
    $('#checkout-state').on('change', function(){
      if($(this).val() != ""){
        var url = '/api/get-cities-from-state/'+($(this).val());
        $.get(url, function(data, status){
          if(data.status==true){
            bindParentCategory(data.data,'checkout-city');
          }    
        });
      }
    });

    function bindParentCategory(data, element){  
      var sel=document.getElementById(element);
      sel.innerText = "";
      var opt = document.createElement('option');
      opt.innerHTML = 'Select city';
      opt.value = "";
      
      sel.parentElement.querySelector('.list').innerText='';
      sel.parentElement.querySelector('.current').innerText='Select city';

          // console.log(data.length);
      // ITERATE TO BIND OPTIONS

          // console.log(sel);
      for(var i = 0; i < data.length; i++) {
          var opt = document.createElement('option');
          opt.innerHTML = data[i].name;
          opt.value = data[i].id;
          sel.appendChild(opt);

          var list=document.createElement('li');
          list.classList.add('option');
          list.innerHTML = data[i].name;
          list.setAttribute('data-value', data[i].id);
          sel.parentElement.querySelector('.list').appendChild(list);
      }


    }
  });
  </script>
@endpush