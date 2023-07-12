{{-- @extends('layouts.app')

@section('content') --}}


@section('css')
<style>
    .abs-center,
    .tabla,
    .row,
    .col {
        display: flex;
        align-items: center;
        justify-content: center;
        height: auto;
        width: auto;
    }

    .card-body {
        width: auto;
    }
</style>
@endsection



<div>

    @if(session()->has('message'))
    <div class="alert alert-sucess alert-dismissible" role="alert">
        {{ session('message') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>

    @endif


    <h2 class="text-center">Resumen productos</h2>

    <div class="row">

        <div class="col-sm-7">

            <div>
                {{-- <div> class="card-body"</div> --}}
                <div class="tabla">

                    <table class="table text-center table-bordered" class="table-responsive">

                        <thead class="text-while">
                            <tr>
                                <th scope="col" style="background: #5E72E4">#</th>
                                <th scope="col" style="background: #5E72E4">Nombre</th>
                                <th scope="col" style="background: #5E72E4">Producto</th>
                                <th scope="col" style="background: #5E72E4">Precio</th>
                                <th scope="col" style="background: #5E72E4">Cantidad</th>
                                <th scope="col" style="background: #5E72E4">Subtotal</th>
                                <th scope="col" style="background: #5E72E4">Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }} </td>
                                <td>{{ $product->name }}</td>
                                {{-- <td><button class="btn btn-danger" wire:click='deleteProduct'>Eliminar</button>
                                </td> --}}
                                <td>{{ $product->thumbnail }}</td>
                                <td>{{ $product->price}} $</td> {{--IMPLEMENTAR CALCULO PARA EL SUBTOTAL --}}
                                <td> 4 </td>

                                <td> {{ $product->price }} </td>
                                <td><button class="btn btn-danger"
                                        wire:click="deleteProduct('{{ $product->pivot->id }}')">Eliminar</button></td>
                            </tr>
                            @endforeach

                            <tr>

                                <td colspan="5" style="background-color: #5E72E4" class="font-weight-bold">Total</td>

                                <td colspan="2" style="background-color: #5E72E4" class="font-weight-bold">{{
                                    $products->sum('price') }} $ </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

   
<div style="margin: 20px">
    <div class="d-flex justify-content-end">
        <a style="background-color: #5E72E4; color:#FFFFFF; width:175.36px; height:40px ; margin:10px"
            type="button" href="{{url('/') }}"  class="btn">Seguir comprando</a>
    </div>

    <div class="d-flex justify-content-end">
        </br>

        <a style="background-color: #5E72E4; color:#FFFFFF; width:175.36px; height:40px; margin:10px" type="button"
        class="btn"  href="https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fmep%2F">Finalizar
        compra</a>

        {{-- REDIRECCIONAR A UN ENLACE O PÁGINA DE FACEBOOK
        <a style="background-color: #5E72E4; color:#FFFFFF; width:175.36px; height:40px; margin:10px" type="button"
            class="btn"  href="https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fmep%2F">Finalizar
            compra</a> --}}
    </div>
</div>

    {{-- @endsection --}}