@extends('layouts.app')
@section('title', 'Keranjang')
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
          <h3>Keranjang</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Keranjang Saya</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Cart Section Start -->
  <section class="cart-section section-b-space">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <table class="table cart-table">
            <thead>
              <tr class="table-head">
                <th scope="col">Gambar</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">total</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($cartItems as $item)
                <tr data-rowid="{{ $item->rowId }}">
                  <td>
                    <a href="/product/{{ $item->model->slug }}">
                      <img src="{{ asset('storage/images/barang/' . $item->model->image) }}" class="blur-up lazyloaded"
                        alt="">
                    </a>
                  </td>
                  <td>
                    <a href="/product/{{ $item->model->slug }}">{{ $item->model->name }}</a>
                    <div class="mobile-cart-content row">
                      <div class="col">
                        <div class="qty-box">
                          <div class="input-group">
                            <input type="text" name="quantity" class="form-control input-number" value="1">
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <h2>Rp.{{ $item->price }}</h2>
                      </div>
                      <div class="col">
                        <h2 class="td-color">
                          <a href="javascript:void(0)">
                            <i class="fas fa-times"></i>
                          </a>
                        </h2>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h2>Rp.{{ $item->price }}</h2>
                  </td>
                  <td>
                    <div class="qty-box">
                      <div class="input-group">
                        <input type="number" id="quantity" name="quantity" data-rowid="{{ $item->rowId }}"
                          class="form-control input-number" value="{{ $item->qty }}" min="1">
                      </div>
                    </div>
                  </td>
                  <td>
                    <h2 class="td-color">Rp.{{ $item->subtotal() }}</h2>
                  </td>
                  <td>
                    <button type="button" class="bg-transparent border-0 m-0 p-0 deletecart-btn"
                      data-rowid="{{ $item->rowId }}">
                      <i class="fas fa-times"></i>
                    </button>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6">
                    <span class="text-muted fs-5">Keranjang kosong.</span>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <div class="col-12 mt-md-5 mt-4">
          <div class="row">
            <div class="col-sm-7 col-5 order-1">
              <div class="left-side-button text-end d-flex d-block justify-content-end">
                <a href="javascript:void(0)" class="text-decoration-underline theme-color d-block text-capitalize">
                  Hapus Semua
                </a>
              </div>
            </div>
            <div class="col-sm-5 col-7">
              <div class="left-side-button float-start">
                <a href="/shop" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                  <i class="fas fa-arrow-left"></i> Lanjut Belanja</a>
              </div>
            </div>
          </div>
        </div>

        <div class="cart-checkout-section">
          <div class="row g-4">
            <div class="col-lg-4">
              <div class="cart-box">
                <div class="cart-box-details">
                  <div class="total-details">
                    <div class="top-details">
                      <h3>Cart Totals</h3>
                      <h6>Sub Total <span>Rp.{{ Cart::instance('cart')->subtotal() }}</span></h6>
                      <h6>Tax <span>Rp.{{ Cart::instance('cart')->tax() }}</span></h6>
                      <h6>Total <span>Rp.{{ Cart::instance('cart')->total() }}</span></h6>
                    </div>
                    <div class="bottom-details">
                      <a href="checkout">Process Checkout</a>
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
@endsection
