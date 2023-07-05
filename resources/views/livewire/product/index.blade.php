<div>

    @if(session()->has('message'))

    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" arria-label="Close">

            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif

    {{-- AÑADIENDO CARRUSEL --}}
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.kreedon.com/wp-content/uploads/2022/10/high-gaming-pc.jpg" class="d-block w-100" height="800px" width="100%"
                background-color="rgba(0,0,0,0.8)"  
                alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.pcworld.com/wp-content/uploads/2023/04/IMG_20190615_214330.jpg?quality=50&strip=all&w=1024" height="800px" width="100%"
                background-color="rgba(0,0,0,0.8)"    
                class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://image.coolblue.be/1248x535/content/e111e2396926a48e16264f916113e07f"  height="800px" width="100%"
                background-color="rgba(0,0,0,0.8)"
                class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- FIN DEL CARRUSEL --}}
    </br>
    <div>
    <a href="https://www.google.com">  Categoria | </a>
    <a href="https://es.shein.com/new/-sc-00200200.html">Novedades | </a>
    <a href="https://www.amazon.com/-/es/gp/goldbox"> Ofertas | </a>
    <a href="https://www.marca.com/">Marcas </a>
  </div>
    </br>

    <div class="row">
        @foreach ($products as $product )
        <div class="col-sm-4 mb-2">
            <div class="card" style="width: 18rem;">
                <a href="{{route('products.show',['product'=>$product->slug]) }}">
                    <span>
                        <img src="{{asset('storage/' .$product->thumbnail)}}" alt="Card image cap" height="70"
                            width="80" class="rounded">
                    </span>
                    {{-- <img class="card-img-top" src="{{ asset('storage/producto' .$product->thumbnail )}}"
                        alt="Card image cap"> --}}
                </a>
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">${{ $product->price }}<sup>00</sup></h5>

                    <p><span>12x $ 10.75 sin interés</span></p>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-primary" wire:click="addToCart('{{ $product->slug }}')">Add to
                            cart</button>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>