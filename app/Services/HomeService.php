<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Product;

class HomeService{
    public function index()
    {
        $featured_categories=Category::with('FeaturedCategory')->get();
        $best_seller=Product::where('selling_count','>',10)->get();
        // dd($best_seller);
        return view('index',compact('featured_categories'));
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