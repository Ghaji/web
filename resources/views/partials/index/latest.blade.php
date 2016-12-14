
<p class="text-subhead">
<ul id="js-news" class="js-hidden">
	@foreach($latests as $item)
	<li>
		<a href="{{ route('single.show', $item->slug) }}"> {{ $item->title }} </a>
	</li>
	@endforeach
</ul>
</p>
