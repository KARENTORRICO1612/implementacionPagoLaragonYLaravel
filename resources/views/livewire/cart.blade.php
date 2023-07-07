<div class="d-flex align-items-center">
   <span  class="badge badge-primary">{{ $cart->amount()}}</span>

   <a class="nav-link" href="{{ route('checkout') }}"><i class="fa-regular fa fa-shopping-cart" style="color: #ffffff"  style="font-size: 10px;" aria-hidden="true"></i></a>
</div>

{{-- <i class="fa-regular fa-cart-shopping" style="color: #4079ce;"></i> --}}