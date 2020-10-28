@extends('layouts.site')



@section('content')
	
	<div class="container">

		<div class="row">
			<h1>{{ $article->title }}</h1>
			<div class="col-md-12">
				<img src="{{ asset('./images/'.$article->image_url) }}" class="img-fluid" alt="{{$article->title}} image">
			</div>

			<div class="col-md-12 text-justify">

				{!! nl2br(( $article->description), false) !!}
				
			</div>
		</div>
		
	</div>

@stop