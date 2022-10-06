@extends('layouts.front')
@section('main')
<div class="container-fluid bg-light pt-150 pb-100 px-0 pb-clear">
    <div class="container px-0">
            @include('inc.session-message')
       	<div class="row justify-content-center">
         	<!-- <div class="col-md-6 bg-theme"></div> -->
          <div class="col-md-6 py-5">
            <form action="{{route('get-mobile')}}" method="post" class="py-5">
              @csrf
              <div class="form-group">
                <label class="form-label text-theme font-weight-bold">Enter Mobile Number</label>
                <input class="form-control form-control-lg" type="text" maxlength="10" minlength="10" name="mobile">  
              </div>
              <input class="btn py-2" type="submit" value="submit">
            </form>
          </div>
       	</div>
    </div>
</div>

@endsection