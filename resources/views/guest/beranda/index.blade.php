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
                                @if ($item->sub_judul != null)
                                    <h2 class="ec-slide-stitle">{{ $item->sub_judul }}</h2>
                                @endif
                                @if ($item->judul != null)
                                    <h1 class="ec-slide-title">{{ $item->judul }}</h1>
                                @endif
                                @if ($item->deskripsi != null)
                                    <p>{!! $item->deskripsi !!}</p>
                                @endif
                                @if ($item->tombol_link != null)
                                    <a href="{{ $item->tombol_link }}" class="btn btn-lg btn-secondary">{{ $item->tombol_text }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Main Slider End -->
    
    <!--  Feature & Special Section Start -->
    <section class="section ec-exe-spe-section section-space-ptb-100 section-space-mt section-space-mb-100"
        style="background-image: url('{{asset('tlandingPage/assets/images/special-product/background.jpg')}}');">
        <div class="container">
            <div class="row">
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 margin-b-30">
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
                                        @if ($tentang != null)
                                        <a href="#" class="image"><img class="main-image"
                                            src="{{asset($tentang->gambar)}}" alt="Product" /></a>
                                        @endif                                       
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-pro-title"><a href="#">Creative Iron Store</a></h5>
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc" align="justify">
                                            @if ($tentang != null)
                                            {!! $tentang->deskripsi !!}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Feature & Special Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Produk Terlaris</h2>
                        <h6 class="ec-sub-title">Supplier Hot Plate terlengkap dan terpercaya “ Safe Lifetime & Cheap ”</h6>

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
                                        <h6 class="ec-pro-stitle"><a href="{{ url('/produk/detail').'/'.$item->slug }}">{{ $item->kategori->nama }}</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    {{-- <span class="new-price">{{ "Rp. ".$item->harga }}</span> --}}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">
                                            <div class="ec-pro-desc">{!! Str::limit($item->short_desc, 150) !!}</div>
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
                                <img src="{{ asset('tlandingPage/assets/images/looka/4.jpg') }}" alt="" />
                                <div class="banner-content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-right col-sm-6">
                        <div class="ec-banner-block ec-banner-block-2 col-sm-12">
                            <div class="banner-block">
                                <img src="{{ asset('tlandingPage/assets/images/brand/brand-2.jpeg') }}" alt="" />
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
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Produk Lainnya</h2>
                        <h6 class="ec-sub-title">Produk lainnya yang mungkin kamu cari.</h6>

                    </div>
                </div>

            </div>
            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            @foreach ($randomProducts as $item)
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
                                        <h6 class="ec-pro-stitle"><a href="{{ url('/produk/detail').'/'.$item->slug }}">{{ $item->kategori->nama }}</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    {{-- <span class="new-price">{{ "Rp. ".$item->harga }}</span> --}}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">
                                            <div class="ec-pro-desc">{!! Str::limit($item->short_desc, 150) !!}</div>
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

    <!--  offer Section Start -->
    {{-- <section class="section ec-offer-section section-space-mt section-space-mb">
        <div class="ec-main-slider section">
            <div class="ec-slider">
                <div class="ec-slide-item d-flex slide-1">
                    <img src="tlandingPage/assets/images/slider-brand/looka-offer.png" style="width: relative; height: relative" alt="">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- offer Section End -->
    {{-- <section class="ec-banner section section-space-p">
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
    </section> --}}

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
                                        {{-- <div class="ec-test-name">{{ $item->nama }}</div> --}}
                                        {{-- <div class="ec-test-designation">{{ $item->instansi }}</div> --}}
                                        <div class="ec-test-rating">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                                <i class="ecicon eci-star fill"></i>
                                            @endfor
                                        </div>
                                        <div class="ec-test-desc">{!! $item->deskripsi !!}</div>

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
    <!--  services Section Start -->
    <section class="section ec-services-section">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/food-grade.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2 align="center">Food Grade</h2>
                            <p align="center">LOOKA CASTIRON sudah memiliki Sertifikat ISO MJT 130421240448 (Quality Product) & Sertifikat ISO QM MJT130421240448 (Quality Management) jadi aman untuk makanan.</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/ready-stock.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2 align="center">Ready Stok</h2>
                            <p align="center">Ketersediaan Hot Plade Ready Stock, jadi bisa langsung dikirim ke pembeli.</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/price.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2 align="center">Harga</h2>
                            <p align="center">LOOKA CASTIRON memiliki harga yang terjangkau karena langsung dari produsen.</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{ asset('tlandingPage/assets/images/icons/factory.svg') }}"
                                class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2 align="center">Factory</h2>
                            <p align="center">LOOKA CASTIRON memproduksi hot plate langsung dari pabrik, jadi melewati Quality Control sebelum diterima pembeli.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt mb-4">
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="insta-auto">
                    <h2 class="d-none">Galleries</h2>
                    <!-- instagram item -->
                    @foreach ($footer_gallery as $item)
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset($item->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->
</x-guest-layout>
