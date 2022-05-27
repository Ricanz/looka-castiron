<x-guest-layout>

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-mt section-space-mb">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="ec-offer-inner ofr-img">
                <!-- <img src="{{asset('tlandingPage/assets/images/offer-image/offer_bg.png')}}" alt="" class="offer_bg" /> -->
                <div class="col-sm-6 ec-offer-content">
                    <div class="ec-offer-content-inner">
                        <h2 class="ec-offer-stitle">black friday</h2>
                        <h2 class="ec-offer-title">up to 60 % off</h2>
                        <span class="ec-offer-desc">Select accessories for your favourites gadgets</span>
                        <span class="ec-offer-btn"><a href="#" class="btn btn-primary">Shop Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/8.svg')}}" class="svg_img cat_svg" alt="" />
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/9.svg')}}" class="svg_img cat_svg" alt="" />
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/10.svg')}}" class="svg_img cat_svg" alt="" />
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/11.svg')}}" class="svg_img cat_svg" alt="" />
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/12.svg')}}" class="svg_img cat_svg" alt="" />
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/13.svg')}}" class="svg_img cat_svg" alt="" />
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
                                    <img src="{{asset('tlandingPage/assets/images/category-image/14.svg')}}" class="svg_img cat_svg" alt="" />
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
                        <h2 class="ec-title">Semua Produk Looka Cast Iron</h2>
                        <h6 class="ec-sub-title">Kualitas iron terbaik, ada DI SINI!!</h6>

                    </div>
                </div>

            </div>
            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            @foreach ($Produk as $item)
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
                                            <div class="ec-pro-desc" align='left'>{{ Str::limit($item->deskripsi, 150) }}</div>
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
                                <img src="{{asset('tlandingPage/assets/images/banner/23.png')}}" alt="" />
                                <div class="banner-content">
                                    <span class="ec-banner-stitle">lenovo tablets</span>
                                    <span class="ec-banner-title">UP to 70% OFF</span>
                                    <span class="ec-banner-btn"><a href="#" class="btn-primary">Shop Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-right col-sm-6">
                        <div class="ec-banner-block ec-banner-block-2 col-sm-12">
                            <div class="banner-block">
                                <img src="{{asset('tlandingPage/assets/images/banner/24.png')}}" alt="" />
                                <div class="banner-content">
                                    <span class="ec-banner-stitle">Xiaoyi YI 1080p</span>
                                    <span class="ec-banner-title">WiFi IP Camera 36</span>
                                    <span class="ec-banner-btn"><a href="#" class="btn-primary">Shop Now</a></span>
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
        style="background-image: url('{{asset('tlandingPage/assets/images/special-product/background.jpg')}}');">
        <div class="container">
            <div class="row">
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-6 col-md-12 col-sm-12 margin-b-30">
                    <div class="col-md-12 text-left">
                        <div class="section-title mb-6">
                            <h2 class="ec-title">Produk Terlariss</h2>
                        </div>
                    </div>

                    <div class="ec-exe-products product-mt-minus-15">
                        
                        @foreach ($produk_terlaris as $item)
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
                                        <div class="ec-pro-desc" align='left'>{{ Str::limit($item->deskripsi, 150) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                        @foreach ($produk_terbaru as $item)
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
                                        <div class="ec-pro-desc" align='left'>{{ Str::limit($item->deskripsi, 150) }}</div>
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

    <!--  services Section Start -->
    <section class="section ec-services-section">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('tlandingPage/assets/images/icons/service_5_1.svg')}}" class="svg_img" alt="" />
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
                            <img src="{{asset('tlandingPage/assets/images/icons/service_2.svg')}}" class="svg_img" alt="" />
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
                            <img src="{{asset('tlandingPage/assets/images/icons/service_3.svg')}}" class="svg_img" alt="" />
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
                            <img src="{{asset('tlandingPage/assets/images/icons/service_5_4.svg')}}" class="svg_img" alt="" />
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
