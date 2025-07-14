@extends('layouts.app')
@section('title', 'Dashboard')
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
          <h3>Dashboard</h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fas fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="section-b-space">
    <div class="container">
      <div class="row justify-content-center g-3">
        <div class="col-12 col-sm-6 col-md-4">
          <a href="/admin/user" class="text-decoration-none dashboard-card-link">
            <div class="card shadow-sm border-0 text-center p-4 bg-primary text-white h-100">
              <div class="mb-2 dashboard-icon-wrapper">
                <i class="fas fa-users fa-2x dashboard-icon"></i>
              </div>
              <h5 class="fw-semibold">Pengguna</h5>
              <h2 class="fw-bold mb-0">{{ $users->count() }}</h2>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <a href="/admin/product" class="text-decoration-none dashboard-card-link">
            <div class="card shadow-sm border-0 text-center p-4 bg-success text-white h-100">
              <div class="mb-2 dashboard-icon-wrapper">
                <i class="fas fa-box fa-2x dashboard-icon"></i>
              </div>
              <h5 class="fw-semibold">Produk</h5>
              <h2 class="fw-bold mb-0">{{ $products->count() }}</h2>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
