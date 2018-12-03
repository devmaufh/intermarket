@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar usuario</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ Form::open(['route' => 'adminUsersStore', 'files' => true]) }}
                        
                        <div class="form-group">
                            {!! Form::label('avatar', 'Avatar:') !!}
                            <div class="form-controls">
                                {{ Form::file('avatar', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('first_name', 'Nombre:') !!}
                            <div class="form-controls">
                                {{ Form::text('first_name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::hidden('image') }}

                        <div class="form-group">
                            {!! Form::label('last_name', 'Apellidos:') !!}
                            <div class="form-controls">
                                {{ Form::text('last_name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('date_of_birth', 'Fecha de nacimiento:') !!}
                            <div class="form-controls">
                                {{ Form::text('date_of_birth', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('phone_number', 'Telefono:') !!}
                            <div class="form-controls">
                                {{ Form::text('phone_number', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Dirección:') !!}
                            <div class="form-controls">
                                {{ Form::text('address', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Correo:') !!}
                            <div class="form-controls">
                                {{ Form::text('email', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Contraseña:') !!}
                            <div class="form-controls">
                                {{ Form::password('password', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'Ciudad:') !!}
                            <div class="form-controls">
                                {{ Form::select('district_id', $districts, null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'Estado:') !!}
                            <div class="form-controls">
                                {{ Form::select('city_id', $cities, null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'País:') !!}
                            <div class="form-controls">
                                {{ Form::select('country_id', $countries, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        
                        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminUsers')}}">Cancelar</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
