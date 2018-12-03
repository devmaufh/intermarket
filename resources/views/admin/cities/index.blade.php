@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Estados
                    <div class="pull-right"><a href="{{ route('adminCitiesCreate') }}"><button class="btn btn-xs btn-primary">Nuevo estado</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>País</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    @if (!empty($city->country))
                                    <td>{{ $city->country->name }}</td>
                                    @endif
                                    <td class="text-right">
                                      <a href="{{ route('adminCitiesEdit', ['id' => $city->id] ) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                                      <a href="{{ route('adminCitiesDelete', ['id' => $city->id] ) }}" ><button class="btn btn-xs btn-danger">Eliminar</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $cities->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
