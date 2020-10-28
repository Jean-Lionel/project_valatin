@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{$publication->title}}</h1>
	</div>

	<div class="col-md-12">
		<p class="text-justify">
			{!! nl2br(( $publication->description), false) !!}
		</p>

		<p class="text-center">
  			 {{ $publication->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop