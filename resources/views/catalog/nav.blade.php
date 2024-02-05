<header id="header" class="site-header header-scrolled fixed-top text-black bg-light">
    <nav style="background-color: #0B60B0" id="header-nav" class="navbar navbar-expand-lg px-5 py-3">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: white; font-family: 'Poppins';" href="{{ route('catalog.index') }}">
        @php
        $words = explode(' ', $setting->nama_perusahaan);
        $word  = '';
        foreach ($words as $w) {
            $word .= $w[0];
        }
    @endphp
    <span class="logo-lg"><b>{{ $setting->nama_perusahaan }}</b></span></a>
        <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="navbar-icon">
            <use xlink:href="#navbar-icon"></use>
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand" href="index.html">
              <img src="{{asset('catalog/images/main-logo.png')}}" class="logo">
            </a>
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
          </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="user">
                                <use xlink:href="#user"></use>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('index.profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                      </li>
                      <li class="pe-3 align-items-center d-flex">
                        <a href="{{route('wishlist.index')}}">
                          <svg class="star-half">
                            <use xlink:href="#star-half"></use>
                          </svg>
                        </a>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">{{ count(auth()->user()->wishlist ?? []) }}</span>
                      </li>
                      <li class="pe-3 align-items-center d-flex">
                        <a href="{{route('front.cart')}}">
                        <svg class="cart">
                          <use xlink:href="#cart"></use>
                        </svg>
                      </a>
                      <span class="badge bg-dark text-white ms-1 rounded-pill">{{ count(auth()->user()->keranjang ?? []) }}</span>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
