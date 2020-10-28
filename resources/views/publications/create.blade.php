@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rédiger l'article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('publications.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('publications.store') }}" method="POST" id="form" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titre:</strong>
                    <input type="text" name="title" id="title" class="form-control" placeholder="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type de publication</strong>
                    <select name="type_pub" id="type_pub" class="form-control">
                        <option value="">... select</option>
                        <option value="COMMUNIQUE">COMMUNIQUE DE PRESSE</option>
                        <option value="POLICE">POLICE MAGAZINE</option>
                        <option value="SPORT">SPORT</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    
                    <div autofocus class="col-md-12 sol-sm-12 form-control"  contenteditable="true" style="height: auto; min-height: 300px;" id="desc_html">
                    </div>

                </div>

                <input type="hidden" name="description" id="description">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                {{-- <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control">
                </div> --}}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" id="butsave">Enregister et publier</button>
            </div>
        </div>

    </form>
@endsection


@section('javascript')


<script>

jQuery(document).ready(function($) {
    
    let form = $('#form');

    form.on('submit',  function(event) {
        event.preventDefault();
        /* Act on the event */
        $('#description').val($('#desc_html').html())
        this.submit();
    });
});



 
</script>
@endsection