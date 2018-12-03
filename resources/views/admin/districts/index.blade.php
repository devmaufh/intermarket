@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ciudades
                    <div class="pull-right"><a href="{{ route('adminDistrictsCreate') }}"><button class="btn btn-xs btn-primary">Nueva ciudad</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($districts as $district)
                                <tr>
                                    <td>{{ $district->id }}</td>
                                    <td>{{ $district->name }}</td>
                                    <td>{{ $district->city->name }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('adminDistrictsEdit', ['id' => $district->id] ) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                                        <a href="{{ route('adminDistrictsDelete', ['id' => $district->id] ) }}" ><button class="btn btn-xs btn-danger">Eliminar</button></a>
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
