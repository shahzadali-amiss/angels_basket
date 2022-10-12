@if(Session::has('success'))
  <div class="alert alert-success fix-message">
      <p class="msg"> {{ Session::get('success') }}</p>
  </div>
@endif

@if(Session::has('error'))
  <div class="alert alert-danger fix-message">
      <p class="msg"> {{ Session::get('error') }}</p>
  </div>
@endif

@if(Session::has('status'))
  <div class="alert alert-primary fix-message">
      <p class="msg"> {{ Session::get('status') }}</p>
  </div>
@endif


  <div class="alert alert-success fix-message d-none" id="image-delete-success">
      <p class="msg" id="success-message"> </p>
  </div>

  <div class="alert alert-danger fix-message d-none" id="image-delete-failed">
      <p class="msg" id="failed-message"> </p>
  </div>

@push('scripts')
<script>
	jQuery(document).ready(function($){
		$('.alert-success').fadeIn().delay(5000).fadeOut();
		$('.alert-danger').fadeIn().delay(5000).fadeOut();
		$('.alert-primary').fadeIn().delay(5000).fadeOut();
	});
</script>
@endpush

