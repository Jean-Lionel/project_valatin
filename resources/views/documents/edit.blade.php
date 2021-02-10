@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modification du slide : <b>{{$slide->title}}</b></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('slides.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titre:</strong>
                    <input type="text" name="title" value="{{$slide->title}}" class="form-control" placeholder="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" rows="4" name="description"
                        placeholder="description">{!! $slide->description !!}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img src="{{ asset('/images/slides/'.$slide->image_url) }}" width="400">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistre</button>
            </div>
        </div>

    </form>
@endsection
