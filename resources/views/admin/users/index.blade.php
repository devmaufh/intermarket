@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de usuarios
                    <div class="pull-right"><a href="{{ route('adminUsersCreate') }}"><button class="btn btn-xs btn-primary">Crear nuevo usuario</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Fecha de nacimiento</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>País</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->avatar }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->address }}</td>
                                    @if (!empty($user->district))
                                    <td>{{ $user->district->name }}</td>
                                    @endif
                                    @if (!empty($user->city))
                                    <td>{{ $user->city->name }}</td>
                                    @endif
                                    @if (!empty($user->country))
                                    <td>{{ $user->country->name }}</td>
                                    @endif
                                    <td class="text-right">
                                        <a href="{{ route('adminUsersEdit', ['id' => $user->id] ) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                                        <a href="" data-toggle="modal" data-target="{{"#".$user->id}}"><button class="btn btn-xs btn-danger">Eliminar</button></a>
                                        <div id="{{$user->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">¡Advertencia!</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Seguro quieres eliminar este usuario?</p><br>
                                                        <h4>{{$user->first_name}}</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ route('adminUsersDelete', ['id' => $user->id] ) }}"><button type="button" class="btn btn-danger">Si</button></a>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
