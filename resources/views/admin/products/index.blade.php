@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Productos
                    <div class="pull-right">
                        <a href="{{ route('adminProductsCreate') }}"><button class="btn btn-xs btn-primary ">Nuevo producto</button></a>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Tipo</th>
                                <th>Categoria</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price) }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->shop->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>
                                    <a href="{{ route('adminProductsEdit', ['id' => $product->id] ) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                                    <a href="" data-toggle="modal" data-target="{{"#".$product->id}}"><button class="btn btn-xs btn-danger">Eliminar</button></a>
                                    <div id="{{$product->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">¡Advertencia!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>¿Seguro quieres eliminar este producto?</p><br>
                                                    <h4>{{$product->name}}</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{ route('adminProductsDelete', ['id' => $product->id] ) }}"><button type="button" class="btn btn-danger">Si</button></a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
