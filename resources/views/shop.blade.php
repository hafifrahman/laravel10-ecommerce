@extends('layouts.app')
@section('title', 'Belanja')
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
          <h3>Belanja</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Belanja</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Shop Section start -->
  <section class="section-b-space">
    <div class="container">
      <div class="row justify-content-center">

        <div class="category-product col-lg-9 col-12 ratio_30">

          <div class="row g-4">
            <!-- label and featured section -->
            <div class="col-md-12">
              <ul class="short-name">
              </ul>
            </div>

            <div class="col-12">
              <div class="filter-options">
                <form method="GET" action="{{ url()->current() }}">
                  <div class="select-options">
                    <div class="dropdown select-featured">
                      <select class="form-select" name="orderby" id="orderby" onchange="this.form.submit()">
                        <option value="default" {{ $sort == 'default' ? 'selected' : '' }}>Default</option>
                        <option value="date_new_to_old" {{ $sort == 'date_new_to_old' ? 'selected' : '' }}>Date, New To
                          Old</option>
                        <option value="date_old_to_new" {{ $sort == 'date_old_to_new' ? 'selected' : '' }}>Date, Old To
                          New</option>
                        <option value="price_low_to_high" {{ $sort == 'price_low_to_high' ? 'selected' : '' }}>Price, Low
                          To High</option>
                        <option value="price_high_to_low" {{ $sort == 'price_high_to_low' ? 'selected' : '' }}>Price, High
                          To Low</option>
                      </select>
                    </div>
                    <div class="dropdown select-featured">
                      <select class="form-select" name="size" id="pagesize" onchange="this.form.submit()">
                        <option value="12" {{ $pageSize == '12' ? 'selected' : '' }}>12</option>
                        <option value="24" {{ $pageSize == '24' ? 'selected' : '' }}>24</option>
                        <option value="52" {{ $pageSize == '52' ? 'selected' : '' }}>52</option>
                        <option value="100" {{ $pageSize == '100' ? 'selected' : '' }}>100</option>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- label and featured section -->

          <!-- Prodcut section -->
          <div
            class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
            @foreach ($products as $product)
              <div>
                <div class="product-box">
                  <div class="img-wrapper">
                    <div class="front">
                      <a href="/product/{{ $product->slug }}">
                        <img src="{{ asset('storage/img/product/' . $product->image) }}" class="bg-img blur-up lazyload"
                          alt="">
                      </a>
                    </div>
                    <div class="back">
                      <a href="/product/{{ $product->slug }}">
                        <img src="{{ asset('storage/img/product/' . $product->image) }}" class="bg-img blur-up lazyload"
                          alt="">
                      </a>
                    </div>
                    <div class="cart-wrap">
                      <ul>
                        <li>
                          <a href="javascript:void(0)" data-product-id="{{ $product->id }}" class="addtocart-btn">
                            <i data-feather="shopping-cart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" data-bs-toggle="modal"
                            data-bs-target="#quick-view-{{ $product->id }}">
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
                    <div class="main-price">
                      <a href="/product/{{ $product->slug }}" class="font-default">
                        <h5 class="ms-0">{{ $product->name }}</h5>
                      </a>
                      <div class="listing-content">
                        <span class="font-light">{{ $product->category->name }}</span>
                        <p class="font-light">{{ $product->description }}</p>
                      </div>
                      <h3 class="theme-color">Rp.{{ $product->price }}</h3>
                      <button type="button" data-product-id="{{ $product->id }}" class="btn listing-content">
                        Add To Cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <x-qv-modal :product="$product" />
            @endforeach
          </div>

          {{ $products->links('layouts.pagination') }}

        </div>
      </div>
    </div>
  </section>
  <!-- Shop Section end -->

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
  </script>
@endsection
