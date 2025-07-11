@extends('layouts.app')
@section('title', 'Daftar Akun')
@section('content')
  <style>
    [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
      box-shadow: none !important;
      border-color: transparent !important;
    }
  </style>
  <!-- Sign Up Section Start -->
  <div class="login-section">
    <div class="materialContainer">
      <div class="box">
        <form method="POST" action="/register">
          @csrf
          <div class="login-title">
            <h2>Daftar Akun</h2>
          </div>

          <div class="input">
            <label for="name">Nama</label>
            <input type="text" id="name" class="block mt-1 w-full" type="text" name="name"
              :value="old('name')" required="" autofocus="" autocomplete="name">
            @error('name')
              <span class="text-danger mt-3">{{ $message }}</span>
            @enderror
          </div>

          <div class="input">
            <label for="emailname">Alamat Email</label>
            <input type="email" id="emailname" class="block mt-1 w-full" type="email" name="email"
              :value="old('email')" required="" autocomplete="username">
            @error('email')
              <span class="text-danger mt-3">{{ $message }}</span>
            @enderror
          </div>

          <div class="input">
            <label for="pass">Kata Sandi</label>
            <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
              autocomplete="new-password">
            @error('password')
              <span class="text-danger mt-3">{{ $message }}</span>
            @enderror
          </div>

          <div class="input">
            <label for="compass">Konfirmasi Kata Sandi</label>
            <input type="password" id="compass" class="block mt-1 w-full" name="password_confirmation" required=""
              autocomplete="new-password">
          </div>

          <div class="button login">
            <button type="submit">
              <span>Daftar</span>
              <i class="fa fa-check"></i>
            </button>
          </div>
        </form>
      </div>
      <p><a href="/login" class="theme-color">Sudah punya akun?</a></p>
    </div>
  </div>

  <!-- Sign Up Section End -->
@endsection
