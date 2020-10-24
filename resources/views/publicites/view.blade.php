@extends('layouts.template')

@section('content')

<div class="row">


	<div class="col-md-12">
		<p class="text-justify">
			{!! nl2br(( $publicite->message), false) !!}
		</p>

		<p class="text-center">
  			Créer {{ $publicite->created_at }}
  	</p>

<!-- Footer -->
	</div>

	

</div>

@stop