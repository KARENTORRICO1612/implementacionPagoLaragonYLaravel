 
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
                <img src="https://www.kreedon.com/wp-content/uploads/2022/10/high-gaming-pc.jpg" class="d-block w-100"
                    height="800px" width="100%" background-color="rgba(0,0,0,0.8)" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.pcworld.com/wp-content/uploads/2023/04/IMG_20190615_214330.jpg?quality=50&strip=all&w=1024"
                    height="300px" width="100%" background-color="rgba(0,0,0,0.8)" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://image.coolblue.be/1248x535/content/e111e2396926a48e16264f916113e07f" height="300px"
                    width="100%" background-color="rgba(0,0,0,0.8)" class="d-block w-100" alt="...">
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


    {{-- INICIO DE MENU BAR DE SECCIONES --}}
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="menu">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Categoria</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Novedades</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Oferta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Marcas</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    
    <div>

        <style>
            .menu {
                list-style: none;
                background-color: #FFFFFF;
                width: 100%;
                max-width: 1200px;
                margin: auto;
                padding: 10px;
                color: #5E72E4;
            }

            .menu li a {
                text-decoration: none;
                color: #5E72E4;
                 padding: 5px;
                display: block;
            }

            .menu li{
            display: inline-block;
         text-align: center;
        }

        .menu li a:hover{
        background: #FFFFFF;
        font-weight: bold;
        }
        </style>

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