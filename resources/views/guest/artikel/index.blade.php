<x-guest-layout>

        <!--  category Section Start -->
        {{-- Section ini untuk ngeluarin kategori dari artikel  --}}
        <section class="section ec-category-section section-space-mb">
            <div class="container">
                <div class="row">
                    <h1>Artikel</h1>
                </div>
            </div>
        </section>
        <!--category Section End -->

        <!--  Feature & Special Section Start -->
        <section class="section ec-exe-spe-section section-space-ptb-100 section-space-mt section-space-mb-100"
            style="background-image: url('{{asset('tlandingPage/assets/images/special-product/background.jpg')}}');">
            <div class="container">
                <div class="row">
                    <!--  Special Section Start -->
                    <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 margin-b-30">
                        <div class="col-md-12 text-left">
                            <div class="section-title mb-6">
                                <h2 class="ec-title">Artikel Looka Cast Iron</h2>
                            </div>
                        </div>
                        @foreach ($articles as $item)
                        <div class="ec-spe-products mb-4">
                            <div class="ec-fs-product">
                                <div class="ec-fs-pro-inner ec-product-inner">
                                    <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                        <h3 class="ec-pro-title" align="left"><a href="product-left-sidebar.html">{{ $item->judul }}</a></h3>
                                        <div class="countdowntimer">
                                            <span class="ec-fs-count-desc" align="justify">
                                                {{ Str::limit($item->deskripsi, 320) }}
                                            </span>
                                        </div>
                                        <a href="{{ url('/artikel/detail').'/'.$item->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
                                    </div>
                                    <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                        <div class="ec-fs-pro-image">
                                            <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                    src="{{ asset($item->gambar) }}" alt="Product" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--  Special Section End -->

                </div>
            </div>
        </section>
        <!-- Feature & Special Section End -->


        <section class="section ec-instagram-section section-space-pt mb-4">
            <div class="ec-insta-wrapper">
                <div class="ec-insta-outer">
                    <div class="insta-auto">
                        <h2 class="d-none">Galleries</h2>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('tlandingPage/assets/images/looka/1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('tlandingPage/assets/images/looka/9.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('tlandingPage/assets/images/looka/2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('tlandingPage/assets/images/looka/7.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img
                                        src="{{ asset('tlandingPage/assets/images/looka/3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </section>

</x-guest-layout>
