<div class="flew flex-wrap my-5 my-5 sm:mx-20 border-2 rounded-lg bg-white text-blue-800">
    <div class="w-full px-8">
        <div class="lg:flex justify-between ">
            <h2 class="font-bold text-xl md:text-2xl my-5">Solo un paso más, por favor verifico tu método de pago</h2>
            <h2 class="font-bold text-xl md:text-2xl lg:ml-10 my-5">Importe: $ 3.99</h2>
        </div>
        <ul class="flex border-b lg:mx-56">

            <li class="-mb-px mr-1">
                <a class="bg-white inline-block border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" href="#">
                    Tarjeta de crédito y/o débito
                </a>
            </li>

            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="{{url('/paypal/pay') }}">
                    Paypal
                </a>
            </li>
        </ul>

        <div class="flex my-5">
            <div class="m-auto flex flex-wrap">
                <img src="{{asset('/img/pagos.webp')}}" class="h-12">
                {{--<img src="/img/paypal.png" class="h-12">--}}
            </div>
        </div>
    </div>
    <form class="flex w-full"...>
</div>