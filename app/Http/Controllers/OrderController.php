<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FavouriteProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\OrderProduct;
class OrderController extends Controller
{
    public function orderDetail()
    {
       
        // $cart = session('cart', []);
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        $favourite_products=FavouriteProduct::with('products')->where('user_id',Auth::user()->id)->get();
        $delivery_in_progress = OrderProduct::with(['product:id,title,buyBoxPrice', 'order:id,order_no,order_status'])
        ->whereHas('order', function ($query) {
            $query->where('order_status', 'delivery_in_progress');
        })
        ->where('user_id', Auth::user()->id)
        ->get();
        $delivered = OrderProduct::with(['product:id,title,buyBoxPrice', 'order:id,order_no,order_status'])
        ->whereHas('order', function ($query) {
            $query->where('order_status', 'delivered');
        })
        ->where('user_id', Auth::user()->id)
        ->get();
        $cancel = OrderProduct::with(['product:id,title,buyBoxPrice', 'order:id,order_no,order_status'])
        ->whereHas('order', function ($query) {
            $query->where('order_status', 'cancel');
        })
        ->where('user_id', Auth::user()->id)
        ->get();
        

        return view('order', compact('cart', 'favourite_products','delivery_in_progress','delivered','cancel'));
    }
}