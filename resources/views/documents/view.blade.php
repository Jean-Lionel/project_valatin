@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">

		<h3>{{$document->title}}</h3>

		<p class="text-justify">
			{!! nl2br(( $document->description), false) !!}

			{{-- @dump($document) --}}
		</p>

		<a href="{{ asset('documents/'.$document->link_file) }}" target="blank">Afficher le document</a>


<!-- Footer -->
	</div>

	

</div>

@stop