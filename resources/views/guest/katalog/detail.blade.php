<!--========================================================= 
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.1
    Copyright 2021-2022
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
     
    <title>Looka Cast Iron</title>
    <meta name="keywords" content="hotplate, shopping, food" />
    <meta name="description" content="Looka Castiron adalah toko penyedia hotplate dengan kualitas terbaik dan harga terjangkau">
    <meta name="author" content="looka">
     
    <!-- site Favicon -->
    <link rel="icon" href="{{asset('tlandingPage/assets/images/favicon/favicon.png')}}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('tlandingPage/assets/images/favicon/favicon.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('tlandingPage/assets/images/favicon/favicon.png')}}" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/vendor/ecicons.min.css')}}" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/countdownTimer.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/bootstrap.css')}}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/responsive.css')}}" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{asset('tlandingPage/assets/css/backgrounds/bg-4.css')}}">
    
</head>
<body class="product_page">
    {{-- <div id="ec-overlay"><span class="loader_img"></span></div> --}}

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Detail Produk</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="ec-breadcrumb-item active">Produk</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="https://lookacastiron.com/tlandingPage/assets/images/looka/15.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="https://lookacastiron.com/storage/Produk/Produk_084021.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{ $produk->nama }}</h5>
                                        <div class="ec-single-desc">
                                            {!! $produk->deskripsi !!}
                                        </div>
                                        <div class="ec-single-qty">
                                            {{-- <span class="ec-single-ps-title">Kunjungi kami</span> --}}
                                            @if ($produk->shopee_link != null)
                                                <div class="ec-single-cart ">
                                                    <a href="{{ $produk->shopee_link }}" class="btn btn-warning">Shopee</a>
                                                </div>
                                            @endif
                                            @if ($produk->tokopedia_link != null)
                                                <div class="ec-single-cart ">
                                                    <a href="{{ $produk->tokopedia_link }}" class="btn btn-success">Tokopedia</a>
                                                </div>
                                            @endif
                                            @if ($produk->lazada_link != null)
                                                <div class="ec-single-cart ">
                                                    <a href="{{ $produk->lazada_link }}" class="btn btn-primary">Lazada</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- product details description area end -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Kategori</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    @foreach ($category as $item)
                                    <li>
                                        <a href="{{route('kategori_produk',$item->id)}}" style="text-decoration: none">
                                            <div class="ec-sidebar-block-item">{{ $item->nama }}</div>
                                        </a>
                                    </li>
                                        
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->
    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Katalog lainnya</h2>
                        <h2 class="ec-title">Katalog lainnya</h2>
                        {{-- <p class="sub-title">Browse The Collection of Top Products</p> --}}
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
                @foreach ($products as $item)
                    
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{ asset($item->gambar) }}" alt="Product" />
                                    <img class="hover-image"
                                        src="{{ asset($item->gambar) }}" alt="Product" />
                                </a>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="{{ $item->slug }}">{{ $item->nama }}</a></h5>
                            <div class="ec-pro-list-desc">
                                {!! Str::limit($item->deskripsi, 150, '...') !!}
                            </div>
                            {{-- <span class="ec-price">
                                <span class="new-price">$22.00</span>
                            </span> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product end -->

    <!-- Footer Start -->    <!-- Footer Start -->
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
                                <p>Creative Iron Store Looka Cast Iron</p>
                                <h4 class="ec-footer-heading">Hubungi kami!</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">
                                            <span class="call-desc">
                                                <span>Hubungi kami! 24/7!</span>
                                                <span><a href="tel:+6282136361350">+6282136361350</a></span>
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
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Online Shop</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="https://shopee.co.id/looka.castiron?categoryId=100636&itemId=12902595184">
                                            <img src="{{ asset('tlandingPage/assets/images/shopee-logo.png') }}" alt="">
                                        </a></li>
                                        <li class="ec-footer-link"><a href="https://www.tokopedia.com/megadunia">
                                            <img src="{{ asset('tlandingPage/assets/images/tokopedia-logo.png') }}" alt="">
                                        </a></li>
                                        <li class="ec-footer-link"><a href="https://www.lazada.co.id/shop/looka-castiron/?spm=a2o4j.pdp_revamp.seller.1.32e130c3wHPF0H&itemId=6232286715&channelSource=pdp">
                                            <img src="{{ asset('tlandingPage/assets/images/lazada-logo.jpeg') }}" alt="">
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-news">
                            <div class="ec-footer-widget ec-footer-social">
                                <h4 class="ec-footer-heading">Follow Us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="list-inline-item"><a href="https://www.instagram.com/looka.castiron/"><i class="ecicon eci-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/looka.castiron/"><i
                                                    class="ecicon eci-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/looka.castiron/"><i class="ecicon eci-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/looka.castiron/"><i class="ecicon eci-twitter"></i></a>
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

    <!-- Footer Area End -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="6285713107296"
                            data-message="Halo admin..">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="{{asset('tlandingPage/assets/images/whatsapp/profile_01.jpg')}}" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Looka Castiron</span>
                                    <p>Looka is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="{{asset('tlandingPage/assets/images/common/whatsapp.png')}}" alt="whatsapp icon" />
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->


    <!-- Vendor JS -->
    <script src="{{asset('tlandingPage/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('tlandingPage/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <!-- Google translate Js -->
    <script src="{{asset('tlandingPage/assets/js/vendor/google-translate.js')}}"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="{{asset('tlandingPage/assets/js/vendor/index.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/main.js')}}"></script>

</body>
</html>