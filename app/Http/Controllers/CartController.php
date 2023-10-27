<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session('cart', []);
        return view('account.cart', compact('cart'));
    }
    public function add_to_cart(Request $reqeust)
    {
        $product=Product::find($reqeust->id);
        $cart = session()->get('cart', []);
        if (array_key_exists($product->id, $cart)) {
            
            $cart[$product->id]['quantity'] += 1;
        
        } else {
            
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->title,
                'quantity' => 1,
                'price' => $product->buyBoxPrice,
                'photo' => $product->imagesCSV,
            ];
        }
    
        session(['cart' => $cart]);
            return redirect()->back()->with('message','Product added to cart successfully!');
       
    }
    public function update_cart(Request $request)
    {
       
            if ($request->has('cart')) {
                $cart = session()->get('cart', []);
            
                foreach ($request->input('cart') as $index => $item) {
                    if (array_key_exists($index, $cart)) {
                        $cart[$index]['quantity'] = $item['quantity'];
                    }
                }
                session()->put('cart', $cart);
                session()->flash('message', 'Cart updated successfully');
            }            
            else{
                session()->flash('error', 'Cart not updated successfully');
            }
           
       
    }
    public function remove_from_cart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart', []);
            if (array_key_exists($request->id, $cart)) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                // session()->flash('message', 'Product removed successfully');
                return redirect()->back()->with('message','Product removed successfully!');
            }
        }
    }
}
