<!DOCTYPE html>
<html lang="en">

  <head>
    @include('layouts.head')
  </head>

  <body class="theme-color4 light ltr">
    @include('layouts.header')

    @yield('content')

    <div id="qvmodal"></div>

    @if (!Auth::check() || Auth::user()->role != 'admin')
      @include('layouts.footer')
    @endif

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
                    <img src="{{ asset('storage/images/fashion/instagram/4.jpg') }}" class="img-fluid blur-up lazyload"
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
                                <img src="{{ asset('storage/images/fashion/product/front/1.jpg') }}"
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
                                <img src="{{ asset('storage/images/fashion/product/front/2.jpg') }}"
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
                                <img src="{{ asset('assets/images/fashion/product/front/3.jpg') }}"
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
                                <img src="{{ asset('storage/images/fashion/product/front/4.jpg') }}"
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

    @include('layouts.scripts')

  </body>

</html>
