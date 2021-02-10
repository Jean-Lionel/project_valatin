@extends('layouts.template')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des publications Facebook </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('socialnetworks.create') }}" title="Create a publicite"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    @foreach ($socialnetworks as $socialnetwork)
        {!! $socialnetwork->description !!}

         <form action="{{ route('socialnetworks.destroy', $socialnetwork) }}" method="POST">

                        @csrf
                        @method('DELETE')


            <button type="submit" title="delete" style="border: none; background-color:transparent;" class="btn btn-danger btn-block">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                            effacer
                        </button>
        </form>
    @endforeach




@endsection