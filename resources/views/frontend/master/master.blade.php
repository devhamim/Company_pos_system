<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @if($setting->first()->title != null)
        <title>{{$setting->first()->title}}</title>
    @endif
    @if ($setting->first()->meta_title != null)
        <meta name="title" content="{{$setting->first()->meta_title}}">
    @endif
    @if ($setting->first()->meta_tag != null)
        <meta name="keywords" content="{{$setting->first()->meta_tag}}">
    @endif
    @if ($setting->first()->meta_description != null)
        <meta name="description" content="{{$setting->first()->meta_description}}">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    @if ($setting->first()->favicon !== null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/x-icon">
    @endif

    <!-- Meta Pixel Code -->
    @if($setting->first()->fbpixel != null)
        {!! $setting->first()->fbpixel !!}
    @endif
    {{-- <!-- End Meta Pixel Code --> --}}

    <!-- googletag Code -->
    @if($setting->first()->googletag != null)
        {!! $setting->first()->googletag !!}
    @endif
    <!-- End googletag Code -->
    <style>
        #popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            /* width: 50%;
            height: 50%; */
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
        #popup-container h3{
            position: fixed;
            top: 50%;
            left: 35%;
        }
        .header_icon{
            font-size: 27px;
            padding: 0 10px;
            color: #fff;
        }
        .header_icon button{
            background: transparent;
            color: #fff;
        }
        .ec-header-user .dropdown-toggle::after{
            display: none;
        }


                /* ===== Scrollbar CSS ===== */
  /* Firefox */
  * {
    scrollbar-width: thin;
    scrollbar-color: #F94A29 #ffffff;
  }

  /* Chrome, Edge, and Safari */
  *::-webkit-scrollbar {
    width: 10px;
  }

  *::-webkit-scrollbar-track {
    background: #ffffff;
  }

  *::-webkit-scrollbar-thumb {
    background-color: #F94A29;
    border-radius: 55px;
    border: 30px outset #ffffff;
  }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <header class="main-header header-style-one">
            <div class="header-lower">
                <div class="auto-container">

                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    @if ($setting->first()->white_logo != null)
                                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt title="Tronis">
                                    @endif
                                </a>
                            </div>
                        </div>

                        <div class="nav-outer">
                            <nav class="nav main-menu">
                                <ul class="navigation">
                                    <li ><a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('our.services') }}">Services</a></li>
                                    <li> <a href="{{ route('our.products') }}">Product</a></li>
                                    <li> <a href="{{ route('our.blogs') }}">Blogs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                            <div class="mob_btn">
                                {{-- <div class="search-btn">
                                    <a href="#" class="search"><i class="flaticon-search-3"></i></a>
                                </div> --}}
                                    @auth('customerauth')
                                        <div class="header_icon">
                                            <div class="ec-header-user dropdown">
                                                <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="fa-regular fa-user"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <div class="header_icon">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                        <div class="header_icon">
                                            <i class="fa-regular fa-bag-shopping"></i>
                                        </div> --}}
                                    @else
                                        @auth('customerreg')
                                            <div class="header_icon">
                                                <div class="ec-header-user dropdown">
                                                    <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                                        <i class="fa-regular fa-user"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a class="dropdown-item" href="{{ route('panding.customer.dashboard') }}">Dashboard</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{-- <div class="header_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </div>
                                            <div class="header_icon">
                                                <i class="fa-regular fa-bag-shopping"></i>
                                            </div> --}}
                                        @else
                                            <div class="btn">
                                                <a href="{{ route('customer.login') }}" class="theme-btn">login</a>
                                            </div>
                                        @endauth

                                    @endauth
                                <div class="mobile-nav-toggler">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>

                <nav class="menu-box">
                    <div class="upper-box">
                        <div class="nav-logo">
                            <a href="{{url('/')}}">
                                @if ($setting->first()->white_logo != null)
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt title>
                                @endif
                            </a>
                        </div>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>
                    <ul class="navigation clearfix">

                    </ul>
                    <ul class="contact-list-one">
                        <li>

                            <div class="contact-info-box">
                                <i class="icon lnr-icon-phone-handset"></i>
                                <span class="title">Call Now</span>
                                @if ($setting->first()->phone != null)
                                    <a href="tel:{{ $setting->first()->phone }}">{{ $setting->first()->phone }}</a>
                                @endif
                            </div>
                        </li>
                        <li>

                            <div class="contact-info-box">
                                <span class="icon lnr-icon-envelope1"></span>
                                <span class="title">Send Email</span>
                                @if ($setting->first()->email != null)
                                    <a href="{{ $setting->first()->email }}">
                                        <span class="__cf_email__" data-cfemail="ff979a938fbf9c90928f9e9186d19c9092">{{ $setting->first()->email }}</span>
                                    </a>
                                @endif

                            </div>
                        </li>
                        <li>

                            <div class="contact-info-box">
                                <span class="icon lnr-icon-clock"></span>
                                <span class="title">Send Email</span>
                                Sat - Thu 10:00 - 6:00, Friday - CLOSED
                            </div>
                        </li>
                    </ul>
                    <ul class="social-links">
                        <li><a href="https://www.linkedin.com/company/nugortechitbd/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/nugortechitcom" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.tiktok.com/@nugortechitbd" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="https://www.youtube.com/@NugortechIT" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.behance.net/nugortech_it" target="_blank"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </nav>
            </div>

            <div class="search-popup">
                <span class="search-back-drop"></span>
                <button class="close-search"><span class="fa fa-times"></span></button>
                <div class="search-inner">
                    <form method="post" action="https://html.kodesolution.com/2023/digitex-html/index.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value placeholder="Search..." required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">

                        <div class="logo">
                            <a href="{{url('/')}}" title>
                                @if ($setting->first()->white_logo != null)
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt title>
                                @endif
                            </a>
                        </div>
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">

                                </ul>
                            </div>
                        </nav>
                        <div class="mob_btn" style="display: flex; align-items: center;">
                            {{-- <div class="search-btn">
                                <a href="#" class="search"><i class="flaticon-search-3"></i></a>
                            </div> --}}
                                @auth('customerauth')
                                    <div class="header_icon">
                                        <div class="ec-header-user dropdown">
                                            <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="fa-regular fa-user"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="header_icon">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="header_icon">
                                        <i class="fa-regular fa-bag-shopping"></i>
                                    </div> --}}
                                @else
                                    <div class="btn">
                                        <a href="{{ route('customer.login') }}" class="theme-btn">login</a>
                                    </div>
                                @endauth
                            <div class="mobile-nav-toggler" style="margin-top: -6%;">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        {{-- main start --}}
        @yield('content')
        {{-- main end --}}

        <section class="clients-section">
            <div class="auto-container">
                <ul class="clients-carousel">
                    <li class="client-block-two"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1-1.png" alt></a> </li>
                    <li class="client-block-two"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1-2.png" alt></a> </li>
                    <li class="client-block-two"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1-3.png" alt></a> </li>
                    <li class="client-block-two"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1-4.png" alt></a> </li>
                    <li class="client-block-two"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1-5.png" alt></a> </li>
                </ul>
            </div>
        </section>

        <section class="contact-banner-two">
            <div class="auto-container">
                <div class="outer-box">
                    <h2 class="title wow fadeInLeft" data-wow-delay="400ms">Have a project? <br>Let's discuss</h2>
                    <div class="btn-box wow fadeInRight" data-wow-delay="400ms">
                        <a href="page-contact.html" class="theme-btn-v2">Free Consultations<i
                                class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i></a>
                        @if ($setting->first()->phone != null)
                            <a href="tel:{{ $setting->first()->phone }}" class="theme-btn-v2 two">
                                {{ $setting->first()->phone }}
                                <i class="fa-sharp far fa-phone ml-10 font-size-18"></i>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </section>

        <footer class="main-footer footer-style-one">

            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">

                        <div class="footer-column col-lg-3 col-sm-6">
                            <div class="footer-widget contact-widget">
                                <div class="logo-box">
                                    <div class="logo">
                                        <a href="{{url('/')}}">
                                            @if ($setting->first()->white_logo != null)
                                                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt title="Tronis">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <i class="flaticon-envelope"></i>
                                        </div>
                                        <span>Mail us</span>
                                        <h6 class="title">
                                            @if ($setting->first()->email != null)
                                                <a href="{{ $setting->first()->email }}" class="__cf_email__" data-cfemail="b1d8dfd7def1c8dec4c3dcd0d8dd9fd2dedc">{{ $setting->first()->email }}</a>
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <i class="flaticon-call-3"></i>
                                        </div>
                                        <span>Contect</span>
                                        @if ($setting->first()->phone != null)
                                            <a href="tel:{{ $setting->first()->phone }}" class="title">{{ $setting->first()->phone }}</a>
                                        @endif
                                    </div>
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <i style="padding-top: 25%" class="lnr-icon-location"></i>
                                        </div>
                                        <span>Address</span>
                                        @if ($setting->first()->address != null)
                                            <h6 class="title">{{ $setting->first()->address }}</h6>
                                        @endif
                                    </div>
                                    <ul class="social-icons">
                                        <li><a href="https://www.linkedin.com/company/nugortechitbd/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://www.facebook.com/nugortechitcom" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@nugortechitbd" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                        <li><a href="https://www.youtube.com/@NugortechIT" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="https://www.behance.net/nugortech_it" target="_blank"><i class="fa-brands fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-sm-6">
                            <div class="footer-widget links-widget pl-lg-30 pl-md--0">
                                <h4 class="widget-title">Our Services</h4>
                                <div class="widget-content">
                                    <ul class="user-links style-two">
                                        <li><a href="#">Digital marketing</a></li>
                                        <li><a href="#">Branding design</a></li>
                                        <li><a href="#">Product Design</a></li>
                                        <li><a href="#">Web development</a></li>
                                        <li><a href="#">App Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-sm-6">
                            <div class="footer-widget links-widget two pl-lg-30 pl-md--0">
                                <h4 class="widget-title">Useful Link</h4>
                                <div class="widget-content">
                                    <ul class="user-links style-two">
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('our.services') }}">Our Services</a></li>
                                        <li><a href="{{ route('our.products') }}">Our Product</a></li>
                                        <li><a href="{{ route('our.blogs') }}">Our Blog</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-sm-6">
                            <div class="footer-widget about-widget">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="text">Corporate clients and leisure for travelers has been relying </div>
                                <div class="subscribe-form-two">
                                    <form method="post" action="{{ route('subscribe.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" placeholder="Enter your email here..." required>
                                            <button type="submit" class="theme-btn">
                                                <span class="btn-title">Subscribe Now</span><i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                                            </button>
                                            <div class="mt-2">
                                                @if (session('subscribe'))
                                                    <strong class="text-success">{{ session('subscribe') }}</strong>
                                                @endif
                                                @error('email')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="copyright-text">
                            @if ($setting->first()->footer != null)
                                {{ $setting->first()->footer }}| Design and Development By <a class="text-danger" href="https://nugortechit.com/">Nugortech it</a>. All Rights Reserved.
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-to-top scroll-to-target arrow-btn" data-target="html" style><i
                    class="fa-sharp fa-solid fa-arrow-up"></i></div>
        </footer>
        {{-- <div id="popup-container">
            <!-- Add your popup content here -->
            <h3>This site is under construction</h3>
            <img src="{{ asset('frontend/images/121.jpg') }}" alt="">
        </div> --}}

    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Show the popup after 10 seconds
            setTimeout(function () {
                document.getElementById('popup-container').style.display = 'block';
            }, 1); // 10 seconds in milliseconds

            // Hide the popup when the user clicks on it
            document.getElementById('popup-container').addEventListener('click', function () {
                this.style.display = 'none';
            });
        });
    </script> --}}



    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{asset('frontend')}}/js/jquery.js"></script>
    <script src="{{asset('frontend')}}/js/popper.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/slick.min.js"></script>
    <script src="{{asset('frontend')}}/js/slick-animation.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.fancybox.js"></script>
    <script src="{{asset('frontend')}}/js/progress-bar.js"></script>
    <script src="{{asset('frontend')}}/js/wow.js"></script>
    <script src="{{asset('frontend')}}/js/appear.js"></script>
    <script src="{{asset('frontend')}}/js/mixitup.js"></script>
    <script src="{{asset('frontend')}}/js/script.js"></script>

    @yield('footer_script')

</body>

</html>
