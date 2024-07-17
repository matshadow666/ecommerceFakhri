@extends('layouts.user')
@section('content')

<!--------------- hero-section --------------->
<section id="hero" class="hero">
    <div class="hero-section">
        <div class="container">
            <div class="swiper hero-swiper">
                <div class="swiper-wrapper hero-wrapper">
                    <div class="swiper-slide hero-slide">
                        <div class="hero-wrapper-slide wrapper-slide">
                            <div class="wrapper-info">
                                <span class="wrapper-subtitle">Grosir Tanaman</span>
                                <h1 class="wrapper-details">Kamu bisa beli banyak barang tanaman di sini
                                </h1>
                                <a href="{{url('shop')}}" class="shop-btn">Beli Sekarang
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
                            <div class="wrapper-img">
                                <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/hero-img-1.webp" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide hero-slide">
                        <div class="hero-wrapper-slide wrapper-slide">
                            <div class="wrapper-info" data-aos="fade-right">
                                <span class="wrapper-subtitle">grosir tanaman</span>
                                <h1 class="wrapper-details"> We Provide Fresh and Organic Fruits To Your Door.
                                </h1>
                                <a href="{{url('shop')}}" class="shop-btn">Beli Sekarang
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
                            <div class="wrapper-img" data-aos="fade-left">
                                <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/hero-img-2.webp" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide hero-slide">
                        <div class="hero-wrapper-slide wrapper-slide">
                            <div class="wrapper-info" data-aos="fade-right">
                                <span class="wrapper-subtitle">grosir tanaman</span>
                                <h1 class="wrapper-details"> You Can Buy All the Grocery Items Hasslefree
                                </h1>
                                <a href="{{url('shop')}}" class="shop-btn">Beli Sekarang
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
                            <div class="wrapper-img" data-aos="fade-left">
                                <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/hero-img-3.webp" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="hero-service">
                <div class="row gy-4">
                    <div class="col-lg-3  col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 36 37" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H5.63636V24.1818H35" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                        <path
                                            d="M8.72763 35.0021C10.4347 35.0021 11.8185 33.6183 11.8185 31.9112C11.8185 30.2042 10.4347 28.8203 8.72763 28.8203C7.02057 28.8203 5.63672 30.2042 5.63672 31.9112C5.63672 33.6183 7.02057 35.0021 8.72763 35.0021Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path
                                            d="M31.9073 35.0021C33.6144 35.0021 34.9982 33.6183 34.9982 31.9112C34.9982 30.2042 33.6144 28.8203 31.9073 28.8203C30.2003 28.8203 28.8164 30.2042 28.8164 31.9112C28.8164 33.6183 30.2003 35.0021 31.9073 35.0021Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path d="M34.9982 1H11.8164V18H34.9982V1Z" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" stroke-linecap="square" />
                                        <path d="M11.8164 7.17969H34.9982" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>

                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Free Shipping</h5>
                                <p class="service-info service-details">When ordering over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31 17.4492C31 25.6992 24.25 32.4492 16 32.4492C7.75 32.4492 1 25.6992 1 17.4492C1 9.19922 7.75 2.44922 16 2.44922C21.85 2.44922 26.95 5.74922 29.35 10.6992"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M30.7 2L29.5 10.85L20.5 9.65" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Free Return</h5>
                                <p class="service-info service-details">Get Return within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.6654 18.668H9.33203V27.0013H22.6654V18.668Z" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" stroke-linecap="square" />
                                        <path
                                            d="M12.668 18.6654V13.6654C12.668 11.832 14.168 10.332 16.0013 10.332C17.8346 10.332 19.3346 11.832 19.3346 13.6654V18.6654"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path
                                            d="M31 22C31 30.3333 24.3333 37 16 37C7.66667 37 1 30.3333 1 22V5.33333L16 2L31 5.33333V22Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Secure Payment</h5>
                                <p class="service-info service-details">100% Secure Online Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13H5.5C2.95 13 1 11.05 1 8.5V1H7" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M25 13H26.5C29.05 13 31 11.05 31 8.5V1H25" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M16 28V22" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" />
                                        <path d="M16 22C11.05 22 7 17.95 7 13V1H25V13C25 17.95 20.95 22 16 22Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path d="M25 34H7C7 30.7 9.7 28 13 28H19C22.3 28 25 30.7 25 34Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h3 class="service-info service-title">Best Quality</h3>
                                <p class="service-info service-details">Original Product Guarenteed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------- hero-section-end --------------->


<!--------------- fresh-section--------------->
<section class="product fresh">
    <div class="container">
        <div class="section-title">
            <h3>Fresh Vegetables</h3>
            <a href="product-sidebar.html" class="view">View All</a>
        </div>
        <div class="col-lg-9">
            <div class="product-sidebar-section" data-aos="fade-up">
                <div class="row g-5">

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
</section>
<!--    -------------fresh-section-end--------------->

<!--------------- best-product-section--------------->
<section class="product best-product">
    <div class="container">
        <div class="best-product-section">
            <div class="product-wrapper">
                <div class="product-info" id="info-left">
                    <h2 class="wrapper-heading">Beli tanaman terbaik di tempat kami</h2>
                    <p class="wrapper-details">Lorem Ipsum
                    </p>
                    <a href="{{url('shop')}}" class="shop-btn">Beli Sekarang
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
    </div>
</section>
<!--------------- best-product-section--------------->

@endsection
