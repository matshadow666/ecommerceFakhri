@extends('layouts.user')
@section('content')
    <!--------------- products-sidebar-section--------------->
    <section class="product product-sidebar footer-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="sidebar" data-aos="fade-right">
                        <div class="sidebar-section box-shadows">
                            <div class="sidebar-wrapper">
                                <h3 class="wrapper-heading">Product Categories</h3>
                                <div class="sidebar-item">
                                    <ul class="sidebar-list">
                                        <li class="list-group-item">
                                            <a href="{{url('shop')}}">All</a>
                                        </li>
                                        @foreach ($kategori as $k)
                                            <li class="list-group-item">
                                                <a href="{{ url('shop/kategori/' . $k->id) }}">{{ $k->nama_kategori }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="sidebar-shop-section">
                            <span class="wrapper-subtitle">TRENDY</span>
                            <h3 class="wrapper-heading">Best wireless Shoes</h3>
                            <a href="seller-sidebar.html" class="shop-btn deal-btn">Shop Now
                                <span>
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.45312" y="0.914062" width="9.25346" height="2.05632"
                                            transform="rotate(45 1.45312 0.914062)" />
                                        <rect x="8" y="7.45703" width="9.25346" height="2.05632"
                                            transform="rotate(135 8 7.45703)" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product-sidebar-section" data-aos="fade-up">
                        <div class="row g-5">
                            <center><form id="searchForm">
                                <input type="text" id="searchInput" placeholder="Search Product...">
                                <button type="submit" class="shop-btn">Search</button>
                            </form></center>

                            <!-- Product listing -->
                            @foreach ($produk as $item)
                                <div class="col-xl-4 col-sm-6 product-item">
                                    <div class="product-wrapper" data-aos="fade-up">
                                        <div class="product-img">
                                            <img src="{{ asset('images/produk/' . $item->gambar) }}" alt="product-img">
                                        </div>
                                        <div class="product-info">
                                            <div class="product-description">
                                                <a href="product-info.html"
                                                    class="product-details">{{ $item->nama_produk }}</a>
                                                <div class="price">
                                                    <span class="new-price">Rp.{{ $item->harga }}</span>
                                                </div>
                                            </div>
                                            <div class="product-cart-btn">
                                                <a href="/produkdetail/{{ $item->id }}" class="product-btn">
                                                    <span class="btn-text">Detail</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('searchForm');
            const searchInput = document.getElementById('searchInput');
            const productList = document.getElementById('productList');
            const productItems = document.querySelectorAll('.product-item');

            searchForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const query = searchInput.value.toLowerCase().trim();

                productItems.forEach(function(item) {
                    const productName = item.querySelector('.product-details').textContent
                        .toLowerCase();
                    if (productName.includes(query)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
    <!--------------- products-sidebar-section-end--------------->
@endsection
