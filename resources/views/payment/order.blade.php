@include('includes.layout')
<body>
@include('includes.header')   
@include('includes.leftsidebar')
    <main class="main">
      <div class="section-box">
        <div class="breadcrumbs-div">
          <div class="container">
            <ul class="breadcrumb">
              <li><a class="font-xs color-gray-1000" href="index.html">Home</a></li>
              <li><a class="font-xs color-gray-500" href="shop-grid.html">Shop</a></li>
              <li><a class="font-xs color-gray-500" href="shop-cart.html">Checkout</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section-box shop-template">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="box-border">
              <div class="box-payment"><a class="btn btn-gpay"><img src="{{ env('COMMON_PATH')}}/assets/imgs/page/checkout/stripe.png" alt="Ecom"></a></div>
                <div class="border-bottom-4 text-center mb-20">
                  <div class="text-or font-md color-gray-500">Or</div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-sm-6 mb-20">
                    <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Contact information</h5>
                  </div>
                  <!-- <div class="col-lg-6 col-sm-6 mb-20 text-sm-end text-center"><span class="font-sm color-brand-3">Already have an account?</span><a class="font-sm color-brand-1" href="page-login.html"> Login</a></div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" placeholder="Email*">
                    </div>
                  </div> -->
                  <div class="col-lg-12">
                    <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Shipping address</h5>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" id="first_name" value="{{$order_detail[0]['first_name']}}" placeholder="First name*" readonly>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" id="last_name" value="{{$order_detail[0]['last_name']}}" placeholder="Last name*" readonly>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" id="address_1" value="{{$order_detail[0]['address_1']}}" placeholder="Address 1*" readonly>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" id="address_2" value="{{$order_detail[0]['address_2']}}" placeholder="Address 2*" readonly>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" id="city" value="{{$order_detail[0]['city']}}" placeholder="City*" readonly>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" id="phone" value="{{$order_detail[0]['phone']}}" placeholder="Phone*" readonly>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-0">
                      <textarea class="form-control font-sm" placeholder="Additional Information" id="info"  rows="5" readonly>{{$order_detail[0]['description']}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-border">
                <h5 class="font-md-bold mb-20">Your Order</h5>
                <div class="listCheckout">
                    @php
                    $total = 0;
                  @endphp
                @foreach($products as $product)
                  <div class="item-wishlist">
                    <div class="wishlist-product">
                      <div class="product-wishlist">
                        <div class="product-image"><a href="shop-single-product.html"><img src="{{ env('COMMON_PATH')}}/{{$product['url']}}" alt="Ecom"></a></div>
                        <div class="product-info"><a href="shop-single-product.html">
                            <h6 class="color-brand-3">{{$product['title']}}</h6></a>
                          <div class="rating"><img src="{{ env('COMMON_PATH')}}/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="{{ env('COMMON_PATH')}}/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="{{ env('COMMON_PATH')}}/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="{{ env('COMMON_PATH')}}/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="{{ env('COMMON_PATH')}}/assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="wishlist-status">
                      <h5 class="color-gray-500">x{{$product->pivot->quantity}}</h5>
                    </div>
                    <div class="wishlist-price">
                      <h4 class="color-brand-3 font-lg-bold">${{$product->pivot->quantity * $product['buyBoxPrice']}}</h4>
                    </div>
                  </div>
                  @php
                  $amount = $product->pivot->quantity * $product['buyBoxPrice'];
                   $total = $total + $amount;
                  @endphp
                @endforeach
                </div>
               
                <div class="form-group mb-0">
                  <div class="row mb-10">
                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Subtotal</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">${{$total}}</span></div>
                  </div>
                  <div class="border-bottom mb-10 pb-5">
                    <div class="row">
                      <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Shipping</span></div>
                      <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">-</span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Total</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">${{$total}}</span></div>
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
                <div class="icon-left"><img src="../assets/imgs/template/delivery.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                  <p class="font-sm color-gray-500">From all orders over $10</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="../assets/imgs/template/support.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                  <p class="font-sm color-gray-500">Shop with an expert</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="../assets/imgs/template/voucher.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                  <p class="font-sm color-gray-500">Refer a friend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="../assets/imgs/template/return.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                  <p class="font-sm color-gray-500">Free return over $200</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="../assets/imgs/template/secure.svg" alt="Ecom"></div>
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
      <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
          <div class="modal-content apply-job-form">
            <div class="modal-header">
              <h5 class="modal-title color-gray-1000 filters-icon">Addvance Fillters</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-30">
              <div class="row">
                <div class="col-w-1">
                  <h6 class="color-gray-900 mb-0">Brands</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">Apple</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Samsung</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Baseus</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Remax</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Handtown</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Elecom</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Razer</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Auto Focus</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Nillkin</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Logitech</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">ChromeBook</span><span class="checkmark"></span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-w-1">
                  <h6 class="color-gray-900 mb-0">Special offers</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">On sale</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">FREE shipping</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Big deals</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Shop Mall</span><span class="checkmark"></span>
                      </label>
                    </li>
                  </ul>
                  <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">1 business day</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">1&ndash;3 business days</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">in 1 week</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Shipping now</span><span class="checkmark"></span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-w-1">
                  <h6 class="color-gray-900 mb-0">Ordering options</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Accepts gift cards</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Customizable</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">Can be gift-wrapped</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Installment 0%</span><span class="checkmark"></span>
                      </label>
                    </li>
                  </ul>
                  <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                  <ul class="list-checkbox">
                    <li class="mb-5"><a href="#"><img src="../assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5 stars)</span></a></li>
                    <li class="mb-5"><a href="#"><img src="../assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4 stars)</span></a></li>
                    <li class="mb-5"><a href="#"><img src="../assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3 stars)</span></a></li>
                    <li class="mb-5"><a href="#"><img src="../assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2 stars)</span></a></li>
                    <li class="mb-5"><a href="#"><img src="../assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1 star)</span></a></li>
                  </ul>
                </div>
                <div class="col-w-2">
                  <h6 class="color-gray-900 mb-0">Material</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Nylon (8)</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Tempered Glass (5)</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">Liquid Silicone Rubber (5)</span><span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Aluminium Alloy (3)</span><span class="checkmark"></span>
                      </label>
                    </li>
                  </ul>
                  <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                  <div><a class="btn btn-border mr-5" href="#">Games</a><a class="btn btn-border mr-5" href="#">Electronics</a><a class="btn btn-border mr-5" href="#">Video</a><a class="btn btn-border mr-5" href="#">Cellphone</a><a class="btn btn-border mr-5" href="#">Indoor</a><a class="btn btn-border mr-5" href="#">VGA Card</a><a class="btn btn-border mr-5" href="#">USB</a><a class="btn btn-border mr-5" href="#">Lightning</a><a class="btn btn-border mr-5" href="#">Camera</a></div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto" href="#">Apply Fillter</a><a class="btn font-sm-bold color-gray-500" href="#">Reset Fillter</a></div>
          </div>
        </div>
      </div>
    </main>
    @include('includes.footer')
    <script>
$(document).ready(function() {
 
  $("#place_order").click(function(e) {
    e.preventDefault();
    
    const first_name=$("#first_name").val();
    const last_name=$("#last_name").val();
    const address_1=$("#address_1").val();
    const address_2=$("#address_2").val();
    const city=$("#city").val();
    const zip=$("#zip").val();
    const phone=$("#phone").val();
    const info=$("#info").val();
    // const checkboxOffer=$("#checkboxOffers").val();
    const csrfToken = $('meta[name="csrf-token"]').attr('content');
    const formData = {
            _token: csrfToken,
            first_name: first_name,
            last_name: last_name,
            address_1: address_1,
            address_2: address_2,
            city: city,
            zip: zip,
            phone: phone,
            info: info
        };
    $.ajax({
      url: "/checkout/place-order",
      type: "POST",
      data: formData,
      success: function(response) {
        var order_id = response.order_id;
        window.location.href = "/checkout/payment?order_id=" + order_id;
      },
      error: function(xhr, status, error) {
        // console.log(formData)
        console.error("Error updating cart: " + error);
      }
    });
  });
});
</script>
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
        @if(isset($success))
            toastr.success("{{$success}}");
        @endif    
    </script>
  </body>
</html>