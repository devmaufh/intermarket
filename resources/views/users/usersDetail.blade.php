@extends('layouts.app')

@section('content')
<div class="container user-page">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3>Información personal</h3>
                <a href="#"><button class="btn btn-xs btn-primary">Editar</button></a>
            </div>
            <div class="col-md-4 user-img">
                <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$user->avatar) }}" alt="noImage">
            </div>
            <div class="col-md-8 ">

                <form class="form-horizontal">
                    <div class="form-group">
                        {!! Form::label('first_name', 'Nombre') !!}
                        {{ $user->first_name }}
                    </div>
                    <div class="form-group">
                        {!! Form::label('last_name', 'Apellidos') !!}
                        {{ $user->last_name }}
                    </div>
                    <div class="form-group">
                        {!! Form::label('date_of_birth', 'Fecha de nacimiento') !!}
                        {{ $user->date_of_birth }}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone_number', 'Número de telefono') !!}
                        {{ $user->phone_number }}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo') !!}
                        {{ $user->email }}
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Dirección') !!}
                        {{ $user->address }}
                    </div>
                    @if (!empty($user->country))
                    <div class="form-group">
                        {!! Form::label('country', 'País') !!}
                        {{ $user->country->name }}
                    </div>
                    @endif
                    @if (!empty($user->city))
                    <div class="form-group">
                        {!! Form::label('city', 'Estado') !!}
                        {{ $user->city->name }}
                    </div>
                    @endif
                    @if (!empty($user->district))
                    <div class="form-group">
                        {!! Form::label('district', 'Ciudad') !!}
                        {{ $user->district->name }}
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
    <div>
        <h3>Mis ordenes</h3>
        <table class="table table-striped">
                <tr>
                    <td>#</td>
                    <td>Fecha</td>
                    <td>Producto</td>
                    <td>Subtotal</td>
                    <td>Estatus</td>
                    <td>Detalles</td>
                </tr>
            @foreach ($user->orders as $order)
                <tr>
                    <td>
                    {{ $order->id }}</td>
                    <td>{{ $order->create_at }}</td>
                    <td>{{ $order->items() }}</td>
                    <td>{{ $order->subtotal() }}</td>
                    <td>{{ $order->statusText() }}</td>
                    <td><a href="{{ route('orderInformation', ['order_id' => $order->id]) }}">Detalles</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
