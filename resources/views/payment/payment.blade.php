@include('includes.layout')
  <body>
  @include('includes.header')
   @include('includes.leftsidebar')
    <main class="main">
      <section class="section-box shop-template mt-60">
        <div class="container">
          <div class="row mb-100">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
           
                        @php
                        $total = 0;
                        @endphp
                @foreach ($cart as $item)
                            @php
                            $itemTotal = $item['price'] * $item['quantity']; 
                            $total += $itemTotal;
                            @endphp
                @endforeach
            
    <h3>Payment Method</h3>
    <!-- <p class="font-md color-gray-500">Access to all features. No credit card required.</p> -->
    <form method="POST" action="{{ route('paymentSuccess') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51O6AuDIRfdT0jn8QnWgrdM6LeixpXeCdeyYq91mxZlPTizBgErNKUgdQDa35JNuzaNR33leGFsdGbg6LURkCiZkg00sEyTSBJd"
                       >
        @csrf <!-- Add the CSRF token -->

        <div class="form-register mt-30 mb-30">
        <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Total Price($)</label>
                <input class="form-control" type="text" name="price" value="{{$total}}" readonly>
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Full Name *</label>
                <input class="form-control" type="text" name="name" placeholder="Steven Job">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Card Number *</label>
                <input class="form-control card-number" type="tel" name="card_number" maxlength="19" placeholder="XXXXXXXXXXXXXXXXXX">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">CVV *</label>
                <input class="form-control card-cvc" type="text" name="cvv" maxlength="3" placeholder="123">
            </div>
            <div class="form-group">
                
                <input class="form-control" type="hidden" name="order_id" value="{{ request('order_id') }}">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Month *</label>
                <input class="form-control card-expiry-month" type="text" name="month" maxlength="2" placeholder="12">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Year *</label>
                <input class="form-control card-expiry-year" type="text" name="year" maxlength="4" placeholder="2023">
            </div>
            <!-- <div class="form-group">
                <label>
                    <input class="checkagree" type="checkbox" name="agree">By clicking Register button, you agree to our terms and policy.
                </label>
            </div> -->
            <div class="form-group">
                <input class="font-md-bold btn btn-buy" type="submit" value="Pay-Now">
            </div>
            <!-- <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Already have an account?</span><a class="font-xs color-brand-3 font-medium" href="{{ route('login') }}"> Sign In</a></div> -->
        </div>
    </form>
</div>

            
          </div>
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
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
    <script type="text/javascript">
      
    $(function() {
      
        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/
        
        var $form = $(".require-validation");
         
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
        
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
              }
            });
         
            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
              }, stripeResponseHandler);
            }
        
        });
          
        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                     
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
         
    });
    </script>
  </body>
</html>