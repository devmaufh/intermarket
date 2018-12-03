@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Secciones
                    <div class="pull-right"><a href="{{ route('adminTypesCreate') }}"><button class="btn btn-xs btn-primary">Nueva sección</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $type)
                                <tr>
                                    <td>{{ $type->id }}</td>
                                    <td>{{ $type->name }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('adminTypesEdit', ['id' => $type->id] ) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                                        <a href="{{ route('adminTypesDelete', ['id' => $type->id] ) }}" ><button class="btn btn-xs btn-danger">Eliminar</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
