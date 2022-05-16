@extends('layout.template')
@section('title','Editanto Editorial')

@section('content')
<div class="container">
    <div class="row">
        <h3>Modificando editorial</h3>
    </div>
    <div class="row">
        <div class=" col-md-7">
           
            <form role="form" action="{{route('editoriales.update',$editorial->id)}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$editorial->id}}">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
                <div class="form-group">
                    <label for="codigo">Codigo del editorial:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $editorial->codigo_editorial}}" name="codigo_editorial" id="codigo_editorial" value="" placeholder="Ingresa el codigo del genero" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @error('codigo_editorial')
                       <span class="error text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre del editorial:</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  value="{{ $editorial->nombre_editorial}}" name="nombre_editorial" id="nombre_editorial" value=""  placeholder="Ingresa el nombre del editorial" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @error('nombre_editorial')
                    <span class="error text-danger"> {{$message}}</span>
                 @enderror
                </div>
                <div class="form-group">
                    <label for="contacto">Contacto:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="contacto" value="{{ $editorial->contacto}}" name="contacto" value=""  placeholder="Ingresa el nombre del contacto">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @error('contacto')
                    <span class="error text-danger"> {{$message}}</span>
                 @enderror
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <div class="input-group">
                        <input type="tel" class="form-control" value="{{ $editorial->telefono}}" id="telefono" name="telefono"  value="" placeholder="Ingresa el telefono del contacto" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @error('telefono')
                    <span class="error text-danger"> {{$message}}</span>
                 @enderror
                </div>
                <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                <a class="btn btn-danger" href="">Cancelar</a>
            </form>
        </div>
    </div>  
</div>
@endsection