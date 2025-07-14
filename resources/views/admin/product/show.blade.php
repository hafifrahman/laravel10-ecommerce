@extends('layouts.app')
@section('title', 'Detail Produk')
@section('content')
  <style>
    .product-gallery {
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f8f9fa;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
    }

    .product-gallery img {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
      transition: transform 0.3s;
    }

    .product-gallery:hover img {
      transform: scale(1.02);
    }

    .product-details-card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .detail-section {
      margin-bottom: 1.5rem;
    }

    .price-tag {
      font-size: 2rem;
      font-weight: 700;
      color: #0d6efd;
    }

    @media (max-width: 992px) {
      .product-gallery {
        height: 50vh;
        margin-bottom: 2rem;
      }
    }
  </style>

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
          <h3>Detail Produk</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item" aria-current="page"><a href="/admin/product">Produk</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="product-section section-b-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="product-gallery shadow-sm">
            <img src="{{ asset('storage/img/product/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid"
              id="mainProductImage">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="product-details-card card shadow">
            <div class="card-body">
              <h1 class="card-title mb-4">{{ $product->name }}</h1>

              <div class="detail-section">
                <div class="price-tag mb-3">
                  Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>

                <div class="stock-info mb-4">
                  <span class="badge bg-{{ $product->stock == 'ada' ? 'success' : 'danger' }} p-2 fs-6">
                    <i class="fas fa-box-open me-1"></i>
                    Stok: {{ $product->stock }}
                  </span>
                  <span class="badge bg-info p-2 fs-6 ms-2">
                    <i class="fas fa-tag me-1"></i>
                    {{ $product->category->name }}
                  </span>
                </div>
              </div>

              <hr>

              <div class="detail-section">
                <h5><i class="fas fa-align-left me-2"></i>Deskripsi Produk</h5>
                <p class="mt-3" style="line-height: 1.8;">
                  {{ $product->description ?? 'Tidak ada deskripsi tersedia' }}
                </p>
              </div>

              <div class="mt-auto pt-3">
                <div class="d-grid gap-2">
                  <a href="/admin/product/{{ $product->id }}/edit" class="btn btn-sm btn-warning btn-lg">
                    <i class="fas fa-edit me-2"></i> Edit Produk
                  </a>

                  <form action="/admin/product" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-lg w-100"
                      onclick="return confirm('Yakin ingin menghapus produk ini?')">
                      <i class="fas fa-trash-alt me-2"></i> Hapus Produk
                    </button>
                  </form>

                  <a href="/admin/product" class="btn btn-sm btn-outline-secondary btn-lg">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Daftar
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional: Tambahkan zoom effect -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const img = document.getElementById('mainProductImage');
      img.addEventListener('click', function() {
        this.classList.toggle('zoomed');
        if (this.classList.contains('zoomed')) {
          this.style.transform = 'scale(2)';
          this.style.cursor = 'zoom-out';
        } else {
          this.style.transform = 'scale(1)';
          this.style.cursor = 'zoom-in';
        }
      });
    });
  </script>

  <style>
    .zoomed {
      transform: scale(2);
      cursor: zoom-out;
      z-index: 1000;
      position: relative;
    }
  </style>
@endsection
