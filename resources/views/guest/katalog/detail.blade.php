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
                                        @if ($produk != null)
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                            src="{{asset($produk->gambar)}}" alt="Product" /></a>
                                        @endif                                       
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Harga Rp. {{ $produk->harga }}</a></h5>
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc" align="justify">
                                            @if ($produk != null)
                                            {{ $produk->deskripsi }}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="ec-pro-actions">
                                        @if ($produk->tokopedia_link != '')
                                        <button title="Baca Selengkapnya" class="add-to-cart btn btn-success me-4">Tokopedia</button>
                                        @endif
                                        @if ($produk->shopee_link != '')
                                        <button title="Baca Selengkapnya" class="add-to-cart btn btn-warning me-4">Shopee</button>
                                        @endif
                                        @if ($produk->lazada_link != '')
                                        <button title="Baca Selengkapnya" class="add-to-cart btn btn-primary me-4">Lazada</button>
                                        @endif
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
