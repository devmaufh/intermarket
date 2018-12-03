@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar categoria</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                <div class="panel-body">
                    {{ Form::open(['url'=>'admin/categories']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre de la categoria:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('type_id', 'Tipo')!!}
                            <div class="form-controls">
                                {!!Form::select('type_id', $types, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
