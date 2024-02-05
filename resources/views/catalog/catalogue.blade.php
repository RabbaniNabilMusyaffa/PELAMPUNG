@extends('catalog.index')

@section('content')

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
                <h1 class="display-2 text-uppercase text-dark pb-5">Selamat datang di website resmi PELAMPUNG</h1>
                <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none" style="background-color: #0B60B0;">Shop Product</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</section>  

<section id="mobile-products" class="product-store position-relative padding-large no-padding-top mt-5">
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
                  <a href="{{route('produk.detail', $item->id)}}" style="text-decoration: none; color: black;">{{$item->nama_produk}}</a>
                </h3>
                <span class="item-price text-info">Rp. {{number_format($item->harga_jual)}}</span>
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
                  <a href="{{route('produk.detail', $item->id)}}" style="text-decoration: none; color: black;">{{$item->nama_produk}}</a>
                </h3>
                <span class="item-price text-info">Rp. {{number_format($item->harga_jual)}}</span>
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
                  <a href="{{route('produk.detail', $item->id)}}" style="text-decoration: none; color: black;">{{$item->nama_produk}}</a>
                </h3>
                <span class="item-price text-info">Rp. {{number_format($item->harga_jual)}}</span>
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
                  <a href="{{route('produk.detail', $item->id)}}" style="text-decoration: none; color: black;">{{$item->nama_produk}}</a>
                </h3>
                <span class="item-price text-info">Rp. {{number_format($item->harga_jual)}}</span>
              </div>
            </div>
          @endforeach
          </div>
          
        </div>
      </div>
    </div>
  </div> 
</section>  

  
@endsection
