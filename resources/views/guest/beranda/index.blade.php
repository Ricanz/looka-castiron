<x-guest-layout>
    <!-- Main Slider Start -->
    <div class="ec-main-slider section ">
        <div class="ec-slider">
            @foreach ($banner as $item)
            <div class="ec-slide-item d-flex slide-1" style="background-image: url('{{ asset($item->gambar)}}');">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">{{ $item->sub_judul }}</h2>
                                <h1 class="ec-slide-title">{{ $item->judul }}</h1>
                                <p>{{ $item->deskripsi }}</p>
                                <a href="{{ $item->tombol_link }}" class="btn btn-lg btn-secondary">{{ $item->tombol_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-mb">
        <div class="container">
            <div class="row">
                <div class="ec_cat_slider">
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <h2 class="d-none">Category</h2>
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/8.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Laptops & PC</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/9.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Smartwatches</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/10.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/11.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Console Games</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/12.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Headphones</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/13.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Virtual Reality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{ asset('tlandingPage/assets/images/category-image/14.svg') }}"
                                        class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Produk Terlaris</h2>
                        <h6 class="ec-sub-title">Paling banyak dicari dan dibeli dengan kualitas SUPER terbaik</h6>

                    </div>
                </div>

            </div>
            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            @foreach ($products as $item)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset($item->gambar) }}"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset($item->gambar) }}"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <a href="" class="btn btn-primary">Lihat Produk</a>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $item->nama }}</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{ $item->kategori->nama }}</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">{{ $item->harga }}</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">
                                            <div class="ec-pro-desc">{{ $item->deskripsi }}</div>
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
    <!-- ec Product tab Area End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <div class="row m-tb-minus-15">
                <div class="ec-banners">
                    <div class="ec-banner-left col-sm-6">
                        <div class="ec-banner-block ec-banner-block-1 col-sm-12">
                            <div class="banner-block">
                                <img src="{{ asset('tlandingPage/assets/images/banner/23.png') }}" alt="" />
                                <div class="banner-content">
                                    <span class="ec-banner-stitle">lenovo tablets</span>
                                    <span class="ec-banner-title">UP to 70% OFF</span>
                                    <span class="ec-banner-btn"><a href="#" class="btn-primary">Shop
                                            Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-right col-sm-6">
                        <div class="ec-banner-block ec-banner-block-2 col-sm-12">
                            <div class="banner-block">
                                <img src="{{ asset('tlandingPage/assets/images/banner/24.png') }}" alt="" />
                                <div class="banner-content">
                                    <span class="ec-banner-stitle">Xiaoyi YI 1080p</span>
                                    <span class="ec-banner-title">WiFi IP Camera 36</span>
                                    <span class="ec-banner-btn"><a href="#" class="btn-primary">Shop
                                            Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Feature & Special Section Start -->
    <section class="section ec-exe-spe-section section-space-ptb-100 section-space-mt section-space-mb-100"
        style="background-image: url('{{ asset('tlandingPage/assets/images/special-product/background.jpg') }}');">
        <div class="container">
            <div class="row">
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-6 col-md-12 col-sm-12 margin-b-30">
                    <div class="col-md-12 text-left">
                        <div class="section-title mb-6">
                            <h2 class="ec-title">Looka Cast Iron</h2>
                        </div>
                    </div>

                    <div class="ec-spe-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner ec-product-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img
                                                class="main-image"
                                                src="{{ asset('tlandingPage/assets/images/special-product/1_1.jpg') }}"
                                                alt="Product" /></a>
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Creative Iron
                                            Store</a></h5>
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc" align="justify">
                                            {{-- {{ Str::limit($tentang->deskripsi, 150) }} --}}
                                        </span>
                                    </div>
                                    <div class="ec-pro-actions">
                                        <button title="Baca Selengkapnya" class="add-to-cart btn btn-primary">Baca
                                            Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Special Section End -->
                <!--  Feature Section Start -->
                <div class="ec-exe-section col-lg-6 col-md-12 col-sm-12">
                    <div class="col-md-12 text-left">
                        <div class="section-title mb-6">
                            <h2 class="ec-title">Produk Terbaru</h2>
                        </div>
                    </div>

                    <div class="ec-exe-products product-mt-minus-15">
                        @foreach ($produkTerbaru as $item)
                            <div class="ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset($item->gambar) }}"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset($item->gambar) }}"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset($item->gambar) }}"
                                                                data-src-hover="{{ asset('$item->gambar') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#dfdfdf;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('$item->gambar') }}"
                                                                data-src-hover="{{ asset('$item->gambar') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#91b6ff;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img
                                                            src="{{ asset('tlandingPage/assets/images/icons/compare_5.svg') }}"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{$item->nama}}</a></h5>
                                        <h6 class="ec-pro-stitle"><a
                                                href="shop-left-sidebar-col-3.html">{{$item->kategori->nama}}</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">{{$item->harga}}</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc" align="left">{{ Str::limit($item->deskripsi, 200) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--  Feature Section End -->

            </div>
        </div>
    </section>
    <!-- Feature & Special Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-mt section-space-mb">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="ec-offer-inner ofr-img">
                <img src="{{ asset('tlandingPage/assets/images/offer-image/looka-bg.png') }}" alt="" class="offer_bg" />
                <div class="col-sm-6 ec-offer-content">
                    <div class="ec-offer-content-inner">
                        {{-- <h2 class="ec-offer-stitle">black friday</h2>
                        <h2 class="ec-offer-title">up to 60 % off</h2>
                        <span class="ec-offer-desc">Select accessories for your favourites gadgets</span> --}}
                        {{-- <span class="ec-offer-btn"><a href="#" class="btn btn-primary">Shop Now</a></span> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- ec testimonial Start -->
    <section class="section ec-test-section section-space-ptb-100 section-space-mt section-space-mb"
        style="background-image: url('{{ asset('tlandingPage/assets/images/testimonial/testimonial_bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Client Testimonials</h2>
                        <h6 class="ec-sub-title">Kata mereka tentang toko kami</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        @foreach ($testimonial as $item)
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                            src="{{ asset($item->foto) }}" /></div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">{{ $item->nama }}</div>
                                        <div class="ec-test-designation">{{ $item->instansi }}</div>
                                        <div class="ec-test-rating">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                                <i class="ecicon eci-star fill"></i>
                                            @endfor
                                        </div>
                                        <div class="ec-test-desc">{{ $item->deskripsi }}</div>

                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ec testimonial end -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt mb-4">
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="insta-auto">
                    <h2 class="d-none">Instagram</h2>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img
                                    src="{{ asset('tlandingPage/assets/images/instragram-image/1.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img
                                    src="{{ asset('tlandingPage/assets/images/instragram-image/2.jpg') }}" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img
                                    src="{{ asset('tlandingPage/assets/images/instragram-image/3.jpg') }}" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img
                                    src="{{ asset('tlandingPage/assets/images/instragram-image/4.jpg') }}" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img
                                    src="{{ asset('tlandingPage/assets/images/instragram-image/5.jpg') }}" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <!--  services Section Start -->
    <section class="section ec-services-section">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/service_5_1.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free shipping</h2>
                            <p>Free shipping on all US orders</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/service_2.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>money gaurntee</h2>
                            <p>30 days money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/service_3.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>online support</h2>
                            <p>We support online 24/7 on day</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/service_5_4.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Member Discount</h2>
                            <p>Onevery order over $120.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->
</x-guest-layout>
