@extends('layouts.template')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
          
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('commessarias.create') }}" title="Create a commicariat"> <i class="fas fa-plus-circle"></i>
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
        @foreach ($commessarias as $commicariat)
            <tr>
                <td>{{$commicariat->id}}</td>
                <td>

                     <a href="{{ route('commessarias.show',$commicariat) }}" title="show">
                           {{ strtoupper($commicariat->type)}}
                        </a>
                </td>
              
                
                <td>{{$commicariat->created_at}}</td>
                
                <td>
                    <form action="{{ route('commessarias.destroy', $commicariat) }}" method="POST">

                        <a href="{{ route('commessarias.show',$commicariat) }}" title="show">
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

    {!! $commessarias->links() !!}

@endsection