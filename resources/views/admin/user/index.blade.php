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
          <h3>Pengguna</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
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
            <div class="card-body">
              <div class="table-responsive">
                <table id="user-table" class="table table-bordered table-striped w-100">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>Email</td>
                      <td>Telepon</td>
                      <td>Terakhir Login</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->last_login ? Carbon\Carbon::parse($user->last_login)->diffForHumans() : 'Tidak tersedia' }}</td>
                        <td class="text-nowrap">
                          <a href="/admin/user/{{ $user->id }}" class="btn btn-sm btn-success text-light">
                            Detail
                          </a>
                          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteuser-modal-{{ $user->id }}">
                            Hapus
                          </button>
                          <x-delete-modal :model="$user" id="deleteuser-modal-{{ $user->id }}"
                            url="/admin/user/{{ $user->id }}" message="Apakah anda yakin ingin menghapus pengguna" />
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
      initDataTable('#user-table');

      @if (session('success'))
        notify('success', "{{ session('success') }}");
      @endif
    });
  </script>
@endsection
