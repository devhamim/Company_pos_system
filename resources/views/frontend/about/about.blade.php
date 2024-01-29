@extends('frontend.master.master')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.png);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="about-section innerpage">
        <div class="auto-container">
            <div class="row">

                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend') }}/images/resource/about1-1.jpg" alt>
                            </figure>
                            <div class="play-box">
                                <figure class="image-2 overlay-anim"><img
                                        src="{{ asset('frontend') }}/images/resource/about1-2.jpg" alt>
                                </figure>
                                <a title href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery"
                                    data-caption>
                                    <i class="icon fa fa-play"></i>
                                </a>
                            </div>
                            <div class="exp-box">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend') }}/images/resource/tv.png" alt>
                                </div>
                                <h4 class="title">MARKETING SOLUTION</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Get the better experience & grow your business with us</h2>
                            <div class="text">Unlock unparalleled growth with our professional digital marketing agency.
                                Elevate your business experience with strategic campaigns, cutting-edge techniques, and a
                                results-driven approach. Trust us to optimize your online presence, engage your audience,
                                and drive success. Experience the difference in business growth with our expertise at your
                                service.</div>
                        </div>
                        <div class="inner-box">
                            <div class="content-box">
                                <span>7+</span>
                                <h6 class="title">Years of expericen</h6>
                            </div>
                            <div class="content-box">
                                <span>500+</span>
                                <h6 class="title">Successful project </h6>
                            </div>
                            <div class="content-box">
                                <span>10K+</span>
                                <h6 class="title">Happy customer </h6>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn-v2">Get started <i
                                    class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                            </a>
                            <div class="contact-btn">
                                <i class="flaticon-telephone-1"></i>
                                <span>Call us</span>
                                <h6 class="title">09613753442</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section position-relative pt-120 pb-100 bg-light">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 class="text-white">OUR TEAM</h2>
            </div>
            <div class="row">
                <div class="team-block col-lg-3 col-md-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-1.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Cameron Williamson</a></h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-2.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Marvin McKinney</a></h4>
                            <span>Creative Director</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-3.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Wade Warren</a></h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-4.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Albert Flores</a></h4>
                            <span>Head Of marketing</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-2.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Marvin McKinney</a></h4>
                            <span>Creative Director</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-3.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Wade Warren</a></h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-4.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Albert Flores</a></h4>
                            <span>Head Of marketing</span>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/team1-1.png" alt></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="page-team-details.html">Cameron Williamson</a></h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>WE WILL PROVIDE YOU THE <br>BEST SERVICE</h2>
            </div>
            <div class="row">
                @foreach ($categoryy->take(8) as $category)
                    <div class="service-block col-lg-3 col-sm-6">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset('uploads/category') }}/{{ $category->category_image }}" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="title"><a href="page-service-details.html">{{ $category->category_name }}</a>
                                </h3>
                                <div class="text">{{ $category->category_desp }}</div>
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
                                <img src="{{ asset('frontend') }}/images/resource/auther1-1.jpg" alt>
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
                                <img src="{{ asset('frontend') }}/images/resource/auther1-2.jpg" alt>
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
                                <img src="{{ asset('frontend') }}/images/resource/auther1-1.jpg" alt>
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
                                <img src="{{ asset('frontend') }}/images/resource/auther1-2.jpg" alt>
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
                                        src="{{ asset('frontend') }}/images/resource/choose1-1.jpg" alt></a></figure>
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

@endsection


