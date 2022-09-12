 <!-- LEFT MAIN SIDEBAR -->
 <div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <a href="/" title="Ekka">
                <img class="ec-brand-icon" src="tadmin/assets/img/logo/ec-site-logo.png" alt="" />
                <span class="ec-brand-name text-truncate">Looka</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="">
                    <a class="sidenav-item-link" href="{{url('dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>

                <!-- Vendors -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{url('admin/aboutUs')}}">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span class="nav-text">Tentang Kami</span> 
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{url('admin/footer-gallery')}}">
                        <i class="mdi mdi-camera"></i>
                        <span class="nav-text">Footer Gallery</span> 
                    </a>
                </li>



                <!-- Category -->
                <li class="has-sub {{ request()->is('admin/kategori*') ? 'active expand' : '' }} ">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Kategori</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('admin/kategori*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('admin/kategori*') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('kategori.index')}}">
                                    <span class="nav-text">Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Products -->
                <li class="has-sub {{ request()->is('admin/produk*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Produk</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('admin/produk*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('admin/produk/create') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk.create')}}">
                                    <span class="nav-text">Tambah Produk</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/produk') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk.index')}}">
                                    <span class="nav-text">List Produk</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('gallery') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{ route('gallery.index') }}">
                                    <span class="nav-text">Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Artikel --}}
                <li class="has-sub {{ request()->is('admin/artikel*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-star-half"></i>
                        <span class="nav-text">Artikel</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('admin/artikel*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('admin/artikel/create') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('artikel.create')}}">
                                    <span class="nav-text">Tambah Artikel</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/artikel') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('artikel.index')}}">
                                    <span class="nav-text">List Artikel</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Testimonial --}}
                <li class="has-sub {{ request()->is('admin/testimonial*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-star-half"></i>
                        <span class="nav-text">Testimonial</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('admin/testimonial*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('admin/testimonial/create') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('testimonial.create')}}">
                                    <span class="nav-text">Tambah Testimoni</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/testimonial') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('testimonial.index')}}">
                                    <span class="nav-text">List Testimoni</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Banner --}}
                <li class="has-sub {{ request()->is('admin/banner*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-star-half"></i>
                        <span class="nav-text">Banner</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('admin/banner*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('admin/banner/create') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('banner.create')}}">
                                    <span class="nav-text">Tambah Banner</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('banner') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('banner.index')}}">
                                    <span class="nav-text">List Banner</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>