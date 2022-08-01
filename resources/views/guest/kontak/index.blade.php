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
                                            <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                    src="{{asset('tlandingPage/assets/images/special-product/1_1.jpg')}}" alt="Product" /></a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Creative Iron Store</a></h5>
                                        <div class="countdowntimer">
                                            <span class="ec-fs-count-desc" align="justify">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            </span>
                                        </div>
                                        <div class="ec-pro-actions">
                                            <button title="Baca Selengkapnya" class="add-to-cart btn btn-primary">Hubungi Kami</button>
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
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Form Hubungan</a></h5>
                                        <form action="{{route('contact_store')}}" method="POST">
                                        <div class="countdowntimer">
                                            <label for="">Nama Lengkap</label>
                                            <input class="form-control" placeholder="Masukkan nama lengkap" type="text" name="name" value="{{old('name')}}">
                                            <label for="">Email*</label>
                                            <input class="form-control" placeholder="Masukkan email" type="email" name="email" value="{{old('email')}}">
                                            <label for="">No Telepon / Whatsapp*</label>
                                            <input class="form-control" placeholder="Masukkan nomor" type="number" name="phone" value="{{old('phone')}}">
                                            <label for="">Kritik / Saran / Masukan *</label>
                                            <textarea class="form-control" placeholder="Masukkan Kritik / Saran / Masukan" name="message" value="{{old('message')}}" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="ec-pro-actions">
                                            <button title="Baca Selengkapnya" class="add-to-cart btn btn-primary">Kirim</button>
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
                        <h2 class="d-none">Instagram</h2>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('tlandingPage/assets/images/instragram-image/1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('tlandingPage/assets/images/instragram-image/2.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('tlandingPage/assets/images/instragram-image/3.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('tlandingPage/assets/images/instragram-image/4.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('tlandingPage/assets/images/instragram-image/5.jpg')}}" alt="">

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
