@extends('layouts.app')

@section('content')
<div class="container orderInformation-page">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <strong>¡Felicidades!</strong>
                Tu orden compra está siendo procesada 😊
            </div>
            <h2>Información de la orden</h2>
            <div class="col-md-12">
                <h4>Carrito de compras</h4>
                <table class="table table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    @foreach ($order->orderProducts as $orderProduct)
                        <tr>
                            <td >{{ $orderProduct->product->name }}</td>
                            <td>{{ number_format($orderProduct->price) }}</td>
                            <td>{{ $orderProduct->quantity }}</td>
                            <td>{{ number_format($orderProduct->price*$orderProduct->quantity) }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <th colspan="3">Subtotal</th>
                            <th>{{ $subtotal }}</th>
                        </tr>
                </table>
                <div>
                    <h4>Información del comprador</h4>
                    <table class="table table-striped">
                        <tr>
                            <td>#</td>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td>Comprador</td>
                            <td>{{ $order->shipping_name }}</td>
                        </tr>
                        <tr>
                            <td>Telefono</td>
                            <td>{{ $order->shipping_phone }}</td>
                        </tr>
                        <tr>
                            <td>Correo</td>
                            <td>{{ $order->shipping_email }}</td>
                        </tr>
                        <tr>
                            <td>Información de envío</td>
                            <td>{{ $order->shipping_address }}</td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td>{{ $order->country->name }}</td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td>{{ $order->city->name }}</td>
                        </tr>
                        <tr>
                            <td>Ciudad</td>
                            <td>{{ $order->district->name }}</td>
                        </tr>
                    </table>
                    <a href="{{ url('/') }}"><button class="btn btn-default">Volver</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
