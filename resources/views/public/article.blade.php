@extends('layouts.site')



@section('content')

<div class="container">

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $article->title }}</h1>
			<div class="col-md-12">
				<img src="{{ asset('./images/'.$article->image_url) }}" class="img-fluid" alt="{{$article->title}} image">
			</div>

			<div class="col-md-12 text-justify">

				{!! nl2br(( $article->description), false) !!}
				
			</div>
		</div>

		<div class="col-md-4">


			<div class="twitter">

			<a href="https://twitter.com/intent/tweet?screen_name=de_inspection&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @de_inspection</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

			<a class="twitter-timeline" href="https://twitter.com/de_inspection?ref_src=twsrc%5Etfw">Tweets by de_inspection</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

							
						</div>

			<div class="facebook" style="overflow: scroll;">

				@if (count($facebook) > 0)
					{{-- expr --}}
					{!! $facebook[0]->description !!}
				@endif
				
			</div>

			

		</div>
	</div>

</div>

@stop