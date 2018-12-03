@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categorias
                    <div class="pull-right"><a href="{{ route('adminCategoriesCreate') }}"><button class="btn btn-xs btn-primary">Nueva categoria</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    @if (!empty($category->type))
                                    <td>{{ $category->type->name }}</td>
                                    @endif
                                    <td class="text-right">
                                      <a href="{{ route('adminCategoriesEdit', ['id' => $category->id] ) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                                      <a href="{{ route('adminCategoriesDelete', ['id' => $category->id] ) }}"><button class="btn btn-xs btn-primary">Eliminar</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $categories->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
