<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <p>Nuevo - 3042 vendidos</p>
            <h2>{{ $product->name }}</h2>

            <h1 class="mt-3">${{ $product->price }} <sup>00</sup></h1>

            <div class="text-right">
                <button class="btn btn-outline-primary" wire:click="addToCart('{{ $product->slug }}')">Add to cart</button>
            </div>
        </div>
    </div>
</div>
