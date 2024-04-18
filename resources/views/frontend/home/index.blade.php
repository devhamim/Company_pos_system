@extends('frontend.master.master')
@section('content')
<section class="banner-section">
    <div class="banner-slider">
        @foreach ($banners as $banner)
            <div class="banner-slide">
                <img src="{{asset('uploads/banner')}}/{{ $banner->banner_image }}" alt>
                <div class="outer-box">
                    <div class="auto-container">
                        <div class="content-box">
                            <h1 data-animation-in="fadeInLeft" data-delay-in="0.2">{{ $banner->banner_title }}</h1>
                            <div data-animation-in="fadeInUp" data-delay-in="0.3" class="text">{{ $banner->banner_desp }}</div>
                            <div class="btn-box">
                                <a href="page-services.html" data-animation-in="fadeInUp" data-delay-in="0.2" class="theme-btn">Our services
                                    <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                                </a>
                                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn" data-fancybox="gallery" data-caption data-animation-in="fadeInLeft" data-delay-in="0.4">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                    <span>Play intro</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="banner-social">
        <h4>Follow us</h4>
        <ul>
            <li><a href="https://www.tiktok.com/@nugortechitbd" title><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.behance.net/nugortech_it" title><i class="fab fa-behance"></i></a></li>
            <li><a href="https://www.linkedin.com/company/nugortechitbd/" title><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.facebook.com/nugortechitcom" title><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.youtube.com/@NugortechIT" title><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
</section>

<section class="service-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>WE WILL PROVIDE YOU THE <br>BEST SERVICE</h2>
        </div>
        <div class="row">
            @foreach ($categoryy->take(8) as $category)
                <div class="service-block col-lg-3 col-sm-6 col-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('uploads/category')}}/{{$category->category_image}}" alt="">
                        </div>
                        <div class="content-box">
                            <h3 class="title"><a href="{{ route('services.product', $category->id) }}">{{$category->category_name}}</a></h3>
                            <div class="text">{{$category->category_desp}}</div>
                            <a href="{{ route('services.product', $category->id) }}" data-animation-in="fadeInUp" data-delay-in="0.4"
                                class="theme-btn ser-btn">Learn more <i class="flaticon-arrow-pointing-to-right btn-icon ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image overlay-anim"><img style="ru" src="{{asset('frontend')}}/images/resource/about1-1.webp" alt></figure>
                        <div class="play-box">
                            <figure class="image-2 overlay-anim"><img src="{{asset('frontend')}}/images/resource/about1-2.webp" alt>
                            </figure>
                            <a title href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery"
                                data-caption>
                                <i class="icon fa fa-play"></i>
                            </a>
                        </div>
                        <div class="exp-box">
                            <div class="icon-box">
                                <img src="{{asset('frontend')}}/images/resource/tv.png" alt>
                            </div>
                            <h4 class="title">MARKETING SOLUTION</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>Get the better experience & grow your business with us</h2>
                        <div class="text">Unlock unparalleled growth with our professional digital marketing agency. Elevate your business experience with strategic campaigns, cutting-edge techniques, and a results-driven approach. Trust us to optimize your online presence, engage your audience, and drive success. Experience the difference in business growth with our expertise at your service.</div>
                    </div>
                    <div class="inner-box">
                        <div class="content-box">
                            <span>7+</span>
                            <h6 class="title">Years of expericen</h6>
                        </div>
                        <div class="content-box">
                            <span>50K+</span>
                            <h6 class="title">Successful project </h6>
                        </div>
                        <div class="content-box">
                            <span>10K+</span>
                            <h6 class="title">Happy customer </h6>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="{{ route('about') }}" class="theme-btn-v2">Get started <i
                                class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i></a>
                        <div class="contact-btn">
                            @if ($setting->first()->phone != null)
                                <i class="flaticon-telephone-1"></i>
                                <span>Call us</span>
                                <h6 class="title">{{ $setting->first()->phone }}</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>our working process</h2>
        </div>
        <div class="row">
            <div class="process-block col-lg-3 col-sm-6 col-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-creativity-1"></i>
                    </div>
                    <div class="content-box">
                        <h4 class="title">Find new Ideas</h4>
                        <div class="text">added activity to beta test. the digital divide.</div>
                    </div>
                </div>
            </div>

            <div class="process-block col-lg-3 col-sm-6 col-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-workers"></i>
                    </div>
                    <div class="content-box">
                        <h4 class="title">Analysis</h4>
                        <div class="text">added activity to beta test. the digital divide.</div>
                    </div>
                </div>
            </div>

            <div class="process-block col-lg-3 col-sm-6 col-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-winner"></i>
                    </div>
                    <div class="content-box">
                        <h4 class="title">prototype</h4>
                        <div class="text">added activity to beta test. the digital divide.</div>
                    </div>
                </div>
            </div>

            <div class="process-block col-lg-3 col-sm-6 col-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-web-programming"></i>
                    </div>
                    <div class="content-box">
                        <h4 class="title">Test & Launch</h4>
                        <div class="text">added activity to beta test. the digital divide.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Recently <br>Completed Portfolio</h2>
            <div class="text">We Help You Build An Online Brand. Porta nibh venenatis cras sed felis eget aliquet sagittis. Urna nec tincidunt praesent.</div>
        </div>
        <div class="slider-btn">
            <button class="prev-btn"><span><i class="flaticon-arrow-pointing-to-right btn-icon"></i></span></button>
            <button class="next-btn"><span><i class="flaticon-arrow-pointing-to-right btn-icon"></i></span></button>
        </div>
    </div>
    <div class="row project-slider">
        @foreach ($portfolios as $portfolio)
        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="{{ route('portfolio.details', $portfolio->slug) }}">
                        <img src="{{asset('uploads/protfolio')}}/{{ $portfolio->preview_image }}" alt></a>
                    </figure>
                    <figure class="image-2"><a href="{{ route('portfolio.details', $portfolio->slug) }}">
                        <img src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a>
                    </figure>
                </div>
                <div class="content-box">
                    <span>{{ $portfolio->project_type }}</span>
                    <h6 class="title"><a href="{{ route('portfolio.details', $portfolio->slug) }}">{{ $portfolio->title }}</a></h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="testimonial-section">
    <div class="inner-container">
        <div class="sec-title text-center">
            <h2>WHAT’s TALKING about<br> our coustomer?</h2>
        </div>
        <div class="row testi-slider">
            @foreach ($testmonials as $testmonial)
                <div class="testimonial-block col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-quote-1"></i>
                        </div>
                        <div class="content-box">
                            <div class="text">{{ $testmonial->description }}</div>
                            <div class="auther-info">
                                <img src="{{asset('uploads/testimonial')}}/{{ $testmonial->image }}" alt>
                                <div class="info-box">
                                    <h6 class="title">{{ $testmonial->name }}</h6>
                                    <span>{{ $testmonial->designation }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="choose-us-section">
    <div class="auto-container">
        <div class="row">

            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>Why you should choose our services?</h2>
                        <div class="text">phasellus egestas tellus rutrum. Facilisi morbi tempus
                            iaculis urna id for volutpat lacus. Vel fringilla est ullamcorper eget nulla.
                            Placerat orci nulla pellentesque dignissim. Cursus euismod quis viverra nibh
                            pulvinar.
                        </div>
                    </div>
                    <div class="list-sec">
                        <ul class="list">
                            <li><i class="fa-solid fa-circle-check"></i>Make website without a coding</li>
                            <li><i class="fa-solid fa-circle-check"></i>creative branding solation</li>
                            <li><i class="fa-solid fa-circle-check"></i>Business strategy Solation</li>
                        </ul>
                        <ul class="list">
                            <li><i class="fa-solid fa-circle-check"></i>Make website without a coding</li>
                            <li><i class="fa-solid fa-circle-check"></i>creative branding solation</li>
                            <li><i class="fa-solid fa-circle-check"></i>Business strategy Solation</li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="choose-block col-xl-6 col-lg-12 col-md-6">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-title"></i>
                                </div>
                                <h6 class="title">best Consulting and Strategy</h6>
                            </div>
                        </div>
                        <div class="choose-block col-xl-6 col-lg-12 col-md-6">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-creativity"></i>
                                </div>
                                <h6 class="title">search engine optimization</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image overlay-anim"><a href="page-about.html"><img
                                    src="{{asset('frontend')}}/images/resource/choose1-1.jpg" alt></a></figure>
                        <div class="exp-box bounce-y">
                            <h6 class="title">7+</h6>
                            <div class="text">Years of
                                experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Website Design & <br>development Packages</h2>
        </div>
        <div class="row">

            <div class="pricing-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper-box">
                        <span>Basic Plan</span>
                        <div class="content-box">
                            <h2 class="title">$59.99</h2>
                            <div class="text">per user <br>per month</div>
                        </div>
                    </div>
                    <div class="text v2">What you'll get</div>
                    <div class="list-sec">
                        <ul class="list">
                            <li><i class="fa-solid fa-circle-check"></i>Landing page (25 pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>HTML+CSS design (30 pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>WordPress Themes (20 Pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>Social Media Marketing</li>
                            <li><i class="fa-solid fa-circle-check"></i>Online support (24/7)</li>
                        </ul>
                        <a href="page-pricing.html" class="theme-btn-v2">Choose Package
                            <i class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pricing-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper-box">
                        <span>STANDARD PLAN</span>
                        <div class="content-box">
                            <h2 class="title">$89.99</h2>
                            <div class="text">per user <br>per month</div>
                        </div>
                    </div>
                    <div class="text v2">What you'll get</div>
                    <div class="list-sec">
                        <ul class="list">
                            <li><i class="fa-solid fa-circle-check"></i>Landing page (25 pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>HTML+CSS design (30 pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>WordPress Themes (20 Pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>Social Media Marketing</li>
                            <li><i class="fa-solid fa-circle-check"></i>Online support (24/7)</li>
                        </ul>
                        <a href="page-pricing.html" class="theme-btn-v2">Choose Package<i
                                class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i></a>
                    </div>
                </div>
            </div>

            <div class="pricing-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper-box">
                        <span>PLATINUM PLAN</span>
                        <div class="content-box">
                            <h2 class="title">$99.99</h2>
                            <div class="text">per user <br>per month</div>
                        </div>
                    </div>
                    <div class="text v2">What you'll get</div>
                    <div class="list-sec">
                        <ul class="list">
                            <li><i class="fa-solid fa-circle-check"></i>Landing page (25 pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>HTML+CSS design (30 pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>WordPress Themes (20 Pages)</li>
                            <li><i class="fa-solid fa-circle-check"></i>Social Media Marketing</li>
                            <li><i class="fa-solid fa-circle-check"></i>Online support (24/7)</li>
                        </ul>
                        <a href="page-pricing.html" class="theme-btn-v2">Choose Package<i
                                class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-banner pt-0">
    <div class="auto-container">
        <div class="outer-box">
            <h3 class="title">We’re shaping the perfect<br>Marketing solutions</h3>
            <a href="page-contact.html" class="theme-btn-v2">Free Consultations <i
                    class="flaticon-arrow-pointing-to-right btn-icon ml-10 font-size-18"></i></a>
        </div>
    </div>
</section>

<section class="contact-section mb-lg-120">
    <div class="auto-container">
        <div class="outer-box">
            <div class="row">

                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h2>LET’S WORK TOGETHER FOR A GREAT BUSINESS</h2>
                            <div class="text">Adipiscing elit duis tristique sollicitudin nibh. Venenatis urna
                                cursus eget nunc scelerisque viverra mauris. Dictumst quisque sagittis purus sit
                                amet. Turpis tincidunt id aliquet risus feugiat Mattis molestie a iaculis.</div>
                        </div>
                        <div class="row">

                            <div class="contact-block col-sm-6">
                                <div class="inner-box">
                                    <div class="icon-box"> <i class="flaticon-call-3"></i> </div>
                                    <div class="content-box"> <span>Phone</span>
                                        @if ($setting->first()->phone != null)
                                            <h6 class="title">{{ $setting->first()->phone }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="contact-block col-sm-6">
                                <div class="inner-box">
                                    <div class="icon-box"> <i class="flaticon-envelope"></i> </div>
                                    <div class="content-box"> <span>Email</span>
                                        <h6 class="title">
                                            @if ($setting->first()->email != null)
                                                <a href="{{ $setting->first()->email }}" class="__cf_email__" data-cfemail="345d5a525b745051595b59555d581a575b59">{{ $setting->first()->email }}</a>
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-block col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box"> <i class="flaticon-map-locator"></i> </div>
                                    <div class="content-box"> <span>Location</span>
                                        @if ($setting->first()->address != null)
                                            <h6 class="title">{{ $setting->first()->address }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column col-lg-6">
                    <div class="inner-column">
                        <h4 class="title">Get in touch</h4>
                        <form method="post" action="{{route('contact.message')}}" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <div class="input-outer">
                                        <input type="text" name="name" placeholder="Enter Name" required>
                                        <span class="icon fa fa-user"></span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="input-outer">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                        <span class="icon fa fa-envelope"></span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="input-outer">
                                        <input type="text" name="Phone" placeholder="Phone Number" required>
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="input-outer">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                        <span class="icon fa fa-paper-plane"></span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button class="theme-btn" type="submit" name="submit-form">
                                        <span  class="btn-title">send your message</span>
                                        <i class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Latest from the blog</h2>
        </div>
        <div class="row">

            <div class="news-block col-lg-4 col-md-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="news-details.html"><img src="{{asset('frontend')}}/images/resource/news1-1.jpg" alt></a>
                        </figure>
                    </div>
                    <div class="content-box">
                        <ul class="post">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 14 14" fill="none">
                                    <path opacity="0.8"
                                        d="M4.9 0V1.4H9.1V0H10.5V1.4H13.3C13.6866 1.4 14 1.7134 14 2.1V13.3C14 13.6866 13.6866 14 13.3 14H0.7C0.313404 14 0 13.6866 0 13.3V2.1C0 1.7134 0.313404 1.4 0.7 1.4H3.5V0H4.9ZM12.6 7H1.4V12.6H12.6V7ZM3.5 2.8H1.4V5.6H12.6V2.8H10.5V4.2H9.1V2.8H4.9V4.2H3.5V2.8Z"
                                        fill="#F94A29" />
                                </svg>01 JAN 2023
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14"
                                    viewBox="0 0 10 14" fill="none">
                                    <path opacity="0.8"
                                        d="M0.625 0H9.375C9.72019 0 10 0.303636 10 0.678183V13.6608C10 13.8481 9.86006 14 9.6875 14C9.62881 14 9.57125 13.982 9.5215 13.9481L5 10.8722L0.478494 13.9481C0.332269 14.0476 0.139412 13.9997 0.0477311 13.841C0.0165436 13.787 0 13.7246 0 13.6608V0.678183C0 0.303636 0.279825 0 0.625 0ZM8.75 1.35637H1.25V11.8224L5 9.27123L8.75 11.8224V1.35637Z"
                                        fill="#F94A29" />
                                </svg>Business
                            </li>
                        </ul>
                        <h6 class="title"><a href="news-details.html">Digital Marketing Made Simple: A
                                Step-by-Step Guide</a></h6>
                    </div>
                </div>
            </div>

            <div class="news-block col-lg-4 col-md-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="news-details.html"><img src="{{asset('frontend')}}/images/resource/news1-2.jpg"
                                    alt></a></figure>
                    </div>
                    <div class="content-box">
                        <ul class="post">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 14 14" fill="none">
                                    <path opacity="0.8"
                                        d="M4.9 0V1.4H9.1V0H10.5V1.4H13.3C13.6866 1.4 14 1.7134 14 2.1V13.3C14 13.6866 13.6866 14 13.3 14H0.7C0.313404 14 0 13.6866 0 13.3V2.1C0 1.7134 0.313404 1.4 0.7 1.4H3.5V0H4.9ZM12.6 7H1.4V12.6H12.6V7ZM3.5 2.8H1.4V5.6H12.6V2.8H10.5V4.2H9.1V2.8H4.9V4.2H3.5V2.8Z"
                                        fill="#F94A29" />
                                </svg>01 JAN 2023
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14"
                                    viewBox="0 0 10 14" fill="none">
                                    <path opacity="0.8"
                                        d="M0.625 0H9.375C9.72019 0 10 0.303636 10 0.678183V13.6608C10 13.8481 9.86006 14 9.6875 14C9.62881 14 9.57125 13.982 9.5215 13.9481L5 10.8722L0.478494 13.9481C0.332269 14.0476 0.139412 13.9997 0.0477311 13.841C0.0165436 13.787 0 13.7246 0 13.6608V0.678183C0 0.303636 0.279825 0 0.625 0ZM8.75 1.35637H1.25V11.8224L5 9.27123L8.75 11.8224V1.35637Z"
                                        fill="#F94A29" />
                                </svg>Business
                            </li>
                        </ul>
                        <h6 class="title"><a href="news-details.html">The Five Challenges of Digital Marketing
                                Transformation</a></h6>
                    </div>
                </div>
            </div>

            <div class="news-block col-lg-4 col-md-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="news-details.html"><img src="{{asset('frontend')}}/images/resource/news1-3.jpg"
                                    alt></a></figure>
                    </div>
                    <div class="content-box">
                        <ul class="post">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 14 14" fill="none">
                                    <path opacity="0.8" d="M4.9 0V1.4H9.1V0H10.5V1.4H13.3C13.6866 1.4 14 1.7134 14 2.1V13.3C14 13.6866 13.6866 14 13.3 14H0.7C0.313404 14 0 13.6866 0 13.3V2.1C0 1.7134 0.313404 1.4 0.7 1.4H3.5V0H4.9ZM12.6 7H1.4V12.6H12.6V7ZM3.5 2.8H1.4V5.6H12.6V2.8H10.5V4.2H9.1V2.8H4.9V4.2H3.5V2.8Z" fill="#F94A29" />
                                </svg>01 JAN 2023
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14"
                                    viewBox="0 0 10 14" fill="none">
                                    <path opacity="0.8" d="M0.625 0H9.375C9.72019 0 10 0.303636 10 0.678183V13.6608C10 13.8481 9.86006 14 9.6875 14C9.62881 14 9.57125 13.982 9.5215 13.9481L5 10.8722L0.478494 13.9481C0.332269 14.0476 0.139412 13.9997 0.0477311 13.841C0.0165436 13.787 0 13.7246 0 13.6608V0.678183C0 0.303636 0.279825 0 0.625 0ZM8.75 1.35637H1.25V11.8224L5 9.27123L8.75 11.8224V1.35637Z" fill="#F94A29" />
                                </svg>Business
                            </li>
                        </ul>
                        <h6 class="title">
                            <a href="news-details.html">Your Complete Digital Marketing Strategy for 2020</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faqs-section">
    <div class="auto-container">
        <div class="row">

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image overlay-anim"><img src="{{asset('frontend')}}/images/resource/faq1-1.jpg" alt></figure>
                    </div>
                </div>
            </div>

            <div class="faq-column col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2 class="title">See Frequently Asked Questions</h2>
                    </div>
                    <ul class="accordion-box wow fadeInRight">

                        <li class="accordion block">
                            <div class="acc-btn">আপনারা কি কি সার্ভিস প্রোভাইড করেন?<div
                                    class="icon fa fa-angle-down"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <p>আমাদের সার্ভিস সমূহ :</p>
                                        <ul>
                                            <li>🔘সোশ্যাল মিডিয়া মার্কেটিং</li>
                                            <li>🔘সোশ্যাল মিডিয়া কন্টেন্ট ডিজাইন</li>
                                            <li>🔘ডিজিটাল মার্কেটিং স্ট্রাটেজি</li>
                                            <li>🔘গ্রাফিস ডিজাইন</li>
                                            <li>🔘ওয়েবসাইট ডেভেলপমেন্ট</li>
                                            <li>🔘সফটওয়ার ডেভেলপমেন্ট</li>
                                            <li>🔘আপস ডেভেলপমেন্ট</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block active-block">
                            <div class="acc-btn active">Facebook মার্কেটিং থেকে কি পরিমাণ সেল হতে পারে?<div
                                    class="icon fa fa-angle-down"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">পোস্ট বুস্ট মানেই সেল না।
                                        সেল নির্ভর করবে আপনার প্রোডাক্ট কোয়ালিটি, প্রাইসিং এবং কনভিন্সিং পাওয়ার এর উপর।
                                        আমরা আপনার প্রোডাক্ট টার্গেট অডিয়েন্স এর কাছে রিচ করতে পারবো।
                                        টার্গেট অডিয়েন্স বেসড প্রতি ডলার রিচ করবে ৫০০-২৫০০+-।
                                        এখানে যার কাছে আপনার প্রোডাক্ট নিড ফিল মনে করবে সে আপনাকে কুয়েরি করবে।
                                        কি পরিমান মেসেজ বা অর্ডার আসবে কখনো ফিক্সড করে বলা সম্ভব না এমন কি ফেসবুক ও ফিক্সড করে বলতে পারে না।
                                        </div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">আমার অ্যাড অ্যাক্টিভ হতে কতক্ষন সময় লাগবে? <div
                                    class="icon fa fa-angle-down"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">ফেসবুক মার্কেটিং সার্ভিস ১০০% অ্যাডভান্স করতে হবে।
                                        আপনি পেমেন্ট করার ১ ঘণ্টার মধ্যে এড পাবলিশ করা
                                        হবে এবং ফেসবুক এড একটিভ করতে ২৪ ঘণ্টা সময় নিতে পারে।
                                        </div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">আমি কেনো আপনাদের সার্ভিস নিবো?<div class="icon fa fa-angle-down">
                                </div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">আমাদের রয়েছে ২৪/৭ অনলাইন সাপোর্ট। এবং অভিজ্ঞ ডিজিটাল মার্কেটিং টিম।</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer_script')

@endsection
