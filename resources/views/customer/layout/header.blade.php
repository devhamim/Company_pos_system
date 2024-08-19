<header class="ec-header">
    <!-- EC Main Menu Start -->
    <div id="ec-main-menu-desk" style="background: #000;" class="d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="row my-4">
                        <!-- Ec Header Logo Start -->
                        <div class="col-lg-2 ">
                            <div class="header-logo">
                                @if ($setting->first()->white_logo != null)
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="Site Logo" />
                                        <img class="dark-logo" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="Site Logo" style="display: none;" />
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->
                        <div class="ec-main-menu col-lg-8">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('our.services') }}">Services</a></li>
                                <li> <a href="{{ route('our.products') }}">Product</a></li>
                                <li> <a href="{{ route('our.blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Ec Header Button Start -->
                        <div class="col-lg-2">
                            @auth('customerauth')
                                <div class="ec-header-bottons text-white">
                                    <!-- Header User Start -->
                                    <div class="ec-header-user dropdown">
                                        <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                                class="fi-rr-user text-white"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                                <li><a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('customer.login') }}" style="padding: 10px 30px; font-weight: 600; color: #fff; margin-left: 20px; height: 50px; line-height: 45px; margin-top: 11px; background: #f94a29; ">Login</a>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ec Main Menu End -->
    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">My Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="javascript:void(0)">Categories</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Left sidebar 3 column</a></li>
                                    <li><a href="#">Left sidebar 4 column</a></li>
                                    <li><a href="#">Right sidebar 3 column</a></li>
                                    <li><a href="#">Right sidebar 4 column</a></li>
                                    <li><a href="#">Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Banner left sidebar 3
                                            column</a></li>
                                    <li><a href="#">Banner left sidebar 4
                                            column</a></li>
                                    <li><a href="#">Banner right sidebar 3
                                            column</a></li>
                                    <li><a href="#">Banner right sidebar 4
                                            column</a></li>
                                    <li><a href="#">Banner Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Columns Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="#">3 Columns full width</a></li>
                                    <li><a href="#">4 Columns full width</a></li>
                                    <li><a href="#">5 Columns full width</a></li>
                                    <li><a href="#">6 Columns full width</a></li>
                                    <li><a href="#">Banner 3 Columns</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">List Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Shop left sidebar</a></li>
                                    <li><a href="#">Shop right sidebar</a></li>
                                    <li><a href="#">Banner left sidebar</a></li>
                                    <li><a href="#">Banner right sidebar</a></li>
                                    <li><a href="#">Full width 2 columns</a></li>
                                </ul>
                            </li>
                            <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive"
                                        src="{{ asset('customer') }}/images/menu-banner/1.jpg" alt="manu banner"></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Products</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Product page</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Product left sidebar</a></li>
                                    <li><a href="#">Product right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product 360</a>
                                <ul class="sub-menu">
                                    <li><a href="#">360 left sidebar</a></li>
                                    <li><a href="#">360 right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product vodeo</a>
                                <ul class="sub-menu">
                                    <li><a href="#">vodeo left sidebar</a></li>
                                    <li><a href="#">vodeo right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Gallery left sidebar</a></li>
                                    <li><a href="#">Gallery right sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="header-res-lan-curr">
                <!-- Social Start -->
                <div class="header-res-social">
                    <div class="header-top-social">
                        <ul class="mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                        class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                        class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                        class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                        class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>
