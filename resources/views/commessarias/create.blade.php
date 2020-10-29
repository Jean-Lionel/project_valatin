@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Enregistrement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('commessarias.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('commessarias.store') }}" method="POST" id="form" enctype="multipart/form-data">
        @csrf

        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sous titre</strong>
                    <select name="type" id="type" class="form-control">
                     <optgroup label="Commissariats Généraux">
                        <option value="Commissariat Général PJ">Commissariat Général PJ</option>
                        <option value="BCN-INTERPOL Bujumbura">BCN-INTERPOL Bujumbura</option>
                        <option value="Indéntification judiciaire">Indéntification judiciaire</option>
                        <option value="BCN-INTERPOL Bujumbura">BCN-INTERPOL Bujumbura</option>
                        <option value="Rechercher criminelle">Rechercher criminelle</option>

                        <option value="">Documentation et statistiques</option>
                        <optgroup label="Unité spécialisées:">
                            <option value="Anti drogue">Anti drogue</option>
                            <option value="PPM">PPM</option>
                            <option value="Brig">Brig</option>
                        </optgroup>
                      </optgroup>


                      <optgroup label="Commissariat Général Migration">
                        <option value="Chancelier">Chancelier</option>
                        <option value="Documents de voyage">Documents de voyage</option>
                        <option value="FRONTIERE">Frontières</option>
                        <option value="Etrangers">Etrangers</option>
                        <option value="AEROPORTUAIRE">Aéroportuaire</option>
                        <option value="Portuaire">Portuaire</option>
                
                      </optgroup>


                      <optgroup label="Commissariat Général Formation">
                        <option value="Institut Supérieur de Police">Institut Supérieur de Police</option>
                        <option value="Ecole des Brigadiers de Police">Ecole des Brigadiers de Police</option>
                        <option value="Centre de Formation et Perfectionnement">Centre de Formation et Perfectionnement</option> 

                      </optgroup>


                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contenue:</strong>
                    
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