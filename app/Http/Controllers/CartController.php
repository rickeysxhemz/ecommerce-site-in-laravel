<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        return view('account.cart', compact('cart'));
    }
    public function add_to_cart(Request $request)
    {
        $product=Cart::where('product_id',$request->id)->where('user_id',Auth::user()->id)->count();
        if($product > 0) {
            $cart=Cart::where('product_id',$request->id)->where('user_id',Auth::user()->id)->first();
            $cart->quantity=$cart->quantity+1;
            $cart->save();
            return redirect()->back()->with('message', 'Product quantity updated');
        }else
        {
        $cart =new Cart();
        $cart->product_id = $request->id;
        $cart->user_id = Auth::user()->id;
        $cart->quantity = 1;
        $cart->price=$request->price;
        $cart->save();            
        return redirect()->back()->with('message','Product added to cart successfully!');
        }
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
    public function updateQuantity(Request $request)
    {
        // Retrieve the product ID and quantity from the request
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');
        // dd($productId);
        $cart = Cart::where('product_id',$productId)->where('user_id',Auth::user()->id)->first();
        $cart->quantity=$quantity;
        $cart->save();
        // Get the cart
        $cart =Cart::where('product_id',$productId)->where('user_id',Auth::user()->id)->first();
        // Calculate the new item total and new cart total
        $newItemTotal = $cart->price * $quantity;
        $newTotal = Cart::where('user_id',Auth::user()->id)->sum(DB::raw('price * quantity'));
        // dd($newTotal);
        // Return the response


        return response()->json([
            'itemTotal' => $newItemTotal, // Calculate the new item total
            'total' => $newTotal, // Calculate the new total cart value
            'productId' => $productId, // Return the product ID
        ]);
    }

}
