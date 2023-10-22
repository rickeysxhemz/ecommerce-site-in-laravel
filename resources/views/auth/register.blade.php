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
    <h3>Create an account</h3>
    <p class="font-md color-gray-500">Access to all features. No credit card required.</p>
    <form method="POST" action="{{ route('register-submit') }}">
        @csrf <!-- Add the CSRF token -->

        <div class="form-register mt-30 mb-30">
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Full Name *</label>
                <input class="form-control" type="text" name="name" placeholder="Steven Job">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Email *</label>
                <input class="form-control" type="email" name="email" placeholder="stevenjob@gmail.com">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Phone *</label>
                <input class="form-control" type="text" name="phone" placeholder="1234567890">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Address *</label>
                <input class="form-control" type="text" name="address" placeholder="123 Main St">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Password *</label>
                <input class="form-control" type="password" name="password" placeholder="******************">
            </div>
            <div class="form-group">
                <label class="mb-5 font-sm color-gray-700">Re-Password *</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="******************">
            </div>
            <div class="form-group">
                <label>
                    <input class="checkagree" type="checkbox" name="agree">By clicking Register button, you agree to our terms and policy.
                </label>
            </div>
            <div class="form-group">
                <input class="font-md-bold btn btn-buy" type="submit" value="Sign Up">
            </div>
            <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Already have an account?</span><a class="font-xs color-brand-3 font-medium" href="{{ route('login') }}"> Sign In</a></div>
        </div>
    </form>
</div>

            <div class="col-lg-5">
              <div class="box-login-social pt-65 pl-50">
                <h5 class="text-center">Use Social Network Account</h5>
                <div class="box-button-login mt-25"><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<img src="{{asset('assets/imgs/page/account/google.svg')}}" alt="Ecom"></a><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<span class="color-blue font-md-bold">Facebook</span></a><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<img src="{{asset('assets/imgs/page/account/amazon.svg')}}" alt="Ecom"></a></div>
                <div class="mt-10 text-center"><span class="font-xs color-gray-900">Buying for work?</span><a class="color-brand-1 font-xs" href="#">Create a free business account</a></div>
              </div>
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
  </body>
</html>