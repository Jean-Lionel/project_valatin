@extends('layouts.site')



@section('content')
	
	<div class="container">

		<div class="row">
			

			<div class="col-md-12 text-justify">

				{!! nl2br(( $contact->description), false) !!}
				
			</div>
		</div>
		
	</div>

@stop