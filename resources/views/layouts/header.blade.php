<header class="header-style-2" id="home">
  <div class="main-header navbar-searchbar">
    <div class="container-fluid-lg">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-menu">
            <div class="menu-left">
              <div class="brand-logo">
                <a href="/">
                  <img src="{{ asset('storage/img/logo.png') }}" class="h-logo img-fluid blur-up lazyload w-50 m-0"
                    alt="logo">
                </a>

              </div>

            </div>
            <nav>
              <div class="main-navbar">
                <div id="mainnav">
                  <div class="toggle-nav" style="cursor: pointer">
                    <i class="fa fa-bars sidebar-bar"></i>
                  </div>
                  <ul class="nav-menu">
                    <li class="back-btn d-xl-none">
                      <div class="close-btn">
                        Menu
                        <span class="mobile-back"><i class="fa fa-angle-left"></i>
                        </span>
                      </div>
                    </li>
                    @if (Auth::check() && Auth::user()->role == 'admin')
                      <li><a href="/admin/dashboard" class="nav-link menu-title">Dashboard</a></li>
                      <li><a href="/admin/user" class="nav-link menu-title">Pengguna</a></li>
                      <li><a href="/admin/product" class="nav-link menu-title">Barang</a></li>
                    @else
                      <li><a href="/" class="nav-link menu-title">Beranda</a></li>
                      <li><a href="/shop" class="nav-link menu-title">Belanja</a></li>
                      <li><a href="/cart" class="nav-link menu-title">Keranjang</a></li>
                    @endif
                    <li><a href="/about" class="nav-link menu-title">Tentang</a></li>
                    <li><a href="/contact" class="nav-link menu-title">Hubungi Kami</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="menu-right">
              <ul>
                @if (!Auth::check() || Auth::user()->role != 'admin')
                  @if (request()->is('shop'))
                    <li>
                      <div class="search-box theme-bg-color">
                        <i data-feather="search"></i>
                      </div>
                    </li>
                  @endif
                  <li class="onhover-dropdown wislist-dropdown">
                    <div class="cart-media">
                      <a href="/wishlist">
                        <i data-feather="heart"></i>
                        <span id="wishlist-count" class="label label-theme rounded-pill">
                          0
                        </span>
                      </a>
                    </div>
                  </li>
                  <li class="onhover-dropdown wislist-dropdown">
                    <div class="cart-media">
                      <a href="/cart">
                        <i data-feather="shopping-cart"></i>
                        <span id="cart-count" class="label label-theme rounded-pill">
                          {{ Cart::instance('cart')->content()->count() }}
                        </span>
                      </a>
                    </div>
                  </li>
                @endif
                <li class="onhover-dropdown">
                  <div class="cart-media name-usr">
                    @auth
                      <span>{{ Auth::user()->name }}</span>
                    @endauth
                    <i data-feather="user"></i>
                  </div>
                  <div class="onhover-div profile-dropdown">
                    <ul>
                      @auth
                        @if (Auth::user()->role === 'admin')
                          <li>
                            <a href="/admin/dashboard" class="d-block">Dashboard</a>
                          </li>
                        @else
                          <li>
                            <a href="/my-account" class="d-block">Akun Saya</a>
                          </li>
                        @endif
                        <li>
                          <a href="/logout"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                            class="d-block">Keluar</a>
                          <form id="form-logout" action="/logout" method="POST">@csrf</form>
                        </li>
                      @else
                        <li>
                          <a href="/login" class="d-block">Masuk</a>
                        </li>
                        <li>
                          <a href="/register" class="d-block">Buat Akun</a>
                        </li>
                      @endauth
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="search-full">
              <form method="GET" class="search-full" action="/shop">
                <div class="input-group">
                  <span class="input-group-text">
                    <i data-feather="search" class="font-light"></i>
                  </span>
                  <input type="text" name="q" class="form-control search-type" value="{{ request('q') }}"
                    placeholder="Cari barang..">
                  <span class="input-group-text close-search">
                    <i data-feather="x" class="font-light"></i>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="mobile-menu d-sm-none">
  <ul>
    <li>
      <a href="demo3.php" class="active">
        <i data-feather="home"></i>
        <span>Home</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <i data-feather="align-justify"></i>
        <span>Category</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <i data-feather="shopping-bag"></i>
        <span>Cart</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <i data-feather="heart"></i>
        <span>Wishlist</span>
      </a>
    </li>
    <li>
      <a href="user-dashboard.php">
        <i data-feather="user"></i>
        <span>Account</span>
      </a>
    </li>
  </ul>
</div>
