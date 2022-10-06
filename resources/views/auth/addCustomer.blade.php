@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">{{ isset($mobile) ? 'Edit Customer' : 'Add Customer' }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @include('inc.session-message')
            </div>
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <!-- <h3 class="m-0">Product List</h3> -->
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section"> 
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <form method="post" action="{{route('add-customer')}}" enctype="multipart/form-data">
					                @csrf
                                    @if(isset($mobile))
                                    <input type="hidden" name="customer_id" value="{{$mobile->id}}">
                                    @endif
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>                 
                                        <input type="text" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" placeholder="Enter mobile number" value="{{ isset($mobile) ? $mobile->mobile : '' }}">
                                        <!-- @error('mobile')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
					                <div class="form-group">
					                    <label for="name">Name</label>                 
					                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ isset($mobile) ? $mobile->name : '' }}">
                                        <!-- @error('name')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
					                </div>
					                
					                <div class="form-group">
					                    <label for="state">State</label>
					                    <select id="state" class="form-control" name="state" autocomplete="nope">
					                        <option value="">Select state</option>
					                        @foreach($states as $state)
					                        <option value="{{$state->id}}" @if(isset($mobile)){{ $mobile->state==$state->id ? 'selected' : '' }}@endif>{{$state->name}}</option>
					                        @endforeach
					                    </select>
                                        <!-- @error('state')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
					                </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <select id="city" class="form-control" name="city" autocomplete="nope">
                                            <option value="">Select city</option>
                                            @if(isset($mobile))
                                                @foreach($cities as $city)
                                                    <option value="{{$city->id}}" {{ $mobile->city==$city->id ? 'selected' : '' }}>{{$city->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <!-- @error('city')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
					                <div class="form-group">
                                        <label for="house">House/Street/Locality</label>                 
                                        <input type="text" class="form-control" id="house" name="house" placeholder="Enter house/street/locality" value="{{ isset($mobile) ? $mobile->house : '' }}">
                                        <!-- @error('house')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
                                    <div class="form-group">
                                        <label for="area">Village/Area</label>                 
                                        <input type="text" class="form-control" id="area" name="area" placeholder="Enter village/area" value="{{ isset($mobile) ? $mobile->area : '' }}">
                                       <!--  @error('area')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
                                    <div class="form-group">
                                        <label for="landmark">Landmark</label>                 
                                        <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Enter landmark" value="{{ isset($mobile) ? $mobile->landmark : '' }}">
                                        <!-- @error('landmark')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
                                    <div class="form-group">
                                        <label for="pincode">Pincode</label>                 
                                        <input type="text" maxlength="6" minlength="6" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" value="{{ isset($mobile) ? $mobile->pincode : '' }}">
                                        <!-- @error('pincode')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if(isset($mobile)){{ $mobile->status ? 'selected' : '' }}@endif>Active</option>
                                            <option value="0" @if(isset($mobile)){{ !$mobile->status ? 'selected' : '' }}@endif>Not active</option>
                                        </select>
                                       <!--  @error('city')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror -->
                                    </div>
                                    <div class="text-center">
					                    <button type="submit" class="btn btn-primary px-5">Submit</button>
					                </div>
					            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
  <script type="text/javascript">
  jQuery(document).ready(function($){
    $('#state').on('change', function(){
      if($(this).val() != ""){
        var url = '/api/get-cities-from-state/'+($(this).val());
        $.get(url, function(data, status){
          if(data.status==true){
            // console.log(data);
            bindParentCategory(data.data,'city');
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
      sel.appendChild(opt);

           // console.log(data.length);
      // ITERATE TO BIND OPTIONS

          // console.log(sel);
      for(var i = 0; i < data.length; i++) {
          var opt = document.createElement('option');
          opt.innerHTML = data[i].name;
          opt.value = data[i].id;
          sel.appendChild(opt);
      }


    }
  });
  </script>
@endpush