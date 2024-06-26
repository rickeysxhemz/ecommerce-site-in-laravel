<div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img class="mb-10" src="{{asset('assets/imgs/template/favicon.svg')}}" alt="Ecom">
            <div class="preloader-dots"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="topbar">
      <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
          <ul class="nav-small">
            <li><a class="font-xs" href="page-about-us.html">About Us</a></li>
            @if(auth()->check())
                <li><a class="font-xs" href="{{ route('logout') }}">Logout</a></li>
            @else
                <li><a class="font-xs" href="{{ route('login') }}">Login</a></li>
                <li><a class="font-xs" href="{{ route('register') }}">Register</a></li>
            @endif
          </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3">Free shipping for all orders over</span><span class="font-sm-bold color-success"> $75.00</span></div>
        <div class="menu-topbar-right"><span class="font-xs color-brand-3">Need help? Call Us:</span><span class="font-sm-bold color-success"> + 1800 900</span>
          <div class="dropdown dropdown-language">
            <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static"><span class="dropdown-right font-xs color-brand-3"><img src="{{asset('assets/imgs/template/en.svg')}}" alt="Ecom"> English</span></button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
              <li><a class="dropdown-item" href="#"><img src="{{asset('assets/imgs/template/flag-en.svg')}}" alt="Ecom"> English</a></li>
              <li><a class="dropdown-item" href="#"><img src="{{asset('assets/imgs/template/flag-fr.svg')}}" alt="Ecom"> Français</a></li>
              <li><a class="dropdown-item" href="#"><img src="{{asset('assets/imgs/template/flag-es.svg')}}" alt="Ecom"> Español</a></li>
              <li><a class="dropdown-item" href="#"><img src="{{asset('assets/imgs/template/flag-pt.svg')}}" alt="Ecom"> Português</a></li>
              <li><a class="dropdown-item" href="#"><img src="{{asset('assets/imgs/template/flag-cn.svg')}}" alt="Ecom"> 中国人</a></li>
            </ul>
          </div>
          <div class="dropdown dropdown-language">
            <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static"><span class="dropdown-right font-xs color-brand-3">USD</span></button>
            <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2" data-bs-popper="static">
              <li><a class="dropdown-item active" href="#">USD</a></li>
              <li><a class="dropdown-item" href="#">EUR</a></li>
              <li><a class="dropdown-item" href="#">AUD</a></li>
              <li><a class="dropdown-item" href="#">SGP</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="index.html"><img alt="Ecom" src="{{asset('assets/imgs/template/logo.svg')}}"></a></div>
            <div class="header-search">
              <div class="box-header-search">
                <form class="form-search" method="post" action="#">
                  <div class="box-category">
                    <select class="select-active select2-hidden-accessible">
                      <option>All categories</option>
                      <option value="Computers Accessories">Computers Accessories</option>
                      <option value="Cell Phones">Cell Phones</option>
                      <option value="Gaming Gatgets">Gaming Gatgets</option>
                      <option value="Smart watches">Smart watches</option>
                      <option value="Wired Headphone">Wired Headphone</option>
                      <option value="Mouse &amp; Keyboard">Mouse Keyboard</option>
                      <option value="Headphone">Headphone</option>
                      <option value="Bluetooth devices">Bluetooth devices</option>
                      <option value="Cloud Software">Cloud Software</option>
                    </select>
                  </div>
                  <div class="box-keysearch">
                    <input class="form-control font-xs" type="text" value="" placeholder="Search for items">
                  </div>
                </form>
              </div>
            </div>
            <div class="header-nav">
              <nav class="nav-main-menu d-none d-xl-block">
                <ul class="main-menu">
                  <li><a href="{{route('home')}}">Home</a></li>  
              
                  <li><a href="{{route('about')}}">About</a></li>
                  <li><a href="{{route('shop')}}">Shop</a></li>
                  <li class="has-children"><a href="shop-vendor-list.html">Vendors</a>
                    <ul class="sub-menu">
                      <li><a href="shop-vendor-list.html">Vendors Listing</a></li>
                      <li><a href="shop-vendor-single.html">Vendor Single</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="blog.html">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="blog.html">Blog - No Sidebar</a></li>
                      <li><a href="blog-2.html">Blog - Right Sidebar</a></li>
                      <li><a href="blog-list.html">Blog List</a></li>
                      <li><a href="blog-big.html">Blog category big</a></li>
                      <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                      <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                      <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
              </nav>
              <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
          @if(auth()->check())
            <div class="header-shop">
              <div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-account"><span>Account</span></span>
                <div class="dropdown-account">
                  <ul>
                    <li><a href="{{route('order.detail')}}">My Orders</a></li>
                    <li><a href="{{ route('logout') }}">Sign out</a></li>
                  </ul>
                </div>
              </div><a class="font-lg icon-list icon-wishlist" href="{{route('wishlist')}}"><span>Wishlist</span>
              @if(session()->has('favourite_count'))
                  <span class="number-item font-xs">{{ session('favourite_count') }}</span>
              @endif
            </a>
              <div class="d-inline-block box-dropdown-cart "><span class="font-lg icon-list icon-cart"><span>Cart</span><span class="number-item font-xs cart-count">
              @php
                $i=0;
              @endphp
              @foreach ($cart as $item)
              @php
                $i++;
              @endphp
              @endforeach
              {{$i}}  
            </span></span>
                <div class="dropdown-cart">
                      
                        @php
                        $total = 0;
                        @endphp

                        @foreach ($cart as $item)
                            @php
                            $itemTotal = $item->price * $item->quantity; 
                            $total += $itemTotal;
                            @endphp

                            <div class="item-cart mb-20">
                                  @foreach($item->product as $product)
                                  <div class="cart-image"><img src="{{ env('COMMON_PATH')}}/{{$product->url}}" alt="Ecom"></div>
                                   <div class="cart-info">
                                    <a class="font-sm-bold color-brand-3" href="shop-single-product.html">{{ $product->title }}</a>
                                  @endforeach
                                    <p><span class="color-brand-2 font-sm-bold">{{ $item->quantity }} x ${{ $item->price }}</span></p>
                                </div>
                            </div>
                        @endforeach
                        <div class="add-cart"></div>

                        <div class="border-bottom pt-0 mb-15"></div>
                        <div class="cart-total">
                            <div class="row">
                                <div class="col-6 text-start"><span class="font-md-bold color-brand-3">Total</span></div>
                                <div class="col-6"><span class="font-md-bold color-brand-1 total_amount">${{ number_format($total, 2) }}</span></div>
                            </div>
                            <div class="row mt-15">
                                <div class="col-6 text-start"><a class="btn btn-cart w-auto" href="{{route('cart')}}">View cart</a></div>
                                <div class="col-6"><a class="btn btn-buy w-auto" href="{{route('checkoutPage')}}">Checkout</a></div>
                            </div>
                        </div>
                    

              <!-- </div><a class="font-lg icon-list icon-compare" href="shop-compare.html"><span>Compare</span></a> -->
            </div>
         
           </div>
          @endif
        </div>
      </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="mobile-logo"><a class="d-flex" href="index.html"><img alt="Ecom" src="{{asset('assets/imgs/template/logo.svg')}}"></a></div>
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
              <nav class="mt-15">
                <ul class="mobile-menu font-heading">
                  <li class="has-children"><a class="active" href="index.html">Home</a>
                    <ul class="sub-menu">
                      <li><a href="index.html">Homepage - 1</a></li>
                      <li><a href="index-2.html">Homepage - 2</a></li>
                      <li><a href="index-3.html">Homepage - 3</a></li>
                      <li><a href="index-4.html">Homepage - 4</a></li>
                      <li><a href="index-5.html">Homepage - 5</a></li>
                      <li><a href="index-6.html">Homepage - 6</a></li>
                      <li><a href="index-7.html">Homepage - 7</a></li>
                      <li><a href="index-8.html">Homepage - 8</a></li>
                      <li><a href="index-9.html">Homepage - 9</a></li>
                      <li><a href="index-10.html">Homepage - 10</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="shop-grid.html">Shop</a>
                    <ul class="sub-menu">
                      <li><a href="shop-grid.html">Shop Grid</a></li>
                      <li><a href="shop-grid-2.html">Shop Grid 2</a></li>
                      <li><a href="shop-list.html">Shop List</a></li>
                      <li><a href="shop-list-2.html">Shop List 2</a></li>
                      <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                      <li><a href="shop-single-product.html">Single Product</a></li>
                      <li><a href="shop-single-product-2.html">Single Product 2</a></li>
                      <li><a href="shop-single-product-3.html">Single Product 3</a></li>
                      <li><a href="shop-single-product-4.html">Single Product 4</a></li>
                      <li><a href="shop-cart.html">Shop Cart</a></li>
                      <li><a href="shop-checkout.html">Shop Checkout</a></li>
                      <li><a href="shop-compare.html">Shop Compare</a></li>
                      <li><a href="shop-wishlist.html">Shop Wishlist</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="shop-vendor-list.html">Vendors</a>
                    <ul class="sub-menu">
                      <li><a href="shop-vendor-list.html">Vendors Listing</a></li>
                      <li><a href="shop-vendor-single.html">Vendor Single</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Pages</a>
                    <ul class="sub-menu">
                      <li><a href="page-about-us.html">About Us</a></li>
                      <li><a href="page-contact.html">Contact Us</a></li>
                      <li><a href="page-careers.html">Careers</a></li>
                      <li><a href="page-term.html">Term and Condition</a></li>
                      <li><a href="page-register.html">Register</a></li>
                      <li><a href="page-login.html">Login</a></li>
                      <li><a href="page-404.html">Error 404</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="blog.html">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="blog.html">Blog Grid</a></li>
                      <li><a href="blog-2.html">Blog Grid 2</a></li>
                      <li><a href="blog-list.html">Blog List</a></li>
                      <li><a href="blog-big.html">Blog Big</a></li>
                      <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                      <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                      <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="page-contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <div class="mobile-header-top">
                <div class="user-account"><a href="page-account.html"><img src="{{asset('assets/imgs/template/ava_1.png')}}" alt="Ecom"></a>
                  <div class="content">
                    <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                    <p class="font-xs text-muted">You have 3 new messages</p>
                  </div>
                </div>
              </div>
              <ul class="mobile-menu">
                <li><a href="page-account.html">My Account</a></li>
                <li><a href="page-account.html">Order Tracking</a></li>
                <li><a href="page-account.html">My Orders</a></li>
                <li><a href="page-account.html">My Wishlist</a></li>
                <li><a href="page-account.html">Setting</a></li>
                <li><a href="page-login.html">Sign out</a></li>
              </ul>
            </div>
            <div class="mobile-banner">
              <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow" href="shop-grid.html">learn more</a>
              </div>
            </div>
            <div class="site-copyright color-gray-400 mt-30">Copyright 2022 &copy; Ecom - Marketplace Template.<br>Designed by<a href="http://alithemes.com" target="_blank">&nbsp; AliThemes</a></div>
          </div>
        </div>
      </div>
    </div>