<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add_to_cart(Request $reqeust)
    {
        $product=Product::find($reqeust->id);
        $cart = session()->get('cart', []);
        if (array_key_exists($product->id, $cart)) {
            
            $cart[$product->id]['quantity'] += 1;
        
        } else {
            
            $cart[$product->id] = [
                'name' => $product->title,
                'quantity' => 1,
                'price' => $product->buyBoxPrice,
                'photo' => $product->imagesCSV,
            ];
        }
    
        session(['cart' => $cart]);
            return redirect()->back()->with('message','Product added to cart successfully!');
       
    }
}
