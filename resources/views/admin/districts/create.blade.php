@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar ciudad</div>

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
                    {{ Form::open(['route' => 'adminDistrictsStore']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre de la ciudad:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('name', 'Estado:') !!}
                            <div class="form-controls">
                                {{ Form::select('city_id', $cities, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminDistricts')}}">Cancelar</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
