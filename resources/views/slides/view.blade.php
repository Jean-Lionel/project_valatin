@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{$slide->title}}</h1>
	</div>

	<div class="col-md-12">
	{{-- 	<img src="./images/{{$slide->image_url}}" alt=""> --}}
		<img src="{{ asset('./images/slides/'.$slide->image_url) }}" alt="" width="800">
	</div>

	<div class="col-md-12">
		<p class="text-justify">
			{!! nl2br(( $slide->description), false) !!}
		</p>

		<p class="text-center">
  			 {{ $slide->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop