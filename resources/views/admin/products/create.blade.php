@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar producto</div>

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
                    {{Form::open(['route'=>'adminProductsStore', 'files' => true])}}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del producto') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Foto') !!}
                            <div class="form-controls">
                                {{ Form::file('photo', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::hidden('image') }}
                        <div class="form-group">
                            {!! Form::label('description', 'Descripción') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Precio') !!}
                            <div class="form-controls">
                                {{ Form::text('price', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantity', 'Cantidad') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Categoria') !!}
                            <div class="form-controls">
                                {{ Form::select('category_id', $categories, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shop_id', 'Tipo') !!}
                            <div class="form-controls">
                                {{ Form::select('shop_id', $shops, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminProducts') }}">Cancelar</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
