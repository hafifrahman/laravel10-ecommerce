@extends('layouts.app')
@section('title', 'Edit Produk')
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
          <h3>Edit Produk</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item" aria-current="page"><a href="/admin/product">Produk</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
              <h5>Form Edit Produk</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="/admin/product/{{ $product->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                      name="name" value="{{ $product->name }}" required>
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="price" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                      name="price" value="{{ $product->price }}" required>
                    @error('price')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="quantity" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                      name="quantity" value="{{ $product->quantity }}" min="0" required>
                    @error('quantity')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="category_id" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <select class="form-select px-4 py-3 @error('category_id') is-invalid @enderror" id="category_id"
                      name="category_id" required>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                          {{ $product->category->id == $category->id ? 'selected' : '' }}>
                          {{ $category->name }}
                        </option>
                      @endforeach
                    </select>
                    @error('category_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                      rows="3">{{ $product->description }}</textarea>
                    @error('description')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="description" class="col-sm-2 col-form-label">Gambar saat ini</label>
                  <div class="col-sm-10">
                    <img src="{{ asset('storage/img/product/' . $product->image) }}" alt="{{ $product->name }}"
                      class="w-50">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="image" class="col-sm-2 col-form-label">Gambar baru</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                      name="image" accept="image/*" aria-describedby="imageHelpBlock">
                    @error('image')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="imageHelpBlock" class="form-text">*Kosongkan jika tidak ingin mengubah gambar.</div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a href="/admin/product" class="btn btn-sm btn-outline-secondary">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
