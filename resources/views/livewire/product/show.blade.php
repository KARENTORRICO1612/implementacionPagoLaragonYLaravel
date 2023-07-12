@section('css')
<style>
    .abs-center {
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

<div>
@if(session()->has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" arria-label="Close">

        <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif
</div>

<div class="col-sm">
    <div class="abs-center">
        <div class="card">
            <div class="card-body" style="background-color: #C1C8CB ; color:#000000">
                <p>Nuevo - 3042 vendidos</p>
                <h2>{{ $product->name }}</h2>

                <img src="https://www.kreedon.com/wp-content/uploads/2022/10/high-gaming-pc.jpg" class="d-block-center w-100 "
                    height="600px" background-color="rgba(0,0,0,0.8)" alt="..." class="img-fluid"
                    alt="Responsive image">

                <h1 class="mt-3">${{ $product->price }} <sup>00</sup></h1>

                <div>
                    <p style="color: #5E72E4"> Sistema operativo: ${{ $product->price }} </p>
                    <p style="color: #5E72E4"> Procesador: ${{ $product->price }} </p>
                    <p style="color: #5E72E4"> Detalles: ${{ $product->price }} </p>
                </div>
                <center>
                    <div>
                        <button style="background-color: #5E72E4; color:#FFFFFF; width:175.36px; height:40px"
                            type="button" class="btn" wire:click="addToCart('{{ $product->slug }}')">Añadir al carrito</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
</div>