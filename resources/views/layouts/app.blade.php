<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>@yield('title') | {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="theme-color4 light ltr">
    @include('layouts.header')

    @yield('content')

    <div id="qvmodal"></div>

    @if (!Auth::check() || Auth::user()->role != 'admin')
      @include('layouts.footer')
    @endif

    <div class="modal fade newletter-modal" id="newsletter">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <img src="{{ asset('storage/img/newletter-icon.png') }}" class="img-fluid blur-up lazyload" alt="">
            <div class="modal-title">
              <h2 class="tt-title">Sign up for our Newsletter!</h2>
              <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
              <p class="font-light">Oh, and it's free!</p>

              <div class="input-group mb-3">
                <input placeholder="Email" class="form-control" type="text">
              </div>

              <div class="cancel-button text-center">
                <button class="btn default-theme w-100" data-bs-dismiss="modal" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="modal-contain">
              <div>
                <div class="modal-messages">
                  <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                  you cart.
                </div>
                <div class="modal-product">
                  <div class="modal-contain-img">
                    <img src="{{ asset('storage/img/fashion/instagram/4.jpg') }}" class="img-fluid blur-up lazyload"
                      alt="">
                  </div>
                  <div class="modal-contain-details">
                    <h4>Premier Cropped Skinny Jean</h4>
                    <p class="font-light my-2">Yellow, Qty : 3</p>
                    <div class="product-total">
                      <h5>TOTAL : <span>$1,140.00</span></h5>
                    </div>
                    <div class="shop-cart-button mt-3">
                      <a href="shop-left-sidebar.php"
                        class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                        SHOPPING</a>
                      <a href="cart.php"
                        class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                        CART</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="ratio_asos mt-4">
              <div class="container">
                <div class="row m-0">
                  <div class="col-sm-12 p-0">
                    <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                      <div>
                        <div class="product-box">
                          <div class="img-wrapper">
                            <div class="front">
                              <a href="product/details.html">
                                <img src="{{ asset('storage/img/fashion/product/front/1.jpg') }}"
                                  class="bg-img blur-up lazyload" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="product-details text-center">
                            <div class="rating-details d-block text-center">
                              <span class="font-light grid-content">B&Y Jacket</span>
                            </div>
                            <div class="main-price mt-0 d-block text-center">
                              <h3 class="theme-color">$78.00</h3>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="product-box">
                          <div class="img-wrapper">
                            <div class="front">
                              <a href="product/details.html">
                                <img src="{{ asset('storage/img/fashion/product/front/2.jpg') }}"
                                  class="bg-img blur-up lazyload" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="product-details text-center">
                            <div class="rating-details d-block text-center">
                              <span class="font-light grid-content">B&Y Jacket</span>
                            </div>
                            <div class="main-price mt-0 d-block text-center">
                              <h3 class="theme-color">$78.00</h3>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="product-box">
                          <div class="img-wrapper">
                            <div class="front">
                              <a href="product/details.html">
                                <img src="{{ asset('storage/img/fashion/product/front/3.jpg') }}"
                                  class="bg-img blur-up lazyload" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="product-details text-center">
                            <div class="rating-details d-block text-center">
                              <span class="font-light grid-content">B&Y Jacket</span>
                            </div>
                            <div class="main-price mt-0 d-block text-center">
                              <h3 class="theme-color">$78.00</h3>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="product-box">
                          <div class="img-wrapper">
                            <div class="front">
                              <a href="product/details.html">
                                <img src="{{ asset('storage/img/fashion/product/front/4.jpg') }}"
                                  class="bg-img blur-up lazyload" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="product-details text-center">
                            <div class="rating-details d-block text-center">
                              <span class="font-light grid-content">B&Y Jacket</span>
                            </div>
                            <div class="main-price mt-0 d-block text-center">
                              <h3 class="theme-color">$78.00</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tap-to-top">
      <a href="#home">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <div class="bg-overlay"></div>

  </body>

</html>
