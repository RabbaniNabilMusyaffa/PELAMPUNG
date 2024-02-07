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
                        <div class="col-md-6 mt-5 mb-5">
                            <div class="banner-content">
                                <h1 class="display-2 text-uppercase text-dark pb-5">Selamat datang di website resmi
                                    PELAMPUNG</h1>
                                <a href="#mobile-products"
                                    class="btn btn-medium btn-dark text-uppercase btn-rounded-none"
                                    style="background-color: #0B60B0;">Shop Product</a>
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
                <h2 class="display-7 text-dark text-uppercase">Beberapa produk kami :</h2>
            </div>
            <form action="{{ route('catalog.index') }}" method="GET" class="mb-5">
                <div class="row g-2">
                    <div class="col-4">
                        <label for="min_price">Min Price:</label>
                        <input type="number" class="form-control" name="min_price" id="min_price"
                            value="{{ $minPrice }}">
                    </div>
                    <div class="col-4">
                        <label for="max_price">Max Price:</label>
                        <input type="number" class="form-control" name="max_price" id="max_price"
                            value="{{ $maxPrice }}">
                    </div>
                    <div class="col-4 pt-4">
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </div>
                </div>
            </form>
            <div class="swiper product-swiper ">
                <div class="swiper-wrapper ">
                    @foreach ($produkfront as $item)
                    <div class="swiper-slide">
                        <div class="product-card position-relative">
                            <div class="image-holder">
                                <img class="card-img-top" width="500" height="200" src="{{ $item->photo }}" alt="..." />
                            </div>
                            <div class="cart-concern position-absolute">
                                <div class="cart-button d-flex">
                                    <a href="{{route('cart.add', $item->id)}}" class="btn btn-medium btn-black me-1">Add
                                        to
                                        Cart<svg class="cart-outline">
                                            <use xlink:href="#cart-outline"></use>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-lg btn-danger mt-auto" onclick="wishlist()"
                                        href="{{ route('wishlist.add', ['id' => $item->id]) }}"
                                        class="position-absolute top-0 end-0 p-3 text-danger love-icon"><i
                                            class="bi-heart"></i></a>
                                </div>
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                <h3 class="card-title text-uppercase">
                                    <a href="{{route('produk.detail', $item->id)}}"
                                        style="text-decoration: none; color: black;">{{$item->nama_produk}}</a>
                                </h3>
                                <span class="item-price text-info">Rp. {{number_format($item->harga_jual)}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function wishlist() {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Berhasil Disimpan",
                showConfirmButton: true
            });
        }
</script>



@endsection
