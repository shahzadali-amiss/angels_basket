<article class="blog_item">
	<div class="blog_item_img">
		<img class="card-img rounded-0" src="{{asset($image)}}" alt="">
		<a href="#" class="blog_item_date">
			<h3>{{$date}}</h3>
 			<p>{{$month}}</p>
		</a>
	</div>
	<div class="blog_details">
		<a class="d-inline-block" href="{{route($link)}}">
			<h2 class="blog-head" style="color: #2d2d2d;">{{$heading}}</h2>
		</a>
		<p>{{$description}}</p>
		<ul class="blog-info-link">
			<li>
				<a href="#">
					<i class="fa fa-user"></i>{{$tags}}
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-comments"></i>{{$comments}} Comments
				</a>
			</li>
		</ul>
	</div>
</article>