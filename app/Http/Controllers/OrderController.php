<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FavouriteProduct;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orderDetail()
    {
       
        // $cart = session('cart', []);
        $cart = session('cart', []);
        $favourite_products=FavouriteProduct::with('products')->where('user_id',Auth::user()->id)->get();
        return view('order', compact('cart', 'favourite_products'));
    }
}