@extends('layouts.front')
@section('main')

@include('inc.inner-hero', ['heading'=>"Blog", 'subheading'=>"Sweet Words"])

<section class="blog_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="blog_left_sidebar">
					@include('inc.single-blog-item',['image'=>"img/blog/single_blog_1.png", 'date'=>"15", 'month'=>"Jan", 'heading'=>"Google inks pact for new 35-storey office", 'description'=>"That dominion stars lights dominion divide years for fourth have don't stars is that
					he earth it first without heaven in place seed it second morning saying.", 'tags'=>"Travel, Lifestyle", 'comments'=>"03", 'link'=>"blogDetail"])

					@include('inc.single-blog-item',['image'=>"img/blog/single_blog_2.png", 'date'=>"15", 'month'=>"Jan", 'heading'=>"Google inks pact for new 35-storey office", 'description'=>"That dominion stars lights dominion divide years for fourth have don't stars is that
					he earth it first without heaven in place seed it second morning saying.", 'tags'=>"Travel, Lifestyle", 'comments'=>"03", 'link'=>"blogDetail"])

					@include('inc.single-blog-item',['image'=>"img/blog/single_blog_3.png", 'date'=>"15", 'month'=>"Jan", 'heading'=>"Google inks pact for new 35-storey office", 'description'=>"That dominion stars lights dominion divide years for fourth have don't stars is that
					he earth it first without heaven in place seed it second morning saying.", 'tags'=>"Travel, Lifestyle", 'comments'=>"03", 'link'=>"blogDetail"])

					@include('inc.single-blog-item',['image'=>"img/blog/single_blog_4.png", 'date'=>"15", 'month'=>"Jan", 'heading'=>"Google inks pact for new 35-storey office", 'description'=>"That dominion stars lights dominion divide years for fourth have don't stars is that
					he earth it first without heaven in place seed it second morning saying.", 'tags'=>"Travel, Lifestyle", 'comments'=>"03", 'link'=>"blogDetail"])

					@include('inc.single-blog-item',['image'=>"img/blog/single_blog_5.png", 'date'=>"15", 'month'=>"Jan", 'heading'=>"Google inks pact for new 35-storey office", 'description'=>"That dominion stars lights dominion divide years for fourth have don't stars is that
					he earth it first without heaven in place seed it second morning saying.", 'tags'=>"Travel, Lifestyle", 'comments'=>"03", 'link'=>"blogDetail"])

					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<i class="ti-angle-left"></i>
								</a>
							</li>
							<li class="page-item">
								<a href="#" class="page-link">1</a>
							</li>
							<li class="page-item active">
								<a href="#" class="page-link">2</a>
							</li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<i class="ti-angle-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>

						@include('inc.post-item', ['image'=>"img/post/post_1.png", 'link'=>"blogDetail", 'title'=>"From life was you fish...", 'time'=>"January 12, 2019"])

						@include('inc.post-item', ['image'=>"img/post/post_2.png", 'link'=>"blogDetail", 'title'=>"The Amazing Hubble", 'time'=>"02 Hours ago"])

						@include('inc.post-item', ['image'=>"img/post/post_3.png", 'link'=>"blogDetail", 'title'=>"Astronomy Or Astrology", 'time'=>"03 Hours ago"])

						@include('inc.post-item', ['image'=>"img/post/post_4.png", 'link'=>"blogDetail", 'title'=>"Asteroids telescope", 'time'=>"01 Hours ago"])

					</aside>
					<aside class="single_sidebar_widget newsletter_widget">
						<h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
						<form action="#">
							<div class="form-group">
								<input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
 							</div>
							<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
						</form>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection