<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta name="title" content="@yield('meta_title')">

    <meta name="keywords" content="@yield('meta_tag')">

    <meta name="description" content="@yield('meta_description')">


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

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1R7CXK501W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1R7CXK501W');
</script>

    <!-- Meta Pixel Code -->
    @if($setting->first()->fbpixel != null)
        {!! $setting->first()->fbpixel !!}
    @endif

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
  * {
    scrollbar-width: thin;
    scrollbar-color: #F94A29 #ffffff;
    border-radius: 10px;
  }
  section{
    border-radius: 0;
  }
  footer{
    border-radius: 0;
  }
  header{
    border-radius: 0;
  }
  .page-wrapper{
    border-radius: 0;
  }
  .sticky-header{
    border-radius: 0;
  }

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
  /* .text {
    text-align: justify;
  } */

  .about-section .content-column .inner-column .inner-box .content-box span {
    font-size: 25px;
}



/* megamanu navbar */

.navbar {
  overflow: hidden;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #F94A29;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #202020e8;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 99999;
  /* padding: 0 15px */
}

.dropdown-content .header {
  background: red;
  padding: 16px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  background-color: #202020e8;
}

.column a {
    float: none;
    color: rgb(255, 255, 255);
    padding: 8px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    line-height: 17px;
}
.column h5 {
  color: #F94A29 ;
}

.column a:hover {
  background-color: #F94A29 ;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

    </style>

</head>

<body>
    <div class="page-wrapper">

        <header class="main-header header-style-one" style="position: fixed">
            <div class="header-lower">
                <div class="auto-container">

                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    @if ($setting->first()->white_logo != null)
                                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo">
                                    @endif
                                </a>
                            </div>
                        </div>

                        <!-- mega manu -->
                        <div class="nav-outer" style="position: static">
                            <div class="navbar nav main-menutwo">
                                <a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                                <a href="{{ route('about') }}">About</a>
                                <div class="dropdown">
                                    <button class="dropbtn"><a style="padding: 0 5px 0 0;" href="{{ route('our.services') }}">Services</a>
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                        <div class="row">
                                            @foreach ($categorys->take(4) as $category)
                                                <div class="column">
                                                    <h5><a style="background: #F94A29" href="{{ route('services.product',$category->slug) }}">{{ $category->category_name }}</a></h5>
                                                    @foreach ($services as $service)
                                                        @if ($category->id == $service->category_id)
                                                            <a style="font-size: 12px" href="{{ route('services.product.details',$service->slug) }}">{{ $service->product_name }}</a>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('our.products') }}">Product</a>
                                <a href="{{ route('our.protfolio') }}">protfolio</a>
                                <a href="{{ route('our.blogs') }}">Blogs</a>
                                <a href="{{ route('contact') }}">Contact</a>
                            </div>
                        </div>
                        <!-- mega manu -->
                            <div class="mob_btn">
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
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo">
                                @endif
                            </a>
                        </div>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>
                    <style>
                        .navigation .submenu, .navigation .subsubmenu {
                            display: none;
                            position: absolute;
                            background-color: #3f3f3f;
                            list-style: none;
                            padding: 0;
                            z-index: 999999999;
                        }
                        .navigation li:hover > .submenu {
                            display: block;
                        }
                        .navigation .submenu li {
                            position: relative;
                        }

                        .navigation .submenu li:hover > .subsubmenu {
                            display: block;
                            left: 10%;
                            top: 0;
                            position: relative;
                        }
                        .navigation .submenu li a, .navigation .subsubmenu li a {
                            padding: 6px 6px 0 6px;
                            display: block;
                            color: #ffffff;
                            margin-bottom: 3px
                        }
                        .mobile-menu .navigation li>ul>li {
                            padding-left: 10px;
                        }

                    </style>
                    <ul class="navigation clearfix">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li>
                            <a href="{{ route('our.services') }}">Services</a>
                            <!-- Submenu -->
                            <ul class="submenu">
                                @foreach ($categorys as $category)
                                <li>
                                    <a href="{{ route('services.product',$category->slug) }}">{{ $category->category_name }}</a>
                                    <!-- Sub-submenu -->
                                    <ul class="subsubmenu">
                                        @foreach ($services as $service)
                                            @if ($category->id == $service->category_id)
                                                <li><a style="font-size: 12px" href="{{ route('services.product.details',$service->slug) }}">{{ $service->product_name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('our.products') }}">Product</a></li>
                        <li><a href="{{ route('our.protfolio') }}">Protfolio</a></li>
                        <li><a href="{{ route('our.blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
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
                                    <a href="mailto:{{ $setting->first()->email }}">
                                        <span >{{ $setting->first()->email }}</span>
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
        </header>

        {{-- main start --}}
        @yield('content')
        {{-- main end --}}

        <section class="contact-banner-two">
            <div class="auto-container">
                <div class="outer-box">
                    <h2 class="title wow fadeInLeft" data-wow-delay="400ms">Have a project? <br>Let's discuss</h2>
                    <div class="btn-box wow fadeInRight" data-wow-delay="400ms">
                        <a href="#" class="theme-btn-v2">Free Consultations<i
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
                                                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="footer Logo">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    @if ($setting->first()->about != null)
                                        <p class="text-white">{{ $setting->first()->about }} <a class="text-danger" href="{{ route('about') }}">Read More</a> </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-sm-6">
                            <div class="footer-widget links-widget pl-lg-30 pl-md--0">
                                <h4 class="widget-title">Explore</h4>
                                <div class="widget-content">
                                    <ul class="user-links style-two">
                                        <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                                        <li><a href="{{ route('contact') }}">Support</a></li>
                                        <li><a href="{{ route('about') }}">Meet Our Team</a></li>
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
                            <div class="footer-widget contact-widget">
                                <h4 class="widget-title">Found Us</h4>
                                <div class="widget-content">
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <i class="flaticon-envelope"></i>
                                        </div>
                                        <span>Mail us</span>
                                        <h6 class="title">
                                            @if ($setting->first()->email != null)
                                                <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a>
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
                                            <h6 class="title"><a target="blanck" href="https://maps.app.goo.gl/Dz3vMuukdc1pZtrz8">{{ $setting->first()->address }}</a></h6>
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
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="copyright-text">
                            @if ($setting->first()->footer != null)
                                {{ $setting->first()->footer }} | Design and Development By <a class="text-danger" href="https://nugortechit.com/">Nugortech it</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-to-top scroll-to-target arrow-btn" data-target="html" style><i
                    class="fa-sharp fa-solid fa-arrow-up"></i></div>
        </footer>

        <style>
            body {
                background-color: #eee
                }

                .chat-btn {
                    position: fixed;
                    right: 14px;
                    bottom: 30px;
                    cursor: pointer
                }

                .chat-btn .close {
                    display: none
                }

                .chat-btn i {
                    transition: all 0.9s ease
                }

                #check:checked~.chat-btn i {
                    display: block;
                    pointer-events: auto;
                    transform: rotate(180deg)
                }

                #check:checked~.chat-btn .comment {
                    display: none
                }

                .chat-btn i {
                    font-size: 22px;
                    color: #fff !important
                }

                .chat-btn {
                    width: 50px;
                    height: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 50px;
                    background-color: #F94A29;
                    color: #fff;
                    font-size: 22px;
                    border: none
                }

                .wrapper {
                    position: fixed;
                    right: 20px;
                    bottom: 100px;
                    width: 300px;
                    background-color: #fff;
                    border-radius: 5px;
                    opacity: 0;
                    transition: all 0.4s
                }

                #check:checked~.wrapper {
                    opacity: 1
                }

                .header {
                    padding: 13px;
                    background-color: #F94A29;
                    border-radius: 5px 5px 0px 0px;
                    margin-bottom: 10px;
                    color: #fff
                }

                .chat-form {
                    padding: 15px
                }

                .chat-form input,
                textarea,
                button {
                    margin-bottom: 10px
                }

                .chat-form textarea {
                    resize: none
                }

                .form-control:focus,
                .btn:focus {
                    box-shadow: none
                }

                /* .btn,
                .btn:focus,
                .btn:hover {
                    background-color: blue;
                    border: blue
                } */

                #check {
                    display: none !important
                }
                .popup_image{
                    text-align: center;
                    padding: 20px 0;
                }
                .popup_btns li a{
                    width: 100%;

                }
        </style>
        <div class="popupbtn">
            <input type="checkbox" id="check">
            <label class="chat-btn text-center" style="line-height: 50px" for="check">
                <img style="width: 20px;" src="{{ asset('frontend/call-icon.png')}}">
            </label>
            <div class="wrapper">
                <div class="text-center popuptext p-2">
                    <strong>Talk To</strong><br>
                    @if ($setting->first()->name != null)
                        <strong>{{ $setting->first()->name }}</strong>
                    @endif
                </div>
                <div class="chat-form">
                    <div class="popup_image">
                        <img src="{{ asset('frontend/customer.svg') }}" alt="">
                    </div>
                    <ul class="popup_btns" style="padding: 0; margin: 0; list-style: none;">
                        <li>
                            @if ($setting->first()->phone != null)
                                <a class="btn btn-success" href="tel: {{ $setting->first()->phone }}" style="background: #4822d4; padding: 7px 24px;">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                            <img style="width: 22px" src="{{ asset('frontend/call-icon.png') }}" alt="">
                                            <span class="elementor-button-text">Call</span>
                                        </span>
                                </a>
                            @endif
                        </li>
                        <li>
                            @if ($setting->first()->phone != null)
                                <a class="btn btn-success"
                                    href="https://api.whatsapp.com/send?phone=88{{ $setting->first()->phone }}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20Product."
                                    target="_blank" style="background: #33D422; padding: 7px 24px;">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                            <img style="width: 22px" src="{{ asset('frontend/whatsapp.png')}}">
                                            <span class="elementor-button-text">Whatsapp</span>
                                        </span>
                                </a>
                            @endif
                        </li>

                        <li>
                            <a class="btn btn-success"
                                    href="https://m.me/218057834721211?ref=Hello%20there,%20I%20found%20you%20on%20website!%20I%20would%20like%20to%20talk%20about%20your%20service%20in%20details.%20Product:%20"
                                    target="_blank" style="background: #22d4c5; padding: 7px 24px;">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon elementor-align-icon-left">
                                        <img style="width: 22px" src="{{ asset('frontend/massanger-icon.png') }}" alt="">
                                        <span class="elementor-button-text">Messanger</span>
                                    </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
