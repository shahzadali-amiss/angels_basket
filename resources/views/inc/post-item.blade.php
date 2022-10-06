<div class="media post_item">
	<img src="{{asset($image)}}" alt="post">
	<div class="media-body">
		<a href="{{route($link)}}">
			<h3 style="color: #2d2d2d;">{{$title}}</h3>
		</a>
		<p>{{$time}}</p>
	</div>
</div>