<?php

namespace App\Http\Middleware;

use App\CartManager;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $cart = app(CartManager::class);

        if(is_null($cart->getCart()) || $cart->getCart()->amount() == 0)
            return redirect('/');

        return $next($request);
    }
}
