<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Product;

class HomeService{
    public function index()
    {
        $featured_categories=Category::with('FeaturedCategory')->get();
        $all_products=Product::all();
        $best_seller=Product::where('selling_count','>',10)->get();
        $most_viewed=Product::where('item_view_count','>',10)->get();
        return view('index',compact('featured_categories','all_products','best_seller','most_viewed'));
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
    
}