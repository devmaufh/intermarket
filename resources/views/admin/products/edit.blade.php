@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar producto</div>

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
                    {{ Form::open(['route'=>[ 'adminProductsUpdate', $product->id ], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del producto') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $product->name, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Fotografia') !!}
                            <div class="form-controls">
                                {{ Form::file('photo', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 200px;height: 200px">
                        {{ Form::hidden('image', $product->image) }}
                        <div class="form-group">
                            {!! Form::label('description', 'Descripción') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', $product->description, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Precio') !!}
                            <div class="form-controls">
                                {{ Form::text('price', $product->price, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantity', 'Cantidad') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', $product->quantity, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Categoria') !!}
                            <div class="form-controls">
                                {{ Form::select('category_id', $categories, $product->category_id, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shop_id', 'Tipo') !!}
                            <div class="form-controls">
                                {{ Form::select('shop_id', $shops, $product->shop_id, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminProducts') }}">Cancelar</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
