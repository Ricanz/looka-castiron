<x-guest-layout>

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-mb">
        <div class="container">
            <div class="row">
                <h1>Katalog</h1>
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
                                            <a href="{{ url('/produk/detail').'/'.$item->slug }}" class="image">
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
                                                <a href="{{ url('/produk/detail').'/'.$item->slug }}" class="btn btn-primary">Lihat Produk</a>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="{{ url('/produk/detail').'/'.$item->slug }}">{{ $item->nama }}</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="#">{{ $item->kategori->nama }}</a>
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
                                <img src="{{ asset('tlandingPage/assets/images/looka/16.png') }}" alt="" />
                                <div class="banner-content">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-right col-sm-6">
                        <div class="ec-banner-block ec-banner-block-2 col-sm-12">
                            <div class="banner-block">
                                <img src="{{ asset('tlandingPage/assets/images/looka/15.png') }}" alt="" />
                                <div class="banner-content">
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
                                        <a href="{{ url('/produk/detail').'/'.$item->slug }}" class="image">
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
                                    <h5 class="ec-pro-title"><a href="{{ url('/produk/detail').'/'.$item->slug }}">{{ $item->nama }}</a></h5>
                                    <h6 class="ec-pro-stitle"><a href="#">{{ $item->kategori->nama }}</a>
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
                                        <a href="{{ url('/produk/detail').'/'.$item->slug }}" class="image">
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
                                    <h5 class="ec-pro-title"><a href="{{ url('/produk/detail').'/'.$item->slug }}">{{ $item->nama }}</a></h5>
                                    <h6 class="ec-pro-stitle"><a href="#">{{ $item->kategori->nama }}</a>
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
                            <img src="{{ asset('tlandingPage/assets/images/icons/service_5_1.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>kualitas</h2>
                            <p>memilih iron kualitas terbaik yang cocok untuk makanan</p>
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
                            <h2>kontak kami</h2>
                            <p>seller dapat dihubungi anytime</p>
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
                            <h2>online shopping</h2>
                            <p>temukan kami di online shop kesayangan kalian</p>
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
                            <h2>harga terjangkau</h2>
                            <p>harga dan kualitas sejajar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->
</x-guest-layout>
