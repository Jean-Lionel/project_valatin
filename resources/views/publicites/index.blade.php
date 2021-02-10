@extends('layouts.template')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des publicités </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('publicites.create') }}" title="Create a publicite"> <i class="fas fa-plus-circle"></i>
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
            <th>Message</th>
    
            <th>Date de création</th>
            <th>Actions</th>
        </tr>
        @foreach ($publicites as $publicite)
            <tr>
                <td>{{$publicite->id}}</td>
                <td>

                     <p>
                         {{$publicite->message}}
                     </p>


                </td>
              
                
                <td>{{$publicite->created_at}}</td>
                
                <td>
                    <form action="{{ route('publicites.destroy', $publicite) }}" method="POST">

                        <a href="{{ route('publicites.show',$publicite) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('publicites.edit', $publicite) }}">
                            <i class="fas fa-edit  fa-lg"></i>
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

    {!! $publicites->links() !!}

@endsection