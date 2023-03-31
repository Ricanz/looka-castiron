<x-guest-layout>
    <!-- Main Slider Start -->
    <div class="ec-main-slider section ">
        <div class="ec-slider">
            @foreach ($banner as $item)
                <div class="ec-slide-item d-flex slide-1" style="background-image: url('{{ asset($item->gambar) }}');">
                    <div class="container align-self-center">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  Feature & Special Section Start -->
    <section class="section ec-exe-spe-section section-space-ptb-30 section-space-mt">
        <div class="container">
            <div class="row">
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 margin-b-30">
                    <div class="col-md-12 text-left">
                        <div class="section-title mb-6">
                            <h2 class="ec-title">Tentang Kami</h2>
                        </div>
                    </div>

                    <div class="ec-spe-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner ec-product-inner">
                                <div class="ec-fs-pro-image-outer col-lg-4 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image about-image">
                                        @if ($tentang != null)
                                            <a href="#" class="image"><img class="main-image"
                                                    src="{{ asset($tentang->gambar) }}" alt="Product" /></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-8 col-md-6 col-sm-6">
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc about-content" align="justify">
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

    <section class="section ec-test-section section-space-mt section-space-mb">
        <div class="container">
            <div class="row mb-10">
                <div class="col-md-12 text-left">
                    <div class="section-title mb-6">
                        <h2 class="ec-title">Kenapa kami?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="" class="partnership">
                        <li class="ec-test-item col-sm-3">
                            <div class="ec-test-inner">
                                <div class="ec-test-img mb-3">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('tlandingPage/assets/images/why-us.png') }}" width="200px" />
                                </div>
                                <div class="content">
                                    <p class="text-center"><strong>Content Writing</strong></p>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item col-sm-3">
                            <div class="ec-test-inner">
                                <div class="ec-test-img mb-3">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('tlandingPage/assets/images/why-us.png') }}" width="200px" />
                                </div>
                                <div class="content">
                                    <p class="text-center"><strong>Content Writing</strong></p>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item col-sm-3">
                            <div class="ec-test-inner">
                                <div class="ec-test-img mb-3">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('tlandingPage/assets/images/why-us.png') }}" width="200px" />
                                </div>
                                <div class="content">
                                    <p class="text-center"><strong>Content Writing</strong></p>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item col-sm-3">
                            <div class="ec-test-inner">
                                <div class="ec-test-img mb-3">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('tlandingPage/assets/images/why-us.png') }}" width="200px" />
                                </div>
                                <div class="content">
                                    <p class="text-center"><strong>Content Writing</strong></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section ec-test-section section-space-ptb-30 section-space-mb">
        <div class="container">
            <div class="row mb-10">
                <div class="col-md-12 text-left">
                    <div class="section-title mb-6">
                        <h2 class="ec-title">Our Customer</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer">

                        <div class="owl-stage"
                            style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">

                            @foreach ($testimonial as $item)
                            <div class="owl-item active" style="width: 128.906px; margin-right: 10px; background-color: white;">
                                <div class="item">
                                    <img src="{{ asset($item->foto) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav disabled">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left" style="margin-bottom: 25px">
                    <div class="section-title">
                        <h2 class="ec-title">Our Product</h2>
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
                                                <a href="{{ url('/produk/detail') . '/' . $item->slug }}"
                                                    class="image">
                                                    <img class="main-image" src="{{ asset($item->gambar) }}"
                                                        alt="Product" />
                                                    <img class="hover-image" src="{{ asset($item->gambar) }}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-opt-inner">
                                                    <a href="{{ url('/produk/detail') . '/' . $item->slug }}"
                                                        class="btn btn-primary">Lihat Produk</a>
                                                </div>
                                            </div>
                                            <h5 class="ec-pro-title"><a
                                                    href="{{ url('/produk/detail') . '/' . $item->slug }}">{{ $item->nama }}</a>
                                            </h5>
                                            <h6 class="ec-pro-stitle"><a
                                                    href="{{ url('/produk/detail') . '/' . $item->slug }}">{{ $item->kategori->nama }}</a>
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
            <center>
                <div class="load-more mt-4">
                    <a href="javascrip:void(0)" class="btn btn-primary rounded">Load More</a>
                </div>
            </center>
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
                                <img src="{{ asset('tlandingPage/assets/images/brand/brand-2.jpeg') }}"
                                    alt="" />
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
                                <a href="#" target="_blank"><img src="{{ asset($item->image) }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            // items change number for slider display on desktop

            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        });
    </script>
</x-guest-layout>
