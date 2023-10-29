<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeService;

class HomeController extends Controller
{
    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }
    public function index()
    {
        return $this->homeService->index();
    }
    public function about()
    {
        return $this->homeService->about();
    }
    public function shop()
    {
        return $this->homeService->shop();
    }
    public function contact()
    {
        return $this->homeService->contact();
    }
    public function wishlist()
    {
        return $this->homeService->wishlist();
    }
    public function add_wishlist($id)
    {
        return $this->homeService->add_wishlist($id);
    }
    public function delete_wishlist($id)
    {
        return $this->homeService->delete_wishlist($id);
    }
}
