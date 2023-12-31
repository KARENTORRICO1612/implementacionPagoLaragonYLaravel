<h1>Hola {{ $order->name }}</h1>

<h2>Confirmación de productos</h2>

<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($order->shoppingCart->products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
            </tr>
        @endforeach

        <tr>
            <th></th>
            <td class="font-weight-bold">Total</td>
            <td class="font-weight-bold">{{ $order->total }}</td>
        </tr>
    </tbody>
</table>