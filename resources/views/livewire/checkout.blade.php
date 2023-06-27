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

            <div class="card">

                <div class="card-body">
                
                    <table class="table text-center table-bordered">

                        <thead>
                            <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($productos as $producto)
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td><button class="btn btn-danger" wire:click="deleteProduct('{{ $product->pivot->id }}')">Eliminar</button></td>
                            @endforeach

                            <tr>
                                <th></th>
                                <td class="font-weight-bold">Total</td>
                                <td class="font-weight-bold">{{ $products->sum('price') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>