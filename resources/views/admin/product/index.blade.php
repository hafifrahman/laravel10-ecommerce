@extends('layouts.app')
@section('title', 'Barang')
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
          <h3>Barang</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Barang</li>
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
          <a href="/admin/product/create" class="btn btn-sm btn-primary">Tambah</a>
          <table id="product-table" class="table table-bordered table-striped w-100">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Foto</td>
                <td>Harga</td>
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
                    <img src="{{ asset('storage/images/barang/' . $product->image) }}" alt="{{ $product->name }}"
                      style="width: 100px;">
                  </td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->stock_status }}</td>
                  <td>{{ $product->category->name }}</td>
                  <td class="text-nowrap">
                    <a href="/admin/product/{{ $product->id }}" class="btn btn-sm btn-success text-light">Detail</a>
                    <a href="/admin/product/{{ $product->id }}/edit" class="btn btn-sm btn-primary text-light">Ubah</a>
                    <button type="button" class="btn btn-sm btn-danger deleteproduct-btn"
                      data-product-id="{{ $product->id }}">
                      Hapus
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
  <script>
    $('#product-table').DataTable({
      autoWidth: false,
      scrollX: true,
      language: {
        decimal: '',
        emptyTable: 'Tidak ada data tersedia di tabel',
        info: 'Menampilkan _START_ hingga _END_ dari _TOTAL_ entri',
        infoEmpty: 'Menampilkan 0 hingga 0 dari 0 entri',
        infoFiltered: '(disaring dari _MAX_ total entri)',
        infoPostFix: '',
        thousands: ',',
        lengthMenu: 'Tampilkan _MENU_ entri',
        loadingRecords: 'Memuat...',
        processing: 'Sedang memproses...',
        search: 'Cari:',
        zeroRecords: 'Tidak ada hasil yang cocok ditemukan',
        paginate: {
          first: 'Pertama',
          last: 'Terakhir',
          next: "<span aria-hidden='true'>&raquo;</span>",
          previous: "<span aria-hidden='true'>&laquo;</span>"
        },
        aria: {
          sortAscending: ': aktifkan untuk mengurutkan kolom secara ascending',
          sortDescending: ': aktifkan untuk mengurutkan kolom secara descending'
        }
      }
    });
  </script>
@endpush
