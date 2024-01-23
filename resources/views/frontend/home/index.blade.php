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
                                <a href="page-services.html" data-animation-in="fadeInUp" data-delay-in="0.4"
                                    class="theme-btn">Our services <i
                                        class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i></a>
                                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn"
                                    data-fancybox="gallery" data-caption data-animation-in="fadeInLeft"
                                    data-delay-in="0.4">
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
            <li><a href="#" title><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#" title><i class="fab fa-behance"></i></a></li>
            <li><a href="#" title><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#" title><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" title><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</section>

<section class="service-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>WE WILL PROVIDE YOUTHE <br>BEST SERVICE</h2>
        </div>
        <div class="row">
            @foreach ($categoryy->take(8) as $category)
                <div class="service-block col-lg-3 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('uploads/category')}}/{{$category->category_image}}" alt="">
                        </div>
                        <div class="content-box">
                            <h3 class="title"><a href="page-service-details.html">{{$category->category_name}}</a></h3>
                            <div class="text">{{$category->category_desp}}</div>
                            <a href="page-service-details.html" data-animation-in="fadeInUp" data-delay-in="0.4"
                                class="theme-btn ser-btn">Learn more <i
                                    class="flaticon-arrow-pointing-to-right btn-icon ms-1"></i></a>
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
                        <figure class="image overlay-anim"><img src="{{asset('frontend')}}/images/resource/about1-1.jpg" alt></figure>
                        <div class="play-box">
                            <figure class="image-2 overlay-anim"><img src="{{asset('frontend')}}/images/resource/about1-2.jpg" alt>
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
                        <div class="text">Pull in ten extra bodies to help roll the tortoise idea shower. What
                            do you feel you would bring to the table if you were hired for this position
                            exposing new ways to evolve our design language, everyone thinks tastes better. we
                            can't hear you , so reinvent the wheel hop on the bandwagon.</div>
                    </div>
                    <div class="inner-box">
                        <div class="content-box">
                            <span>30+</span>
                            <h6 class="title">Years of expericen</h6>
                        </div>
                        <div class="content-box">
                            <span>500K+</span>
                            <h6 class="title">Successful project </h6>
                        </div>
                        <div class="content-box">
                            <span>5M+</span>
                            <h6 class="title">Happy customer </h6>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="page-about.html" class="theme-btn-v2">Get started <i
                                class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i></a>
                        <div class="contact-btn">
                            <i class="flaticon-telephone-1"></i>
                            <span>Call us</span>
                            <h6 class="title">(000) 123 456 789</h6>
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

            <div class="process-block col-lg-3 col-sm-6">
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

            <div class="process-block col-lg-3 col-sm-6">
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

            <div class="process-block col-lg-3 col-sm-6">
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

            <div class="process-block col-lg-3 col-sm-6">
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
            <h2>Recently <br>Completed Projects</h2>
            <div class="text">We Help You Build An Online Brand. Porta nibh venenatis cras sed felis eget
                aliquet sagittis. Urna nec tincidunt praesent.</div>
        </div>
        <div class="slider-btn">
            <button class="prev-btn"><span><i
                        class="flaticon-arrow-pointing-to-right btn-icon"></i></span></button>
            <button class="next-btn"><span><i
                        class="flaticon-arrow-pointing-to-right btn-icon"></i></span></button>
        </div>
    </div>
    <div class="row project-slider">

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-3.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-4.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-3.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-4.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-4.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-3.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>

        <div class="project-block col-lg-3 col-md-6">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image overlay-anim"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-1.jpg" alt></a></figure>
                    <figure class="image-2"><a href="page-project-details.html"><img
                                src="{{asset('frontend')}}/images/resource/projec1-2.png" alt></a></figure>
                </div>
                <div class="content-box">
                    <span>Branding</span>
                    <h6 class="title"><a href="page-project-details.html">Ora Branding Design</a></h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section">
    <div class="inner-container">
        <div class="sec-title text-center">
            <h2>WHAT’s TALKING about<br> our coustomer?</h2>
        </div>
        <div class="row testi-slider">

            <div class="testimonial-block col-md-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-quote-1"></i>
                    </div>
                    <div class="content-box">
                        <div class="text">Mi eget mauris pharetra et. Sed tempus urna et pharetra pharetra. Ut
                            lectus arcu bibendum at. Pharetra magna ac placerat vestibulum lectus mauris.
                            Tincidunt lobortis feugiat vivamus at augue.</div>
                        <div class="auther-info">
                            <img src="{{asset('frontend')}}/images/resource/auther1-1.jpg" alt>
                            <div class="info-box">
                                <h6 class="title">Brooklyn Simmons</h6>
                                <span>Product Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-block col-md-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-quote-1"></i>
                    </div>
                    <div class="content-box">
                        <div class="text">Mi eget mauris pharetra et. Sed tempus urna et pharetra pharetra. Ut
                            lectus arcu bibendum at. Pharetra magna ac placerat vestibulum lectus mauris.
                            Tincidunt lobortis feugiat vivamus at augue.</div>
                        <div class="auther-info">
                            <img src="{{asset('frontend')}}/images/resource/auther1-2.jpg" alt>
                            <div class="info-box">
                                <h6 class="title">Leslie Alexander</h6>
                                <span>Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-block col-md-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-quote-1"></i>
                    </div>
                    <div class="content-box">
                        <div class="text">Mi eget mauris pharetra et. Sed tempus urna et pharetra pharetra. Ut
                            lectus arcu bibendum at. Pharetra magna ac placerat vestibulum lectus mauris.
                            Tincidunt lobortis feugiat vivamus at augue.</div>
                        <div class="auther-info">
                            <img src="{{asset('frontend')}}/images/resource/auther1-1.jpg" alt>
                            <div class="info-box">
                                <h6 class="title">Brooklyn Simmons</h6>
                                <span>Product Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-block col-md-6">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="flaticon-quote-1"></i>
                    </div>
                    <div class="content-box">
                        <div class="text">Mi eget mauris pharetra et. Sed tempus urna et pharetra pharetra. Ut
                            lectus arcu bibendum at. Pharetra magna ac placerat vestibulum lectus mauris.
                            Tincidunt lobortis feugiat vivamus at augue.</div>
                        <div class="auther-info">
                            <img src="{{asset('frontend')}}/images/resource/auther1-2.jpg" alt>
                            <div class="info-box">
                                <h6 class="title">Leslie Alexander</h6>
                                <span>Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <h6 class="title">25+</h6>
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
                        <a href="page-pricing.html" class="theme-btn-v2">Choose Package<i
                                class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i></a>
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
                                    <div class="icon-box"> <i class="flaticon-map-locator"></i> </div>
                                    <div class="content-box"> <span>Location</span>
                                        <h6 class="title">255 sheet, new city, ny</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-block col-sm-6">
                                <div class="inner-box">
                                    <div class="icon-box"> <i class="flaticon-call-3"></i> </div>
                                    <div class="content-box"> <span>Phone</span>
                                        <h6 class="title">(000) 123 567 889</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-block col-sm-6">
                                <div class="inner-box">
                                    <div class="icon-box"> <i class="flaticon-envelope"></i> </div>
                                    <div class="content-box"> <span>Email</span>
                                        <h6 class="title"><a
                                                href="https://html.kodesolution.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="345d5a525b745051595b59555d581a575b59">[email&#160;protected]</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-block col-sm-6">
                                <div class="inner-box">
                                    <div class="icon-box"> <i class="flaticon-worldwide"></i> </div>
                                    <div class="content-box"> <span>Website</span>
                                        <h6 class="title">www.yourwebsite.com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column col-lg-6">
                    <div class="inner-column">
                        <h4 class="title">Get in touch</h4>
                        <form method="post" action="https://html.kodesolution.com/2023/digitex-html/get"
                            id="contact-form">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <div class="input-outer">
                                        <input type="email" name="Email" placeholder="Your Email" required>
                                        <span class="icon fa fa-user"></span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="input-outer">
                                        <input type="text" name="Phone" placeholder="Phone Number" required>
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
                                    <button class="theme-btn" type="submit" name="submit-form"><span
                                            class="btn-title">send your message</span><i
                                            class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i></button>
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
                        <figure class="image"><a href="news-details.html"><img src="{{asset('frontend')}}/images/resource/news1-1.jpg"
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
                        <h6 class="title"><a href="news-details.html">Your Complete Digital Marketing Strategy
                                for 2020</a></h6>
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
                            <div class="acc-btn">Is my technology allowed on tech?<div
                                    class="icon fa fa-angle-down"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Justo nec ultrices dui sapien eget mi proin. Sit amet
                                        dictum sit amet justo. Aliquet sagittis id consectetur purus Urna.</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block active-block">
                            <div class="acc-btn active">How to soft launch your business?<div
                                    class="icon fa fa-angle-down"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Justo nec ultrices dui sapien eget mi proin. Sit amet
                                        dictum sit amet
                                        justo. Aliquet sagittis id consectetur purus Urna.</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">How to turn visitors into contributors? <div
                                    class="icon fa fa-angle-down"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Justo nec ultrices dui sapien eget mi proin. Sit amet
                                        dictum sit amet justo. Aliquet sagittis id consectetur purus Urna.</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">How can i find my solutions?<div class="icon fa fa-angle-down">
                                </div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Justo nec ultrices dui sapien eget mi proin. Sit amet
                                        dictum sit amet justo. Aliquet sagittis id consectetur purus Urna.</div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Justo nec ultrices dui sapien eget mi proin. Sit amet
                                            dictum sit amet justo .Aliquet sagittis id consectetur purus Urna.
                                        </div>
                                    </div>
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
