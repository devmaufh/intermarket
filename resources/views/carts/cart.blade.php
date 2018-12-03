@extends('layouts.app')

@section('content')
<div class="container cart-page">
    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (!empty($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endif
            <h4>Mi carrito</h4>
            <table class="table table-striped cart-table">
                    <tr>
                        <th colspan="2">Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th class="text-right"></th>
                    </tr>
                @foreach ($carts as $cart)
                    <tr>
                        <td class='set-width-15'><img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$cart->options['image']) }}" alt="noImage"></td>
                        <td class='set-width-30'>{{ $cart->name }}</td>
                        <td>{{ number_format($cart->price) }}</td>
                        <td>
                            {{ Form::open(['route'=>[ 'cartUpdate', $cart->rowId ]]) }}
                                {{ Form::text('qty', $cart->qty, ['size' =>1]) }}
                                <button><span class="glyphicon glyphicon-refresh"></span></button>
                            {{ Form::close() }}
                        </td>
                        <td>{{ number_format($cart->price*$cart->qty) }}</td>
                        <td class="set-width-5">
                            <a href="" data-toggle="modal" data-target="{{"#".$cart->id}}"><span class="glyphicon glyphicon-remove pull-right"></span></a>
                            <div id="{{$cart->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Advertencia!</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estás seguro de que quieres eliminar este producto de tu carrito de compras?</p><br>
                                            <h4>{{$cart->name}}</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('cartDelete',['rowId' => $cart->rowId]) }}"><button type="button" class="btn btn-danger">Si</button></a>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 ">
                    <h3 class="border-bottom">Subtotal:
                    <span class="pull-right">{{ Cart::subtotal() }}</span></h3>
                    <div class="padding-top pull-right">
                        @if (Cart::count() > 0)
                            <a href="{{ route('orderShow') }}"><button class="btn btn-success">Ordenar <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                            o
                        @endif
                        <a href="{{ url('/') }}"><button class="btn btn-default">Continuar comprando</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
