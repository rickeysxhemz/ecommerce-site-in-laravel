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
    
}
