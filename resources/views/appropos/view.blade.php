@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
	
		<h3>{{$apropo->type_apropos}}</h3>
		
	</div>

	<div class="col-md-12">
		<p class="text-justify">
			{!! ( $apropo->description) !!}
		</p>

		<p class="text-center">
  			 {{ $apropo->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop