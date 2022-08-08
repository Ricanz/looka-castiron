    <!-- Header start  -->
    <header class="ec-header">
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center ec-header-logo ">
                            <div class="header-logo">
                                <a href="/"><img src="{{ asset('tlandingPage/assets/images/favicon/looka-logo.jpeg') }}"
                                        alt="Site Logo" /><img class="dark-logo"
                                        src="{{ asset('tlandingPage/assets/images/logo/dark-logo-5.png') }}"
                                        alt="Site Logo" style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        {{-- <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="{{route('search')}}" method="GET">
                                    <input class="form-control" placeholder="Cari Produk..." type="text" name="cari" value="{{old('cari')}}">
                                    <button class="search_submit" type="submit"><i
                                            class="ecicon eci-search"></i></button>
                                </form>
                            </div>
                        </div> --}}
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center ec-offer">
                            <div class="ec-offer-content-inner">
                                <span class="ec-offer-btn"><a href="{{ url('/contact') }}" class="btn btn-primary">HUBUNGI KAMI</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <div class="ec-search-select-inner">
                                <div class="ec-search-cat-title">All</div>
                                <ul class="ec-search-cat-block">
                                    <li><a href="{{ url('/') }}">Beranda</a></li>
                                    <li><a href="{{ url('/about-us') }}">Tentang</a></li>
                                    <li><a href="{{ url('/products') }}">Katalog</a></li>
                                    <li><a href="{{ url('/article') }}">Artikel</a></li>
                                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col ec-category-block">
                        <div class="ec-cat-menu">
                            <div class="ec-category-toggle">
                                <span class="ec-category-icon"></span>
                                <span class="ec-category-title">Semua Kategori</span>
                            </div>
                            <div class="ec-category-content">
                                <div id="ec-category-menu" class="ec-category-menu">
                                    <ul class="ec-category-wrapper">
                                        @foreach ($kategori as $item)
                                            <li><a title="" class="ec-cat-menu-link" href="{{route('kategori_produk',$item->id)}}">{{$item->nama}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ec-main-menu-block align-self-center d-none d-lg-block p-0">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li><a href="{{ url('/about-us') }}">Tentang</a></li>
                                <li><a href="{{ url('/products') }}">Katalog</a></li>
                                <li><a href="{{ url('/article') }}">Artikel</a></li>
                                <li><a href="{{ url('/contact') }}">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col ec-spe-offer-block">
                        <div class="ec-spe-offer-link">
                            <a href="#" class="ec-spe-offer-title">Creative Iron Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
    </header>
    <!-- Header End  -->
