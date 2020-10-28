@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h3>{{$contact->type_contact}}</h3>
	</div>

	<div class="col-md-12">
		<p class="text-justify">
			{!! nl2br(( $contact->description), false) !!}
		</p>

		<p class="text-center">
  			 {{ $contact->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop