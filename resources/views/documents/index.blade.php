@extends('layouts.template')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des documents </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('files.create') }}" title="Create a article"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Titre</th>
    
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($documents as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>

                     <a href="{{ route('files.show',$article) }}" title="show">
                           {{$article->title}}
                        </a>


                </td>
              
                
                <td>{{$article->created_at}}</td>
                
                <td>
                    <form action="{{ route('files.destroy', $article) }}" method="POST">

                        <a href="{{ route('files.show',$article) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $documents->links() !!}

@endsection