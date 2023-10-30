<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Product;
use App\Models\FavouriteProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
class HomeService{
    public function index()
    {
        $featured_categories=Category::with('FeaturedCategory')->get();
        $all_products=Product::all();
        $best_seller=Product::where('selling_count','>',10)->get();
        $most_viewed=Product::where('item_view_count','>',10)->get();
        if(Auth::user()){
            $favourite_count=FavouriteProduct::where('user_id',Auth::user()->id)->count();
            if($favourite_count > 0) {
                session(['favourite_count' => $favourite_count]);
            }
        
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        return view('index',compact('featured_categories','all_products','best_seller','most_viewed','cart'));
    }
        // session()->forget('cart');
        // dd($cart);
        return view('index',compact('featured_categories','all_products','best_seller','most_viewed'));
        
    }
    public function about()
    {
        if(Auth::user()){
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        return view('other.about',compact('cart'));}
        else{
            return view('other.about');
        }
    }
    public function shop()
    {
        if(Auth::user()){
            $cart = Cart::with('product')
            ->where('user_id',Auth::user()->id)->get();
        return view('other.shop',compact('cart'));}
        else{
            return view('other.shop');
        }
    }
    public function contact()
    {
        if(Auth::user()){
            $cart = Cart::with('product')
            ->where('user_id',Auth::user()->id)->get();
        return view('other.contact',compact('cart'));}
        else{
            return view('other.contact');
        }
    }
    public function wishlist()
    {
        if(Auth::user()){
        $favourite_products=FavouriteProduct::with('products')->where('user_id',Auth::user()->id)->get();
        $cart = Cart::with('product')
            ->where('user_id',Auth::user()->id)->get();
        return view('account.wishlist',compact('cart','favourite_products'));
        }
    }
    public function add_wishlist($id)
    {
        $exist=FavouriteProduct::where('product_id',$id)->where('user_id',Auth::user()->id)->count();
        if($exist > 0) {
            return redirect()->back()->with('message', 'Product already added to wishlist');
        }
        $favourite_product = new FavouriteProduct();
        $favourite_product->user_id = Auth::user()->id;
        $favourite_product->product_id = $id;
        $favourite_product->save();
        return redirect()->back()->with('message', 'Product added to wishlist successfully');
    }
    public function delete_wishlist($id)
    {
        $favourite_product=FavouriteProduct::where('product_id',$id)->where('user_id',Auth::user()->id)->first();
        $favourite_product->delete();
        if(session('favourite_count') > 0){
            $favourite_count = session('favourite_count') - 1;
            session(['favourite_count' => $favourite_count]);
        }
        return redirect()->back()->with('message', 'Product deleted from wishlist successfully');
    }
    
}