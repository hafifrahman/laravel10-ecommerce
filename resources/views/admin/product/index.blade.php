@extends('layouts.app')
@section('title', 'Daftar Produk')
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
              <li class="breadcrumb-item active" aria-current="page">Produk</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="cart-section section-b-space">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="/admin/product/create" class="btn btn-sm btn-primary"><i class="fas fa-plus me-1"></i> Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="product-table" class="table table-bordered table-striped w-100">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>Gambar</td>
                      <td>Harga</td>
                      <td>Jumlah</td>
                      <td>Stok</td>
                      <td>Kategori</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                          @if (Storage::exists('public/img/product/' . $product->image))
                            <img src="{{ asset('storage/img/product/' . $product->image) }}" alt="{{ $product->name }}"
                              style="width: 100px;">
                          @else
                            <span class="text-muted">Gambar tidak tersedia</span>
                          @endif
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td class="text-nowrap">
                          <a href="/admin/product/{{ $product->id }}" class="btn btn-sm btn-success text-light">
                            Detail
                          </a>
                          <a href="/admin/product/{{ $product->id }}/edit" class="btn btn-sm btn-primary text-light">
                            Edit
                          </a>
                          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteproduct-modal-{{ $product->id }}">
                            Hapus
                          </button>
                          <x-delete-modal :model="$product" id="deleteproduct-modal-{{ $product->id }}"
                            url="/admin/product/{{ $product->id }}"
                            message="Apakah anda yakin ingin menghapus produk" />
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      initDataTable('#product-table');

      @if (session('success'))
        notify('success', "{{ session('success') }}");
      @endif
    });
  </script>
@endsection
