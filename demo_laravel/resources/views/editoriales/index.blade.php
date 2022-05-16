@extends('layout.template')
@section('title','Lista de Editoriales')

@section('content')
<div class="container">
    <div class="row">
        <h3>Lista de editoriales</h3>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}

            @endif
            @if (session('state'))
            <div class="alert alert-danger">
                {{session('state')}}
            </div>
            @endif
            @if (session('actualizado'))
            <div class="alert alert-success">
                {{session('actualizado')}}
            </div>
            @endif
            </div>
        </div>
        </div>

    <br>
    <div class="row">
        <div class="col-md-10">
            <a type="button" class="btn btn-primary btn-md" href="{{route('editoriales.create')}}"> Nuevo editorial</a>
        <br><br>
        <table id="tabla" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Codigo del editorial</th>
                    <th>Nombre del editorial</th>
                    <th>Contacto</th>
                    <th>Telefono</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($editoriales as $editorial)
            <tr>
                <td>{{$editorial->codigo_editorial}}</td>
                <td>{{$editorial->nombre_editorial}}</td>
                <td>{{$editorial->contacto}}</td>
                <td>{{$editorial->telefono}}</td>
                <td>
                    <a title="Editar" class="btn btn-primary btn-circle" href="{{route('editoriales.edit',$editorial->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                    <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('editoriales.destroy',$editorial->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div> 
    </div>                    
</div> 
<script>
    $(document).ready(function () {
    $('#tabla').DataTable();
    });
</script>
@endsection