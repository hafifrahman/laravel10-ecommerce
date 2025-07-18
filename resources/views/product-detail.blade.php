@extends('layouts.app')
@section('title', 'Detail Produk')
@section('content')
  <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>Produk</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Shop Section start -->
  <section>
    <div class="container">
      <div class="row gx-4 gy-5">
        <div class="col-lg-12 col-12">
          <div class="details-items">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="details-image-1 ratio_asos">
                  <div>
                    <img src="{{ asset('storage/img/product/' . $product->image) }}"
                      class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="{{ $product->name }}">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="cloth-details-size">
                  {{-- <div class="product-count">
                    <ul>
                      <li>
                        <img src="{{ asset('storage/img/gif/fire.gif') }}" class="img-fluid blur-up lazyload"
                          alt="image">
                        <span class="p-counter">37</span>
                        <span class="lang">orders in last 24 hours</span>
                      </li>
                      <li>
                        <img src="{{ asset('storage/img/gif/person.gif') }}" class="img-fluid user_img blur-up lazyload"
                          alt="image">
                        <span class="p-counter">44</span>
                        <span class="lang">active view this</span>
                      </li>
                    </ul>
                  </div> --}}

                  <div class="details-image-concept">
                    <h2>{{ $product->name }}</h2>
                  </div>

                  {{-- <div class="label-section">
                    <span class="badge badge-grey-color">#1 Best seller</span>
                    <span class="label-text">in fashion</span>
                  </div> --}}

                  <h3 class="price-detail">
                    Rp.{{ $product->price }}
                  </h3>

                  <div id="selectSize" class="addeffect-section product-description border-product">

                    <h6 class="product-title product-title-2 d-block">quantity</h6>

                    <div class="qty-box">
                      <div class="input-group">
                        <span class="input-group-prepend">
                          <button type="button" class="btn quantity-left-minus" onclick="updateQuantity()"
                            data-type="minus" data-field="">
                            <i class="fas fa-minus"></i>
                          </button>
                        </span>
                        <input type="text" name="quantity" id="quantity" class="form-control input-number"
                          value="1">
                        <span class="input-group-prepend">
                          <button type="button" class="btn quantity-right-plus" onclick="updateQuantity()"
                            data-type="plus" data-field="">
                            <i class="fas fa-plus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="product-buttons">
                    <a href="javascript:void(0)" class="btn btn-solid">
                      <i class="fa fa-bookmark fz-16 me-2"></i>
                      <span>Wishlist</span>
                    </a>
                    <button type="button" id="cartEffect" data-product-id="{{ $product->id }}"
                      class="btn btn-solid hover-solid btn-animation addtocart-btn">
                      <i class="fa fa-shopping-cart"></i>
                      <span>Add To Cart</span>
                    </button>
                  </div>

                  {{-- <ul class="product-count shipping-order">
                    <li>
                      <img src="{{ asset('storage/img/gif/truck.png') }}" class="img-fluid blur-up lazyload"
                        alt="image">
                      <span class="lang">Free shipping for orders above $500 USD</span>
                    </li>
                  </ul> --}}

                  <div class="mt-2 mt-md-3 border-product">
                    <h6 class="product-title hurry-title d-block">
                      Stock : {{ $product->stock > 0 ? 'Ada' : 'Kosong' }}
                    </h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                    </div>
                    <div class="font-light timer-5">
                      <h5>Order in the next to get</h5>
                      <ul class="timer1">
                        <li class="counter">
                          <h5 id="days">&#9251;</h5> Days :
                        </li>
                        <li class="counter">
                          <h5 id="hours">&#9251;</h5> Hour :
                        </li>
                        <li class="counter">
                          <h5 id="minutes">&#9251;</h5> Min :
                        </li>
                        <li class="counter">
                          <h5 id="seconds">&#9251;</h5> Sec
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="border-product">
                    <h6 class="product-title d-block">share it</h6>
                    <div class="product-icon">
                      <ul class="product-social">
                        <li>
                          <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.google.com/">
                            <i class="fab fa-google-plus-g"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://twitter.com/">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="pe-0">
                          <a href="https://www.google.com/">
                            <i class="fas fa-rss"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="cloth-review">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#desc"
                  type="button">Description</button>

                <button class="nav-link" id="nav-speci-tab" data-bs-toggle="tab" data-bs-target="#speci"
                  type="button">Specifications</button>

                <button class="nav-link" id="nav-size-tab" data-bs-toggle="tab" data-bs-target="#nav-guide"
                  type="button">Sizing Guide</button>

                <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab" data-bs-target="#question"
                  type="button">Q & A</button>

                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#review"
                  type="button">Review</button>
              </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="desc">
                <div class="shipping-chart">
                  {{ $product->description }}
                </div>
              </div>

              <div class="tab-pane fade" id="speci">
                <div class="pro mb-4">
                  <p class="font-light">The Model is wearing a white blouse from our stylist's
                    collection, see the image for a mock-up of what the actual blouse would look
                    like.it has text written on it in a black cursive language which looks great
                    on a white color.</p>
                  <div class="table-responsive">
                    <table class="table table-part">
                      <tr>
                        <th>Product Dimensions</th>
                        <td>15 x 15 x 3 cm; 250 Grams</td>
                      </tr>
                      <tr>
                        <th>Date First Available</th>
                        <td>5 April 2021</td>
                      </tr>
                      <tr>
                        <th>Manufacturer‏</th>
                        <td>Aditya Birla Fashion and Retail Limited</td>
                      </tr>
                      <tr>
                        <th>ASIN</th>
                        <td>B06Y28LCDN</td>
                      </tr>
                      <tr>
                        <th>Item model number</th>
                        <td>AMKP317G04244</td>
                      </tr>
                      <tr>
                        <th>Department</th>
                        <td>Men</td>
                      </tr>
                      <tr>
                        <th>Item Weight</th>
                        <td>250 G</td>
                      </tr>
                      <tr>
                        <th>Item Dimensions LxWxH</th>
                        <td>15 x 15 x 3 Centimeters</td>
                      </tr>
                      <tr>
                        <th>Net Quantity</th>
                        <td>1 U</td>
                      </tr>
                      <tr>
                        <th>Included Components‏</th>
                        <td>1-T-shirt</td>
                      </tr>
                      <tr>
                        <th>Generic Name</th>
                        <td>T-shirt</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade overflow-auto" id="nav-guide">
                <div class="table-responsive">
                  <table class="table table-pane mb-0">
                    <tbody>
                      <tr class="bg-color">
                        <th class="my-2">US Sizes</th>
                        <td>6</td>
                        <td>6.5</td>
                        <td>7</td>
                        <td>8</td>
                        <td>8.5</td>
                        <td>9</td>
                        <td>9.5</td>
                        <td>10</td>
                        <td>10.5</td>
                        <td>11</td>
                      </tr>

                      <tr>
                        <th>Euro Sizes</th>
                        <td>39</td>
                        <td>39</td>
                        <td>40</td>
                        <td>40-41</td>
                        <td>41</td>
                        <td>41-42</td>
                        <td>42</td>
                        <td>42-43</td>
                        <td>43</td>
                        <td>43-44</td>
                      </tr>

                      <tr class="bg-color">
                        <th>UK Sizes</th>
                        <td>5.5</td>
                        <td>6</td>
                        <td>6.5</td>
                        <td>7</td>
                        <td>7.5</td>
                        <td>8</td>
                        <td>8.5</td>
                        <td>9</td>
                        <td>10.5</td>
                        <td>11</td>
                      </tr>

                      <tr>
                        <th>Inches</th>
                        <td>9.25"</td>
                        <td>9.5"</td>
                        <td>9.625"</td>
                        <td>9.75"</td>
                        <td>9.9735"</td>
                        <td>10.125"</td>
                        <td>10.25"</td>
                        <td>10.5"</td>
                        <td>10.765"</td>
                        <td>10.85</td>
                      </tr>

                      <tr class="bg-color">
                        <th>CM</th>
                        <td>23.5</td>
                        <td>24.1</td>
                        <td>24.4</td>
                        <td>25.4</td>
                        <td>25.7</td>
                        <td>26</td>
                        <td>26.7</td>
                        <td>27</td>
                        <td>27.3</td>
                        <td>27.5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tab-pane fade" id="question">
                <div class="question-answer">
                  <ul>
                    <li>
                      <div class="que">
                        <i class="fas fa-question"></i>
                        <div class="que-details">
                          <h6>Is it compatible with all WordPress themes?</h6>
                          <p class="font-light">If you want to see a demonstration version of
                            the premium plugin, you can see that in this page. If you want
                            to see a demonstration version of the premium plugin, you can
                            see that in this page. If you want to see a demonstration
                            version of the premium plugin, you can see that in this page.
                          </p>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="que">
                        <i class="fas fa-question"></i>
                        <div class="que-details">
                          <h6>How can I try the full-featured plugin? </h6>
                          <p class="font-light">Compatibility with all themes is impossible,
                            because they are too many, but generally if themes are developed
                            according to WordPress and WooCommerce guidelines, YITH plugins
                            are compatible with them. Compatibility with all themes is
                            impossible, because they are too many, but generally if themes
                            are developed according to WordPress and WooCommerce guidelines,
                            YITH plugins are compatible with them.</p>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="que">
                        <i class="fas fa-question"></i>
                        <div class="que-details">
                          <h6>Is it compatible with all WordPress themes?</h6>
                          <p class="font-light">If you want to see a demonstration version of
                            the premium plugin, you can see that in this page. If you want
                            to see a demonstration version of the premium plugin, you can
                            see that in this page. If you want to see a demonstration
                            version of the premium plugin, you can see that in this page.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="review">
                <div class="row g-4">
                  <div class="col-lg-4">
                    <div class="customer-rating">
                      <h2>Customer reviews</h2>
                      <ul class="rating my-2 d-inline-block">
                        <li>
                          <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                          <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                          <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                          <i class="fas fa-star"></i>
                        </li>
                        <li>
                          <i class="fas fa-star"></i>
                        </li>
                      </ul>

                      <div class="global-rating">
                        <h5 class="font-light">82 Ratings</h5>
                      </div>

                      <ul class="rating-progess">
                        <li>
                          <h5 class="me-3">5 Star</h5>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                          <h5 class="ms-3">78%</h5>
                        </li>
                        <li>
                          <h5 class="me-3">4 Star</h5>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                          <h5 class="ms-3">62%</h5>
                        </li>
                        <li>
                          <h5 class="me-3">3 Star</h5>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                          <h5 class="ms-3">44%</h5>
                        </li>
                        <li>
                          <h5 class="me-3">2 Star</h5>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                          <h5 class="ms-3">30%</h5>
                        </li>
                        <li>
                          <h5 class="me-3">1 Star</h5>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 18%" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                          <h5 class="ms-3">18%</h5>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-8">
                    <p class="d-inline-block me-2">Rating</p>
                    <ul class="rating mb-3 d-inline-block">
                      <li>
                        <i class="fas fa-star theme-color"></i>
                      </li>
                      <li>
                        <i class="fas fa-star theme-color"></i>
                      </li>
                      <li>
                        <i class="fas fa-star theme-color"></i>
                      </li>
                      <li>
                        <i class="fas fa-star"></i>
                      </li>
                      <li>
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                    <div class="review-box">
                      <form class="row g-4">
                        <div class="col-12 col-md-6">
                          <label class="mb-1" for="name">Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter your name"
                            required="">
                        </div>

                        <div class="col-12 col-md-6">
                          <label class="mb-1" for="id">Email Address</label>
                          <input type="email" class="form-control" id="id" placeholder="Email Address"
                            required="">
                        </div>

                        <div class="col-12">
                          <label class="mb-1" for="comments">Comments</label>
                          <textarea class="form-control" placeholder="Leave a comment here" id="comments" style="height: 100px"
                            required=""></textarea>
                        </div>

                        <div class="col-12">
                          <button type="submit"
                            class="btn default-light-theme default-theme default-theme-2">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="col-12 mt-4">
                    <div class="customer-review-box">
                      <h4>Customer Reviews</h4>

                      <div class="customer-section">

                        <div class="customer-details">
                          <h5>Mike K</h5>
                          <ul class="rating my-2 d-inline-block">
                            <li>
                              <i class="fas fa-star theme-color"></i>
                            </li>
                            <li>
                              <i class="fas fa-star theme-color"></i>
                            </li>
                            <li>
                              <i class="fas fa-star theme-color"></i>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                            </li>
                            <li>
                              <i class="fas fa-star"></i>
                            </li>
                          </ul>
                          <p class="font-light">I purchased my Tab S2 at Best Buy but I wanted
                            to
                            share my thoughts on Amazon. I'm not going to go over specs and
                            such
                            since you can read those in a hundred other places. Though I
                            will
                            say that the "new" version is preloaded with Marshmallow and now
                            uses a Qualcomm octacore processor in place of the Exynos that
                            shipped with the first gen.</p>

                          <p class="date-custo font-light">- Sep 08, 2021</p>
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
  </section>
  <!-- Shop Section end -->

  <!-- product section start -->
  <section class="ratio_asos section-b-space overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="mb-lg-4 mb-3">Customers Also Bought These</h2>
          <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
            @foreach ($rproducts as $rproduct)
              <div>
                <div class="product-box">
                  <div class="img-wrapper">
                    <div class="front">
                      <a href="/product/{{ $rproduct->slug }}">
                        <img src="{{ asset('storage/img/product/' . $rproduct->image) }}"
                          class="bg-img blur-up lazyload" alt="">
                      </a>
                    </div>
                    <div class="back">
                      <a href="/product/{{ $rproduct->slug }}">
                        <img src="{{ asset('storage/img/product/' . $rproduct->image) }}"
                          class="bg-img blur-up lazyload" alt="">
                      </a>
                    </div>
                    <div class="cart-wrap">
                      <ul>
                        <li>
                          <a href="javascript:void(0)" class="addtocart-btn" data-product-id="{{ $rproduct->id }}">
                            <i data-feather="shopping-bag"></i>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" data-bs-toggle="modal"
                            data-bs-target="#quick-view-{{ $rproduct->id }}">
                            <i data-feather="eye"></i>
                          </a>
                        </li>

                        <li>
                          <a href="javascript:void(0)" class="wishlist">
                            <i data-feather="heart"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-details">
                    <div class="rating-details">
                      <span class="font-light grid-content">Cupiditate Minus</span>
                      <ul class="rating mt-0">
                        <li>
                          <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                          <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                          <i class="fas fa-star"></i>
                        </li>
                        <li>
                          <i class="fas fa-star"></i>
                        </li>
                        <li>
                          <i class="fas fa-star"></i>
                        </li>
                      </ul>
                    </div>
                    <div class="main-price">
                      <a href="/product/{{ $rproduct->slug }}" class="font-default">
                        <h5>{{ $rproduct->name }}</h5>
                      </a>
                      <div class="listing-content">
                        <span class="font-light">{{ $rproduct->category->name }}</span>
                        <p class="font-light">{{ $rproduct->description }}</p>
                      </div>
                      <h3 class="theme-color">
                        Rp.{{ $rproduct->price }}
                      </h3>
                      <button class="btn listing-content addtocart-btn" data-product-id="{{ $rproduct->id }}">
                        Add To Cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  @foreach ($rproducts as $rproduct)
    <x-qv-modal :product="$rproduct" />
  @endforeach

  <!-- product section end -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      let cartCount = $('header .menu-right #cart-count');

      $('.addtocart-btn').on('click', function() {
        const productId = $(this).data('product-id');

        $.ajax({
          url: '/cart',
          method: 'POST',
          data: {
            id: productId,
            quantity: 1
          },
          success: function(response) {
            cartCount.text(response.count);
            if ($('.modal').hasClass('show')) {
              $('.modal').modal('hide');
            }
            notify(response.status, response.message);
          },
          error: function(xhr) {
            console.error(xhr.responseJSON.message);
            notify(false, xhr.responseJSON.message);
          },
        });
      });
    });

    function updateQuantity() {
      $("#qty").val(parseInt($("#quantity").val()) + 1);
    }
  </script>
@endsection
