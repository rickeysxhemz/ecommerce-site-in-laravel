@include('includes.layout')
<body>
@include('includes.header',['cart' => $cart])   
@include('includes.leftsidebar')
    <main class="main">
      <section class="section-box">
        <div class="banner-hero banner-1">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="box-swiper">
                  <div class="swiper-container swiper-group-1">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="banner-big bg-11" style="background-image: url(assets/imgs/page/homepage1/banner.png)"><span class="font-sm text-uppercase">Hot Right Now</span>
                          <h2 class="mt-10">Sale Up to 50% Off</h2>
                          <h1>Mobile Devices</h1>
                          <div class="row">
                            <div class="col-lg-5 col-md-7 col-sm-12">
                              <p class="font-sm color-brand-3">Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.</p>
                            </div>
                          </div>
                          <div class="mt-30"><a class="btn btn-brand-2" href="{{route('shop')}}">Shop now</a><a class="btn btn-link" href="{{route('shop')}}">Learn more</a></div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="banner-big bg-11-2" style="background-image: url(assets/imgs/page/homepage1/banner-hero-2.png)"><span class="font-sm text-uppercase">Trending Now</span>
                          <h2 class="mt-10">Big Sale 25%</h2>
                          <h1>Laptop & PC</h1>
                          <div class="row">
                            <div class="col-lg-5 col-md-7 col-sm-12">
                              <p class="font-sm color-brand-3">Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.</p>
                            </div>
                          </div>
                          <div class="mt-30"><a class="btn btn-brand-2" href="{{route('shop')}}">Shop now</a><a class="btn btn-link" href="{{route('shop')}}">Learn more</a></div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="banner-big bg-11-3" style="background-image: url(assets/imgs/page/homepage1/banner-hero-3.png)"><span class="font-sm text-uppercase">Top Sale This Month</span>
                          <h2 class="mt-10">Hot Collection</h2>
                          <h1>Virtual glasses</h1>
                          <div class="row">
                            <div class="col-lg-5 col-md-7 col-sm-12">
                              <p class="font-sm color-brand-3">Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.</p>
                            </div>
                          </div>
                          <div class="mt-30"><a class="btn btn-brand-2" href="{{route('shop')}}">Shop now</a><a class="btn btn-link" href="{{route('shop')}}">Learn more</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="banner-small banner-small-1 bg-13"><span class="color-danger text-uppercase font-sm-lh32">10%<span class="color-brand-3">Sale Off</span></span>
                      <h4 class="mb-10">Apple Watch Serial 7</h4>
                      <p class="color-brand-3 font-desc">Don&apos;t miss the last<br class="d-none d-lg-block"> opportunity.</p>
                      <div class="mt-20"><a class="btn btn-brand-3 btn-arrow-right" href="{{route('shop')}}">Shop now</a></div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="banner-small banner-small-2 bg-14"><span class="color-danger text-uppercase font-sm-lh32">LATEST COLLECTION</span>
                      <h4 class="mb-10">Apple Devices &amp; Software</h4>
                      <p class="color-brand-3 font-md">Don&apos;t miss the last<br class="d-none d-lg-block"> opportunity.</p>
                      <div class="mt-20"><a class="btn btn-brand-2 btn-arrow-right" href="{{route('shop')}}">Shop now</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <h3>Featured Categories</h3>
              <p class="font-base">Choose your necessary products from this feature categories.</p>
            </div>
            <div class="col-lg-7">
              <div class="list-brands">
                <div class="box-swiper">
                  <div class="swiper-container swiper-group-7">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/acer.svg" alt="Ecom"></a></div>
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/nokia.svg" alt="Ecom"></a></div>
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/assus.svg" alt="Ecom"></a></div>
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/casio.svg" alt="Ecom"></a></div>
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/dell.svg" alt="Ecom"></a></div>
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/panasonic.svg" alt="Ecom"></a></div>
                      <div class="swiper-slide"><a href="{{route('shop')}}"><img src="assets/imgs/slider/logo/vaio.svg" alt="Ecom"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-50">
            <div class="row">
              @foreach ($featured_categories as $category)
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card-grid-style-2 card-grid-style-2-small hover-up">
                  <div class="image-box"><a href="{{route('shop')}}"><img src="http://127.0.0.1:8000/{{$category->image}}" alt="Ecom"></a></div>
                  <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{route('shop')}}">
                      <h6>{{$category->name}}</h6></a>

                    <ul class="list-links-disc">
                      @foreach($category->FeaturedCategory as $featured_category)
                      <li><a class="font-sm" href="{{route('shop')}}">{{$featured_category->name}}</a></li>
                      @endforeach
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <section class="section-box pt-50">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
              <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow" href="{{route('shop')}}">learn more</a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
              <div class="bg-4 block-samsung"><span class="color-brand-3 font-sm-lh32">New Arrivals</span>
                <h3 class="font-xl mb-10">Samsung 2022 Led TV</h3>
                <p class="font-base color-brand-3 mb-20">Special Sale</p><a class="btn btn-brand-2 btn-arrow-right" href="{{route('shop')}}">learn more</a>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
              <div class="bg-6 block-drone">
                <h3 class="font-33 mb-20">Drone Quadcopter UAV - DJI Air 2S</h3>
                <div class="mb-30"><strong class="font-18">Gimbal Camera, 5.4K Video</strong></div><a class="btn btn-brand-2 btn-arrow-right" href="{{route('shop')}}">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box pt-50">
        <div class="container">
          <div class="head-main">
            <div class="row">
              <div class="col-xl-7 col-lg-6">
                <h3 class="mb-5">Best Sellers</h3>
                <p class="font-base color-gray-500">Special products in this month.</p>
              </div>
              <div class="col-xl-5 col-lg-6">
                <ul class="nav nav-tabs" role="tablist">
                  <li><a class="active" href="#tab-all" data-bs-toggle="tab" role="tab" aria-controls="tab-all" aria-selected="true">All</a></li>
                  <li><a href="#tab-bestseller" data-bs-toggle="tab" role="tab" aria-controls="tab-bestseller" aria-selected="true">Best seller</a></li>
                  <li><a href="#tab-mostviewed" data-bs-toggle="tab" role="tab" aria-controls="tab-mostviewed" aria-selected="true">Most viewed</a></li>
                  <li><a href="#tab-topbrands" data-bs-toggle="tab" role="tab" aria-controls="tab-topbrands" aria-selected="true">Top Brands</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="tab-all" role="tabpanel" aria-labelledby="tab-all">
              <div class="list-products-5">
                @foreach($all_products as $product)
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">{{$product->title}}</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                      @if(auth()->check())
                      <div class="mt-20 box-btn-cart">
                          <form method="POST" action="{{ route('cart.add') }}">
                              @csrf
                              <input type="hidden" name="id" value="{{ $product->id }}">
                              <button type="submit" class="btn btn-cart">Add To Cart</button>
                          </form>
                      </div>
                      @else
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{route('login')}}">Add To Cart</a></div>
                      @endif
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
            
              </div>
            </div>
            <div class="tab-pane fade" id="tab-bestseller" role="tabpanel" aria-labelledby="tab-bestseller">
            
            <div class="list-products-5">
            @foreach($best_seller as $best_seller)  
              <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">{{$best_seller->title}}</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      @if(auth()->check())
                      <div class="mt-20 box-btn-cart">
                          <form method="POST" action="{{ route('cart.add') }}">
                              @csrf
                              <input type="hidden" name="id" value="{{ $best_seller->id }}">
                              <button type="submit" class="btn btn-cart">Add To Cart</button>
                          </form>
                      </div>
                      @else
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{route('login')}}">Add To Cart</a></div>
                      @endif
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
               
              </div>
            </div>
            <div class="tab-pane fade" id="tab-mostviewed" role="tabpanel" aria-labelledby="tab-mostviewed">
              <div class="list-products-5">
              @foreach($most_viewed as $most_viewed)
              <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">{{$most_viewed->title}}</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      @if(auth()->check())
                      <div class="mt-20 box-btn-cart">
                          <form method="POST" action="{{ route('cart.add') }}">
                              @csrf
                              <input type="hidden" name="id" value="{{ $most_viewed->id }}">
                              <button type="submit" class="btn btn-cart">Add To Cart</button>
                          </form>
                      </div>
                      @else
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{route('login')}}">Add To Cart</a></div>
                      @endif
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
               
              </div>
            </div>
            <div class="tab-pane fade" id="tab-topbrands" role="tabpanel" aria-labelledby="tab-topbrands">
              <div class="list-products-5">
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Kami Tech</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$156.3</strong><span class="color-gray-500 price-line">$250.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Philips</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$154.0.3</strong><span class="color-gray-500 price-line">$162.5</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$530.3</strong><span class="color-gray-500 price-line">$560.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box pt-50">
        <div class="container">
          <div class="head-main bd-gray-200">
            <div class="row">
              <div class="col-lg-6">
                <h3 class="mb-5">Latest Deals</h3>
                <p class="font-base color-gray-500">Special products in this month.</p>
              </div>
              <div class="col-lg-6 text-end">
                <div class="box-all-hurry">
                  <div class="d-inline-block box-text-hurryup"><span class="font-md-bold color-gray-900">Hurry up!</span><br><span class="font-xs color-gray-500">Offers end in:</span></div>
                  <div class="box-count box-count-square hide-period">
                    <div class="deals-countdown" data-countdown="2023/08/25 00:00:00"></div>
                  </div><a class="btn btn-view-all font-md-bold" href="shop-single-product.html">View All</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card-grid-style-3 hover-show hurry-up">
                <div class="card-grid-inner">
                  <div class="tools"><a class="btn btn-trend mb-10" href="shop-single-product.html"></a><a class="btn btn-wishlist mb-10" href="shop-single-product.html"></a><a class="btn btn-compare mb-10" href="shop-single-product.html"></a><a class="btn btn-quickview" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div><span class="label"><span class="font-lg-bold color-white">Hurry Up!</span></span>
                  <div class="image-box">
                    <div class="box-swiper">
                      <div class="swiper-container swiper-group-1">
                        <div class="swiper-wrapper pt-5">
                          <div class="swiper-slide"><img src="assets/imgs/page/homepage1/screen.png" alt="Ecom"></div>
                          <div class="swiper-slide"><img src="assets/imgs/page/homepage1/screen-2.png" alt="Ecom"></div>
                          <div class="swiper-slide"><img src="assets/imgs/page/homepage1/screen-3.png" alt="Ecom"></div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10 mb-15">
                    <h4>Special Offer</h4>
                    <p class="font-base color-gray-500">Remains until the end of the offer</p>
                  </div>
                  <div class="box-count box-count-square">
                    <div class="deals-countdown" data-countdown="2023/08/25 00:00:00"></div>
                  </div>
                  <div class="divide"></div>
                  <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">
                      <h5>2022 Apple iMac Retina 5K Display</h5></a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                    <div class="price-info">
                      <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3225.6</span>
                    </div>
                    <div class="box-progress">
                      <div class="progress-bar">
                        <div class="progress-bar-inner"></div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                      </div>
                    </div>
                    <div class="divide"></div>
                    <ul class="list-features">
                      <li> 27-inch (diagonal) Retina 5K display</li>
                      <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                      <li>AMD Radeon Pro 5300 graphics</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a>
                      </div>
                      <div class="info-right"><span class="font-xs color-gray-500">Samsung</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Samsung 30-100 inches The Freestyle FHD HDR Smart Projector</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li> 27-inch (diagonal) Retina 5K display</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a>
                      </div>
                      <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Lenovo Legion 5i 15.6&quot; Laptop, Intel Core i5-10500H</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li> 27-inch (diagonal) Retina 5K display</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a>
                      </div>
                      <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple AirPods Pro with MagSafe Charging Case</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li> 27-inch (diagonal) Retina 5K display</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a>
                      </div>
                      <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Razer Power Up Gaming Bundle V2 - Cynosa Lite, Gigantus</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li> 27-inch (diagonal) Retina 5K display</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a>
                      </div>
                      <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">ASUS ROG Strix GL10 Gaming Desktop, AMD Ryzen 5-3600X</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li> 27-inch (diagonal) Retina 5K display</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a>
                      </div>
                      <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Fujifilm INSTAX Mini Link 2 Smartphone Printer Exclusive</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li> 27-inch (diagonal) Retina 5K display</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="list-products-5">
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Klipsch ProMedia 2.1 Bluetooth Computer Speakers</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                  <ul class="list-features">
                    <li> 27-inch (diagonal) Retina 5K display</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple TV HD 32GB (2nd Generation) (Latest Model)</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                  <ul class="list-features">
                    <li> 27-inch (diagonal) Retina 5K display</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Hisense 40&quot; Class 2K FHD LED LCD Roku Smart TV H4030F</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                  <ul class="list-features">
                    <li> 27-inch (diagonal) Retina 5K display</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple 10.9-inch iPad Air Wi-Fi 64GB - Space Gray</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                  <ul class="list-features">
                    <li> 27-inch (diagonal) Retina 5K display</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">LeapFrog LeapPad Academy Kids Tablet with LeapFrog</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                  <ul class="list-features">
                    <li> 27-inch (diagonal) Retina 5K display</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
              <div class="banner-2 bg-xbox"><span class="color-danger text-uppercase">Flat 20% off</span>
                <h3 class="font-30">Microsoft</h3>
                <h4 class="font-59">Xbox</h4>
                <h5 class="font-55 mb-15">Series S</h5><span class="font-16">From $3500.00</span>
                <div class="mt-25"><a class="btn btn-brand-2 btn-arrow-right" href="shop-fullwidth.html">Shop Now</a></div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-12">
              <div class="image-gallery">
                <div class="image-big">
                  <div class="banner-img-left bg-controller">
                    <h3 class="font-33 mb-10">Xbox Core Wireless Controller</h3>
                    <p class="font-18">Aqua Shift Special Edition</p>
                    <div class="mt-25"><a class="btn btn-info btn-arrow-right" href="shop-fullwidth.html">Shop Now</a></div>
                  </div>
                </div>
                <div class="image-small">
                  <div class="bg-metaverse">
                    <h3 class="mb-10 font-32">Metaverse</h3>
                    <p class="font-16">The Future of<br class="d-none d-lg-block"> Creativity</p>
                    <div class="mt-15"><a class="btn btn-link-brand-2 btn-arrow-brand-2" href="shop-fullwidth.html">learn more</a></div>
                  </div>
                </div>
              </div>
              <div class="image-gallery">
                <div class="image-small">
                  <div class="bg-electronic">
                    <h3 class="font-32">Electronic</h3>
                    <p class="font-16 color-brand-3">Hot devices, Latest trending</p>
                  </div>
                </div>
                <div class="image-big">
                  <div class="bg-phone">
                    <h3 class="font-33 mb-15">Super discount for your first purchase</h3>
                    <p class="font-18">Use discount code in checkout page.</p>
                    <div class="mt-25"><a class="btn btn-brand-2 btn-arrow-right" href="shop-fullwidth.html">Shop Now</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box bg-gray-50 pt-50 pb-50 mt-50">
        <div class="container">
          <div class="head-main bd-gray-200">
            <div class="row">
              <div class="col-xl-7 col-lg-6">
                <h3 class="mb-5">Trending This Week</h3>
                <p class="font-base color-gray-500">Special products in this month.</p>
              </div>
              <div class="col-xl-5 col-lg-6">
                <ul class="nav nav-tabs" role="tablist">
                  <li><a class="active" href="#tab-2-all" data-bs-toggle="tab" role="tab" aria-controls="tab-2-all" aria-selected="true">All</a></li>
                  <li><a href="#tab-2-bestseller" data-bs-toggle="tab" role="tab" aria-controls="tab-2-bestseller" aria-selected="true">Best seller</a></li>
                  <li><a href="#tab-2-mostviewed" data-bs-toggle="tab" role="tab" aria-controls="tab-2-mostviewed" aria-selected="true">Most viewed</a></li>
                  <li><a href="#tab-2-topbrands" data-bs-toggle="tab" role="tab" aria-controls="tab-2-topbrands" aria-selected="true">Top Brands</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="tab-2-all" role="tabpanel" aria-labelledby="tab-2-all">
              <div class="list-products-5">
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Philips</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$154.0.3</strong><span class="color-gray-500 price-line">$162.5</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$530.3</strong><span class="color-gray-500 price-line">$560.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Kami Tech</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$156.3</strong><span class="color-gray-500 price-line">$250.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-2-bestseller" role="tabpanel" aria-labelledby="tab-2-bestseller">
              <div class="list-products-5">
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$530.3</strong><span class="color-gray-500 price-line">$560.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Kami Tech</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$156.3</strong><span class="color-gray-500 price-line">$250.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Philips</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$154.0.3</strong><span class="color-gray-500 price-line">$162.5</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-2-mostviewed" role="tabpanel" aria-labelledby="tab-2-mostviewed">
              <div class="list-products-5">
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$530.3</strong><span class="color-gray-500 price-line">$560.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Philips</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$154.0.3</strong><span class="color-gray-500 price-line">$162.5</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Kami Tech</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$156.3</strong><span class="color-gray-500 price-line">$250.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-2-topbrands" role="tabpanel" aria-labelledby="tab-2-topbrands">
              <div class="list-products-5">
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Kami Tech</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$156.3</strong><span class="color-gray-500 price-line">$250.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Philips</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$154.0.3</strong><span class="color-gray-500 price-line">$162.5</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2325.3</strong><span class="color-gray-500 price-line">$2225.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-grid-style-3">
                  <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                      <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                      <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$530.3</strong><span class="color-gray-500 price-line">$560.6</span></div>
                      <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                      <ul class="list-features">
                        <li>27-inch (diagonal) Retina 5K display</li>
                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                        <li>AMD Radeon Pro 5300 graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="head-main">
                <h3 class="mb-5">Top Selling Products</h3>
                <p class="font-base color-gray-500">Special products in this month.</p>
                <div class="box-button-slider">
                  <div class="swiper-button-next swiper-button-next-group-1"></div>
                  <div class="swiper-button-prev swiper-button-prev-group-1"></div>
                </div>
              </div>
              <div class="box-swiper">
                <div class="swiper-container swiper-group-1">
                  <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Philips</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Kami Tech</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Philips</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Philips H4205 On-Ear Wireless Headphones with 32mm</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Apple Watch Series 8 [GPS 45mm] Smart Watch</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Kami Tech</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Kami by YI 4pc 1080p Home Security Cameras</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-style-2">
                            <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="banner-right text-center"><span class="text-no">No.9</span>
                <h5 class="text-main mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint
                </h5>
                <p class="text-desc mt-15">Smooth handle and accurate click</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="head-main">
            <h3 class="mb-5">Latest News &amp; Events</h3>
            <p class="font-base color-gray-500">From our blog, forum</p>
            <div class="box-button-slider">
              <div class="swiper-button-next swiper-button-next-group-4"></div>
              <div class="swiper-button-prev swiper-button-prev-group-4"></div>
            </div>
          </div>
        </div>
        <div class="container mt-10">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-4">
              <div class="swiper-wrapper pt-5">
                <div class="swiper-slide">
                  <div class="card-grid-style-1">
                    <div class="image-box"><a href="blog-single-2.html"></a><img src="assets/imgs/page/blog/blog-1.jpg" alt="Ecom"></div><a class="tag-dot font-xs" href="blog-list.html">Technology</a><a class="color-gray-1100" href="blog-single-2.html">
                      <h4>The latest technologies to be used for VR in 2022</h4></a>
                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">September 02, 2022</span><span class="color-gray-500 font-xs">4<span> Mins read</span></span></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card-grid-style-1">
                    <div class="image-box"><a href="blog-single.html"></a><img src="assets/imgs/page/blog/blog-2.jpg" alt="Ecom"></div><a class="tag-dot font-xs" href="blog-list.html">Technology</a><a class="color-gray-1100" href="blog-single.html">
                      <h4>How can Web 3.0 Bring Changes to the Gaming?</h4></a>
                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span class="color-gray-500 font-xs">5<span> Mins read</span></span></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card-grid-style-1">
                    <div class="image-box"><a href="blog-single-3.html"></a><img src="assets/imgs/page/blog/blog-3.jpg" alt="Ecom"></div><a class="tag-dot font-xs" href="blog-list.html">Gaming</a><a class="color-gray-1100" href="blog-single-3.html">
                      <h4>NFT Blockchain Games That Might Take Off</h4></a>
                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 25, 2022</span><span class="color-gray-500 font-xs">3<span> Mins read</span></span></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card-grid-style-1">
                    <div class="image-box"><a href="blog-single-2.html"></a><img src="assets/imgs/page/blog/blog-4.jpg" alt="Ecom"></div><a class="tag-dot font-xs" href="blog-list.html">Blockchain</a><a class="color-gray-1100" href="blog-single-2.html">
                      <h4>Blockchain Gaming And Its Three Challenges</h4></a>
                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 15, 2022</span><span class="color-gray-500 font-xs">7<span> Mins read</span></span></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card-grid-style-1">
                    <div class="image-box"><a href="blog-single-2.html"></a><img src="assets/imgs/page/blog/blog-5.jpg" alt="Ecom"></div><a class="tag-dot font-xs" href="blog-list.html">Development</a><a class="color-gray-1100" href="blog-single-2.html">
                      <h4>HTML5 – The Future of Mobile App Development</h4></a>
                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 12, 2022</span><span class="color-gray-500 font-xs">9<span> Mins read</span></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-90 mb-50">
        <div class="container">
          <ul class="list-col-5">
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/delivery.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                  <p class="font-sm color-gray-500">From all orders over $10</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/support.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                  <p class="font-sm color-gray-500">Shop with an expert</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/voucher.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                  <p class="font-sm color-gray-500">Refer a friend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/return.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                  <p class="font-sm color-gray-500">Free return over $200</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/secure.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                  <p class="font-sm color-gray-500">100% Protected</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section-box box-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
              <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
              <p class="font-lg color-white">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="box-form-newsletter mt-15">
                <form class="form-newsletter">
                  <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                  <button class="btn btn-brand-2">Sign Up</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
          <div class="modal-content apply-job-form">
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-30">
              <div class="row">
                <div class="col-lg-6">
                  <div class="gallery-image">
                    <div class="galleries-2">
                      <div class="detail-gallery">
                        <div class="product-image-slider-2">
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></figure>
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></figure>
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></figure>
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></figure>
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></figure>
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></figure>
                          <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></figure>
                        </div>
                      </div>
                      <div class="slider-nav-thumbnails-2">
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></div>
                        </div>
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></div>
                        </div>
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></div>
                        </div>
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></div>
                        </div>
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></div>
                        </div>
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></div>
                        </div>
                        <div>
                          <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-tags">
                    <div class="d-inline-block mr-25"><span class="font-sm font-medium color-gray-900">Category:</span><a class="link" href="#">Smartphones</a></div>
                    <div class="d-inline-block"><span class="font-sm font-medium color-gray-900">Tags:</span><a class="link" href="#">Blue</a>,<a class="link" href="#">Smartphone</a></div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="product-info">
                    <h5 class="mb-15">SAMSUNG Galaxy S22 Ultra, 8K Camera & Video, Brightest Display Screen, S Pen Pro</h5>
                    <div class="info-by"><span class="bytext color-gray-500 font-xs font-medium">by</span><a class="byAUthor color-gray-900 font-xs font-medium" href="shop-vendor-list.html"> Ecom Tech</a>
                      <div class="rating d-inline-block"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65 reviews)</span></div>
                    </div>
                    <div class="border-bottom pt-10 mb-20"></div>
                    <div class="box-product-price">
                      <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3><span class="color-gray-500 price-line font-xl line-througt">$3225.6</span>
                    </div>
                    <div class="product-description mt-10 color-gray-900">
                      <ul class="list-dot">
                        <li>8k super steady video</li>
                        <li>Nightography plus portait mode</li>
                        <li>50mp photo resolution plus bright display</li>
                        <li>Adaptive color contrast</li>
                        <li>premium design & craftmanship</li>
                        <li>Long lasting battery plus fast charging</li>
                      </ul>
                    </div>
                    <div class="box-product-color mt-10">
                      <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span></p>
                      <ul class="list-colors">
                        <li class="disabled"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="Ecom" title="Pink"></li>
                        <li><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="Ecom" title="Gold"></li>
                        <li><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="Ecom" title="Pink Gold"></li>
                        <li><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="Ecom" title="Silver"></li>
                        <li class="active"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="Ecom" title="Pink Gold"></li>
                        <li class="disabled"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="Ecom" title="Black"></li>
                        <li class="disabled"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="Ecom" title="Red"></li>
                      </ul>
                    </div>
                    <div class="box-product-style-size mt-10">
                      <div class="row">
                        <div class="col-lg-12 mb-10">
                          <p class="font-sm color-gray-900">Style:<span class="color-brand-2 nameStyle">S22</span></p>
                          <ul class="list-styles">
                            <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                            <li class="active" title="S22">S22</li>
                            <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                          </ul>
                        </div>
                        <div class="col-lg-12 mb-10">
                          <p class="font-sm color-gray-900">Size:<span class="color-brand-2 nameSize">512GB</span></p>
                          <ul class="list-sizes">
                            <li class="disabled" title="1GB">1GB</li>
                            <li class="active" title="512 GB">512 GB</li>
                            <li title="256 GB">256 GB</li>
                            <li title="128 GB">128 GB</li>
                            <li class="disabled" title="64GB">64GB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="buy-product mt-5">
                      <p class="font-sm mb-10">Quantity</p>
                      <div class="box-quantity">
                        <div class="input-quantity">
                          <input class="font-xl color-brand-3" type="text" value="1"><span class="minus-cart"></span><span class="plus-cart"></span>
                        </div>
                        <div class="button-buy"><a class="btn btn-cart" href="shop-cart.html">Add to cart</a><a class="btn btn-buy" href="shop-checkout.html">Buy now</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @include('includes.footer')
    <script>
        // Toastr options
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "rtl": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "500",
            "timeOut": "2000",
            "extendedTimeOut": "500",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
        };
        @if(Session::has('message'))
            toastr.success("{{ Session::get('message') }}");
        @endif
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
  </body>
</html>