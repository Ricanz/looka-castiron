    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="/"><img src="{{ asset('tlandingPage/assets/images/favicon/looka-logo.jpeg') }}"
                                            alt=""><img class="dark-footer-logo" src="{{asset('tlandingPage/assets/images/logo/dark-logo-5.png')}}"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <h4 class="ec-footer-heading">Ask Me questions</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">
                                            <span class="call-img"><img src="{{asset('tlandingPage/assets/images/icons/call_5.svg')}}"
                                                    class="svg_img foo_img" alt="" /></span>
                                            <span class="call-desc">
                                                <span>Got questions? Call us 24/7!</span>
                                                <span><a href="tel:+80080018588">(800) 8001-8588</a>, <a href="tel:+0600874548">(0600) 874 548</a></span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-info">
                            {{-- <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Menu</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="{{ url('/about-us') }}">Tentang Kami</a></li>
                                        <li class="ec-footer-link"><a href="{{ url('/products') }}">Katalog</a></li>
                                        <li class="ec-footer-link"><a href="{{ url('/article') }}">Artikel </a></li>
                                        <li class="ec-footer-link"><a href="{{ url('/contact') }}">Kontak</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Menu</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="{{ url('/about-us') }}">Tentang Kami</a></li>
                                        <li class="ec-footer-link"><a href="{{ url('/products') }}">Katalog</a></li>
                                        <li class="ec-footer-link"><a href="{{ url('/article') }}">Artikel </a></li>
                                        <li class="ec-footer-link"><a href="{{ url('/contact') }}">Kontak</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 ec-footer-news">
                            <div class="ec-footer-widget ec-footer-social">
                                <h4 class="ec-footer-heading">Follow Us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="ecicon eci-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer Copyright Start -->
                        <div class="col footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">© {{ now()->year }} <a class="site-name" href="/">Looka Castiron</a>. All Rights Reserved
                                </div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    {{-- <img src="{{asset('tlandingPage/assets/images/icons/payment.png')}}" alt=""> --}}
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
