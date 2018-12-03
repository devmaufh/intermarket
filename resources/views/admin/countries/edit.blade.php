@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar país</div>
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
                    {{ Form::open(['route' => ['adminCountriesUpdate', $country->id], 'method' => 'put']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del país:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $country->name, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::submit('Actualizar', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminCountries')}}">Cancelar</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
