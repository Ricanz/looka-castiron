<x-guest-layout>

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
                                        @if ($artikel !== null)
                                        <a href="#" class="image"><img class="main-image"
                                            src="{{asset($artikel->gambar)}}" alt="Artikel" /></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-pro-title"><a href="#"></a></h5>
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc" align="justify">
                                            {!! $artikel->deskripsi !!}
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
    <!-- offer Section End -->
</x-guest-layout>
