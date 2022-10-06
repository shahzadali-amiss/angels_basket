<div class="instagram-area fix" id="gallery">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-xl-12">
				<div class="instagram-active owl-carousel">
					@foreach($instagram as $insta)
					<div class="single-instagram">
						<img src="{{asset('uploads/'.$insta->image)}}" alt="Instagram Bakery Post">
						<a href="#">
							<i class="ti-instagram"></i>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>