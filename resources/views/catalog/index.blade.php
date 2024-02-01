<!DOCTYPE html>
<html>
  <head>
    <title>Merchandise</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{asset('catalog/js/modernizr.js')}}"></script>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

    @include('catalog.svg')

    <div class="search-popup">
        <div class="search-popup-container">
 
          <form role="search" method="get" class="search-form" action="">
            <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
            <button type="submit" class="search-submit"><svg class="search"><use xlink:href="#search"></use></svg></button>
          </form>

          <h5 class="cat-list-title">Browse Categories</h5>
          
          <ul class="cat-list">
            <li class="cat-list-item">
              <a href="#" title="Mobile Phones">Mobile Phones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Smart Watches">Smart Watches</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Headphones">Headphones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Accessories">Accessories</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Monitors">Monitors</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Speakers">Speakers</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Memory Cards">Memory Cards</a>
            </li>
          </ul>

        </div>
    </div>
    
    <section>
      @include('catalog.nav')
    </section>
    
    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container">
              <div>
                <h6 class="mt-5">.</h6>
              </div>
              <div class="row d-flex align-items-center">
                <div class="col-md-6 mt-5">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Selamat datang di website resmi Merchandise ....</h1>
                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-prev">
        <svg class="chevron-left">
          <use xlink:href="#chevron-left" />
        </svg>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-next">
        <svg class="chevron-right">
          <use xlink:href="#chevron-right" />
        </svg>
      </div>
    </section>
    
    <section id="mobile-products" class="product-store position-relative padding-large">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Beberapa produk kami : </h2>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              @foreach ($items as $item )
                <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="{{$item->photo}}" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="{{route('cart.add', $item->id)}}" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="{{route('produk.detail', $item->id)}}">{{$item->nama_produk}}</a>
                    </h3>
                    <span class="item-price text-primary">Rp. {{number_format($item->harga_jual)}}</span>
                  </div>
                </div>
              @endforeach
              </div>
              @foreach ($items as $item )
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="{{$item->photo}}" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="{{route('cart.add', $item->id)}}" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="{{route('produk.detail', $item->id)}}">{{$item->nama_produk}}</a>
                    </h3>
                    <span class="item-price text-primary">Rp. {{number_format($item->harga_jual)}}</span>
                  </div>
                </div>
              @endforeach
              </div>
              @foreach ($items as $item )
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="{{$item->photo}}" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="{{route('cart.add', $item->id)}}" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="{{route('produk.detail', $item->id)}}">{{$item->nama_produk}}</a>
                    </h3>
                    <span class="item-price text-primary">Rp. {{number_format($item->harga_jual)}}</span>
                  </div>
                </div>
              @endforeach
              </div>
              @foreach ($items as $item )
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="{{$item->photo}}" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="{{route('cart.add', $item->id)}}" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="{{route('produk.detail', $item->id)}}">{{$item->nama_produk}}</a>
                    </h3>
                    <span class="item-price text-primary">Rp. {{number_format($item->harga_jual)}}</span>
                  </div>
                </div>
              @endforeach
              </div>
              
            </div>
          </div>
        </div>
      </div>   
    </section>
  <script src="{{ asset('catalog/js/jquery-1.11.0.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{ asset('catalog/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('catalog/js/plugins.js') }}"></script>
  <script type="text/javascript" src="{{ asset('catalog/js/script.js') }}"></script>
  </body>
</html>