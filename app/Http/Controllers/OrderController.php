<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FavouriteProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\OrderProduct;
use App\Models\Order;
class OrderController extends Controller
{
    public function orderDetail()
    {
       
        // $cart = session('cart', []);
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        $favourite_products=FavouriteProduct::with('products')->where('user_id',Auth::user()->id)->get();
        $delivery_in_progress = Order::with(['orderProducts'])
        ->whereIn('order_status', ['delivery_in_progress', 'delivered', 'cancel'])
        ->where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->get();
        
        return view('order', compact('cart', 'favourite_products','delivery_in_progress'));
    }
    function singleOrder($order_id) {
        $order_detail = Order::with(['orderProducts'])->where('status', 'paid')->where('id', $order_id)->get();
        $products = $order_detail[0]['products']; 
        $cart = [];
        return view('payment.order', compact('cart', 'order_detail', 'products'))->with('message', 'order get successful');
    }
}