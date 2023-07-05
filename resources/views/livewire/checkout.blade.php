{{-- @extends('layouts.app')

@section('content') --}}


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

        <div class="col-sm-7" >

            <div>
              {{-- <div>  class="card-body"</div> --}}
                <div>
                
                    <table class="table text-center table-bordered" class="table-responsive"  >

                        <thead class="text-while" >
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
                                 <td>{{ $product->price}} $</td>  {{--IMPLEMENTAR CALCULO PARA EL SUBTOTAL --}}
                                <td> 4 </td>
                                
                                <td> {{ $product->price }}  </td>
                                <td><button class="btn btn-danger"
                                        wire:click="deleteProduct('{{ $product->pivot->id }}')">Eliminar</button></td>
                            </tr>
                            @endforeach

                            <tr>
                                <th></th>
                                <td class="font-weight-bold">Total</td>
                                <td></td>
                                <td class="font-weight-bold">{{ $products->sum('price') }} $ </td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}