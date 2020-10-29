@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		
	
		<h3>{{$commecaria->type}}</h3>
		
	</div>

	<div class="col-md-12">
		<p class="text-justify">
			{!!  $commecaria->description !!}
		</p>

		<p class="text-center">
  			 {{ $commecaria->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop