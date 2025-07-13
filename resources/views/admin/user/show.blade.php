@extends('layouts.app')
@section('title', 'Detail Pengguna')

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
          <h3>Detail Pengguna</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/"><i class="fas fa-home"></i></a>
              </li>
              <li class="breadcrumb-item"><a href="/admin/user">Pengguna</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="section-b-space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-sm">
            <div class="card-header">
              <h5 class="mb-0">Informasi Pengguna</h5>
            </div>
            <div class="card-body">
              <dl class="row mb-0">
                <dt class="col-sm-4">Nama</dt>
                <dd class="col-sm-8">{{ $user->name }}</dd>

                <dt class="col-sm-4">Email</dt>
                <dd class="col-sm-8">{{ $user->email }}</dd>

                <dt class="col-sm-4">Role</dt>
                <dd class="col-sm-8">{{ $user->role ?? '-' }}</dd>

                <dt class="col-sm-4">Telepon</dt>
                <dd class="col-sm-8">{{ $user->phone ?? '-' }}</dd>

                <dt class="col-sm-4">Tanggal Daftar</dt>
                <dd class="col-sm-8">{{ $user->created_at->translatedFormat('d F Y H:i') }}</dd>

                <dt class="col-sm-4">Tanggal Diperbarui</dt>
                <dd class="col-sm-8">{{ $user->updated_at->translatedFormat('d F Y H:i') }}</dd>
              </dl>
            </div>
            <div class="card-footer text-end">
              <a href="/admin/user" class="btn btn-sm btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Kembali
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
