<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Product;
use App\Models\FavouriteProduct;
use Illuminate\Support\Facades\Auth;
class HomeService{
    public function index()
    {
        $featured_categories=Category::with('FeaturedCategory')->get();
        $all_products=Product::all();
        $best_seller=Product::where('selling_count','>',10)->get();
        $most_viewed=Product::where('item_view_count','>',10)->get();
        $favourite_count=FavouriteProduct::where('user_id',Auth::user()->id)->count();
        if($favourite_count > 0) {
            session(['favourite_count' => $favourite_count]);
        }
        $cart = session('cart', []);
        // session()->forget('cart');
        // dd($cart);
        return view('index',compact('featured_categories','all_products','best_seller','most_viewed','cart'));
    }
    public function about()
    {
        return view('other.about');
    }
    public function shop()
    {
        return view('other.shop');
    }
    public function contact()
    {
        return view('other.contact');
    }
    public function wishlist()
    {
        $favourite_products=FavouriteProduct::with('products')->where('user_id',Auth::user()->id)->get();
        // dd($favourite_products);
        $cart = session('cart', []);
        return view('account.wishlist',compact('cart','favourite_products'));
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
        return redirect()->back()->with('message', 'Product deleted from wishlist successfully');
    }
    
}