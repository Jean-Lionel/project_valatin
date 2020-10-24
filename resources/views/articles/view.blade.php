@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{$article->title}}</h1>
	</div>

	<div class="col-md-12">
	{{-- 	<img src="./images/{{$article->image_url}}" alt=""> --}}
		<img src="{{ asset('./images/'.$article->image_url) }}" alt="">
	</div>

	<div class="col-md-12">
		<p class="text-justify">
			{!! nl2br(( $article->description), false) !!}
		</p>

		<p class="text-center">
  			Par Jean Lionel Nininahazwe :  {{ $article->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop