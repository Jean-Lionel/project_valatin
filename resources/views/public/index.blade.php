@extends('layouts.site')



@section('publicite')


@if ($publicite->count() > 0)
	{{-- expr --}}
	<div class="alert bg-primary alert-dismissible fade show col-md-12 text-center text-white">
	<marquee behavior="" direction="">

		{!! nl2br($publicite[0]->message) ?? "" !!}

	</marquee>

	

<button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif



@endsection


@section('content')


<!-- 	Slide -->

<div id="slide" class="mt-3 container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">

			@for ($i = 0; $i < sizeof($slides); $i++)

			<div class="carousel-item @if($i === 0) active @endif">
				<img class="d-block w-100" height="600px" src="{{ asset('./images/slides/'. $slides[$i]->image_url) }}" alt="{{
					$slides[$i]->title}}">

					<div class="carousel-caption d-none d-md-block">
						<h5>{{ $slides[$i]->title}}</h5>
						<p>
							{{ $slides[$i]->description }}
						</p>
					</div>


				</div>

				@endfor
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Précedent</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Suivant</span>
			</a>
		</div>


	</div>



	<!-- 	Fin slide -->




	<div class="main container">

		<article>
			<div class="">

				<div class="row">
					<div class="col-sm-12 col-md-8">
						<h1>Police Nationale du Burundi</h1>
						<div class="jumbotron">
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eaque, impedit modi molestias quaerat ipsam, nesciunt harum placeat voluptate suscipit error laborum magnam in vitae, delectus sapiente enim incidunt maxime!
								Dolores, iusto! Odit ab commodi id, recusandae obcaecati minima. Eius beatae reiciendis quo sequi temporibus consequatur perspiciatis earum, veniam totam obcaecati vero cumque error maxime blanditiis laudantium labore adipisci quibusdam.
								Dolorem quod neque velit maiores officiis praesentium illo libero sed temporibus excepturi ducimus cum debitis nemo, provident rerum expedita possimus itaque. Dicta velit atque quaerat dolorum dolor reprehenderit ipsum laboriosam?
								Voluptates ullam, amet voluptatum obcaecati. Animi repellendus, sequi similique molestias, soluta nihil ipsum. Est nulla enim ratione fugit a reiciendis repellat harum velit accusantium fugiat nesciunt odio eius, dicta laborum.
								Et dicta eveniet consequatur in animi assumenda magnam temporibus magni. In accusamus, voluptas sapiente ad ea quod! Commodi, illum! Doloribus aspernatur nesciunt dolores, nemo. Neque, ex dolor nostrum cupiditate reprehenderit.
								Blanditiis porro unde nihil animi consequatur fugiat ducimus, quo quisquam id? Hic in eum cupiditate! Dignissimos magnam debitis tempora ex, earum soluta blanditiis molestias suscipit fugiat provident rem recusandae, molestiae?
								Explicabo ea quo ratione, aut inventore exercitationem nesciunt, iste asperiores autem ipsa saepe impedit illum quaerat vitae nobis tenetur, consequatur voluptates! Quod, illo, laudantium. Quidem fugiat reiciendis voluptatem eius, fugit?
								Qui, pariatur quos nihil nisi nobis natus autem reprehenderit commodi doloremque, voluptas assumenda a ullam aperiam labore odit delectus odio voluptatum error, adipisci ipsum distinctio voluptates quod. Facere, sed, ipsam.
							</p>
						</div>




							<div class="article-recent">

			

			<div class="pt-5 container">
				<div class="row d-flex justify-items-center align-items-center">



					@for ($i = 0; $i < sizeof($articles)  ; $i++)
					{{-- expr --}}

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
						<a href="{{ route('article',$articles[$i]->title ) }}" class="card-ui card">
							{{-- http://lorempixel.com/640/360 --}}
							<img class="card-img mt-1" src="{{ asset('./images/'.$articles[$i]->image_url) }}"  width="360" alt="Card image">
							<div class="overlay color-{{$i}}"></div>
							<div class="card-body">
								<h5 class="card-title my-2">{{ $articles[$i]->title }}</h5>
								<p class="card-text">{{ substr($articles[$i]->description,0,100) }} ...</p>
								
								<span class="badge badge-dark font-weight-bold p-2">{{ $articles[$i]->created_at }}</span>

								
								
							</div>
						</a>
					</div>


					@endfor



				</div>
			</div>



		</div>



					</div>

					<div class="col-sm-12 col-md-4">

						<div class="document">
							

						<ul class="list-group">
						  
						  
						  @foreach ($documents as $element)
						  	<li class="list-group-item">
						  		<a href="{{ asset('documents/'.$element->link_file) }}" target="blank">{{ $element->title}}</a>

						  	</li>
						  @endforeach
						</ul>

						<hr>
							
						</div>

						<div class="twitter">

							<a href="https://twitter.com/intent/tweet?screen_name=nijeanlionel&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @de_inspection</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

							<a class="twitter-timeline" href="https://twitter.com/nijeanlionel?ref_src=twsrc%5Etfw">Tweets by de_inspection</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
							<hr>
							
						</div>
						<hr>

						<div class="facebook" style="overflow: scroll;">

							@if (count($facebook) > 0)
								{{-- expr --}}
								{!! $facebook[0]->description !!}
							@endif

							<hr>
							
						</div>


						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
						</div>

					</div>
				</div>

			</div>	
		</article>


		@stop