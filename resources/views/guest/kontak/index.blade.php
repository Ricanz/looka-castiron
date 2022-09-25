<x-guest-layout>

        <!--  offer Section Start -->
        <section class="section ec-category-section section-space-mb">
            <div class="container">
                <div class="row">
                    <h1>Kontak Kami</h1>
                </div>
            </div>
        </section>
        <!-- offer Section End -->

        <!--  Feature & Special Section Start -->
        <section class="section ec-exe-spe-section section-space-ptb-100 section-space-mt section-space-mb-100"
            style="background-image: url('{{asset('tlandingPage/assets/images/special-product/background.jpg')}}');">
            <div class="container">
                <div class="row">
                    <!--  Special Section Start -->
                    <div class="ec-spe-section col-lg-6 col-md-12 col-sm-12 margin-b-30">
                        <div class="col-md-12 text-left">
                            <div class="section-title mb-6">
                                <h2 class="ec-title">Loka Cast Iron</h2>
                            </div>
                        </div>

                        <div class="ec-spe-products">
                            <div class="ec-fs-product">
                                <div class="ec-fs-pro-inner ec-product-inner">
                                    <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                        <div class="ec-fs-pro-image">
                                            <a href="#" class="image"><img class="main-image"
                                                    src="{{asset($about->gambar)}}" alt="Product" /></a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                        <h5 class="ec-pro-title"><a href="#">LOOKA CASTIRON</a></h5>
                                        <div class="countdowntimer">
                                            <span class="ec-fs-count-desc" align="justify">
                                                {!! Str::limit($about->deskripsi, 150) !!}
                                            </span>
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
                                <h2 class="ec-title">Tuliskan Sesuatu</h2>
                            </div>
                        </div>
                        <div class="ec-group-form">
                            <div class="ec-fs-product">
                                <div class="ec-fs-pro-inner ec-product-inner">
                                    <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                        <h5 class="ec-pro-title"><a href="#">Hubungi Kami</a></h5>
                                        <form action="{{route('kontak.store')}}" method="POST">
                                        <div class="body">
                                            @csrf
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Nama :</label>
                                                <input type="text" class="form-control" name="name" placeholder="*Nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">E-Mail :</label>
                                                <input type="text" class="form-control" name="email" placeholder="*E-Mail" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Telepon :</label>
                                                <input type="number" class="form-control" name="phone" placeholder="*Telepon" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Pesan:</label>
                                                <textarea class="form-control" name="message" placeholder="*Pesan" required></textarea>
                                            </div>
                                        </div>
                                        <div class="ec-pro-actions">
                                            <button type="submit" title="Kirim" class="add-to-cart btn btn-primary">Kirim</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Feature Section End -->

                </div>
            </div>
        </section>
        <!-- Feature & Special Section End -->

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
                                <p align="center">Ketersediaan Hot Plate Ready Stock, jadi bisa langsung dikirim ke pembeli.</p>
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
</x-guest-layout>
