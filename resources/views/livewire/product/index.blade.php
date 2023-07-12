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
          height="600px" width="100%" background-color="rgba(0,0,0,0.8)" alt="..." class="img-fluid"
          alt="Responsive image">
      </div>
      <div class="carousel-item">
        <img
          src="https://www.pcworld.com/wp-content/uploads/2023/04/IMG_20190615_214330.jpg?quality=50&strip=all&w=1024"
          height="600px" width="100%" background-color="rgba(0,0,0,0.8)" class="d-block w-100" alt="..."
          class="img-fluid" alt="Responsive image">
      </div>
      <div class="carousel-item">
        <img src="https://image.coolblue.be/1248x535/content/e111e2396926a48e16264f916113e07f" height="600px"
          width="100%" background-color="rgba(0,0,0,0.8)" class="d-block w-100" alt="..." class="img-fluid"
          alt="Responsive image">
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="menu">

            <li>
              <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button"
                  style="border-inline-color: #ffffff; border-block-color: #ffffff; color:#5E72E4"
                  data-bs-toggle="dropdown" aria-expanded="false" style="color: #5E72E4">
                  Categoria
                </button>
                <ul class="dropdown-menu " style="background-color: #5E72E4; color:#FFFFFF">
                  <li style="width: 6rem; text-align: left"><a class="dropdown-item"
                      style="color: #ffffff; background-color: #5E72E4;" href="#">Celulares</a></li>
                  <li style="width: 6rem; text-align: left"><a class="dropdown-item"
                      style="color: #ffffff ; background-color: #5E72E4" href="#">Computadoras</a></li>
                  <li style="width: 6rem; text-align: left"><a class="dropdown-item"
                      style="color: #ffffff ; background-color: #5E72E4" href="#">TV</a></li>
                  <li style="width: 6rem; text-align: left"><a class="dropdown-item"
                      style="color: #ffffff ; background-color: #5E72E4" href="#">Tennis</a></li>
                  <li style="width: 6rem; text-align: left"><a class="dropdown-item"
                      style="color: #ffffff ; background-color: #5E72E4" href="#">Zapatos</a></li>
                  <li style="width: 6rem; text-align: left"><a class="dropdown-item"
                      style="color: #ffffff ; background-color: #5E72E4" href="#">Botines</a></li>
                </ul>
              </div>
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
        /* margin: auto;
                padding: 10px; */
        color: #5E72E4;
      }

      .menu li a {
        text-decoration: none;
        color: #5E72E4;
        padding: 5px;
        display: block;
      }

      .menu li {
        display: inline-block;
        text-align: center;
      }

      .menu li a:hover {
        background: #FFFFFF;
        font-weight: bold;
      }

      hr {
        margin: 0;
      }
    </style>

  </div>

  <hr>
  </br>



  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          @foreach ($products as $product )
          <div class="col-sm-4 mb-2">
            <div class="card" style="width:353.24" ; height="198.69">

                <a href="{{route('products.show',['product'=>$product->slug]) }}" style="background-color: #f4ebeb">
                  <span>
                     <center>
                      <img src="{{asset('storage/producto/pc.jpg')}}" 
                      alt="Card image cap" height="198.69"
                      width="353.24"   class="rounded" style="background-color: #f4ebeb"
                       class="img-fluid" alt="Responsive image">
                     </center>
                  </span>
                  {{-- <img class="card-img-top" src="{{ asset('storage/producto' .$product->thumbnail )}}"
                      alt="Card image cap"> --}}
              </a>
    

              <center>
                <div class="card-body" style="background-color: #f4ebeb">
                  <h5 class="card-title font-weight-bold">${{ $product->price }}<sup>00</sup></h5>

                  <p><span>12x $ 10.75 sin interés</span></p>

                  <div>
                    <button style="background-color: #5E72E4; color:#FFFFFF; width:175.36px; height:40px" class="btn"
                      wire:click="addToCart('{{ $product->slug }}')">Add to cart</button>
                  </div>

                  </br>

                </div>
              </center>
            </div>
          </div>
          @endforeach
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


    @include('livewire.detalleproducto')
  </div>
</div>

@section('javascript')

{{-- AGREGANDO MODAL --}}
{{-- <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script>
  document.addEventListener('DOMContentLoaded', function(){

  window.livewire.on('verProductoverProducto', () => {
    $('#detalleProducto').modal('show');
});
});

</script> --}}



@endsection