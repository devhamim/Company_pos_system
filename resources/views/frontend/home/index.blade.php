@extends('frontend.master.master')
@section('content')
    <section class="banner-section">
        <div class="banner-slider">
            @foreach ($banners as $banner)
                <div class="banner-slide">
                    <img src="{{ asset('uploads/banner') }}/{{ $banner->banner_image }}" alt>
                    <div class="outer-box">
                        <div class="auto-container">
                            <div class="content-box">
                                <h1 data-animation-in="fadeInLeft" data-delay-in="0.2">{{ $banner->banner_title }}</h1>
                                <div data-animation-in="fadeInUp" data-delay-in="0.3" class="text">
                                    {{ $banner->banner_desp }}</div>
                                <div class="btn-box">
                                    <a href="{{ route('our.services') }}" data-animation-in="fadeInUp" data-delay-in="0.2"
                                        class="theme-btn">Our services
                                        <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                                    </a>
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
                <li><a href="https://www.tiktok.com/@nugortechitbd" title><i class="fab fa-tiktok"></i></a></li>
                <li><a href="https://www.behance.net/nugortech_it" title><i class="fab fa-behance"></i></a></li>
                <li><a href="https://www.linkedin.com/company/nugortechitbd/" title><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li><a href="https://www.facebook.com/nugortechitcom" title><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.youtube.com/@NugortechIT" title><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="banner-contact pt-0">
        <div class="auto-container">
            <div class="outer-box">
                <div class="auto-container">
                    <ul class="clients-carousel">
                        <li class="client-block-two"> <a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1-1.png" alt></a> </li>
                        <li class="client-block-two"> <a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1-2.png" alt></a> </li>
                        <li class="client-block-two"> <a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1-3.png" alt></a> </li>
                        <li class="client-block-two"> <a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1-4.png" alt></a> </li>
                        <li class="client-block-two"> <a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1-5.png" alt></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="service-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>WE WILL PROVIDE YOU THE BEST SERVICE</h2>
                <p style="width: 50%; margin: auto">Nearly 96% of your clients reach you online. So, work with us for your
                    stronger online presence. Let your brand voice talk to the customers.</p>
            </div>
            <div class="row">
                @foreach ($categoryy->take(8) as $category)
                    <div class="service-block col-lg-3 col-sm-6 col-6">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset('uploads/category') }}/{{ $category->category_image }}" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="title"><a
                                        href="{{ route('services.product', $category->id) }}">{{ $category->category_name }}</a>
                                </h3>
                                <div class="text">{{ $category->category_desp }}</div>
                                <a href="{{ route('services.product', $category->id) }}" data-animation-in="fadeInUp"
                                    data-delay-in="0.4" class="theme-btn ser-btn">Learn more <i
                                        class="flaticon-arrow-pointing-to-right btn-icon ms-1"></i>
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
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h2>EINVENT THE MARKETING TREND</h2>
                            <div class="text">As an internet marketing agency, we assure your site is found online for
                                each of your customers.
                                Our dedicated team supports you with SEO, copywriting, social media support, web design,
                                logo design,and any internet marketing service you want.
                            </div>
                        </div>
                        <div class="sec-title light about-rihgt">
                            <h2>CRUSH THE COMPETITION IN JUST 3 STEPS!</h2>
                            <div class="inner-box">
                                <div class="content-box">
                                    <h6 class="title">ANALYZE YOUR BRAND</h6>
                                    <div class="text text-white about-right-text">
                                        We do thorough queries on what to do and how to do for the digital presence of your
                                        business.
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="content-box">
                                    <h6 class="title">DEVELOP A STRATEGY</h6>
                                    <div class="text text-white about-right-text">
                                        To provide the best solution, we craft strategies digitally. Bringing ideas to life
                                        is our specialty.
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="content-box">
                                    <h6 class="title">IMPROVISE TO MAKE YOUR BRAND SPECIAL</h6>
                                    <div class="text text-white about-right-text">
                                        We perform for your business to stand out from the digital chaos. As an online
                                        marketing agency, high-impact result-driven work is our commitment.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12 ">
                    <div class="inner-column" style="margin-left: 0">
                        <div class="image-box">
                            <figure class="image overlay-anim">
                                <img style="ru" width="100%" src="{{ asset('frontend') }}/images/resource/about1-3.webp" alt></figure>
                            {{-- <div class="play-box">
                                <figure class="image-2 overlay-anim"><img
                                        src="{{ asset('frontend') }}/images/resource/about1-2.webp" alt>
                                </figure>
                                <a title href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery"
                                    data-caption>
                                    <i class="icon fa fa-play"></i>
                                </a>
                            </div> --}}
                            {{-- <div class="exp-box">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend') }}/images/resource/tv.png" alt>
                                </div>
                                <h4 class="title">MARKETING SOLUTION</h4>
                            </div> --}}
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
                            <div class="text">Empowering Ideas, Creating Futures.</div>
                        </div>
                    </div>
                </div>

                <div class="process-block col-lg-3 col-sm-6 col-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-workers"></i>
                        </div>
                        <div class="content-box">
                            <h4 class="title">Plan</h4>
                            <div class="text">Planning Today for Tomorrow’s Triumphs.</div>
                        </div>
                    </div>
                </div>

                <div class="process-block col-lg-3 col-sm-6 col-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-winner"></i>
                        </div>
                        <div class="content-box">
                            <h4 class="title">Recharge</h4>
                            <div class="text">Recharge: The Power to Keep Going.</div>
                        </div>
                    </div>
                </div>

                <div class="process-block col-lg-3 col-sm-6 col-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-web-programming"></i>
                        </div>
                        <div class="content-box">
                            <h4 class="title">Result</h4>
                            <div class="text">Your Success, Our Result.</div>
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
                            <h2>AGENCY THAT GETS EXCITED ABOUT</h2>
                            <div class="content-box">
                                <h4 class="title text-white">WE DO MORE THAN OTHER PLATFORMS</h4>
                                <div class="text">While working for you, we promise to create a special comfort zone for
                                    you. So, you can experience working with the best digital marketer in the world.</div>
                            </div>
                            <div class="content-box">
                                <h4 class="title text-white">DATA PRIVACY</h4>
                                <div class="text">your information is safe with us. It is our promise to you that we
                                    never use your data for other purposes.</div>
                            </div>
                            <div class="content-box">
                                <h4 class="title text-white">24/7 SUPPORT</h4>
                                <div class="text">For any support, our dedicated team is ready to assist you. No matter
                                    in whichever time zone you are in, just give us a buzz anytime you need.</div>
                            </div>
                            <div class="content-box">
                                <h4 class="title text-white">ALWAYS UPDATED</h4>
                                <div class="text">Getting involved with our service, you will find yourself in an
                                    updating loop. So, you can understand precisely where and how we are working to enhance
                                    performance on your project.</div>
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
                        {{-- <div class="row">
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
                        </div> --}}
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><a href="page-about.html"><img
                                        src="{{ asset('frontend') }}/images/resource/boss-1.jpg" alt></a></figure>
                            <div class="exp-box bounce-y">
                                <h6 class="title">Live</h6>
                                <div class="text">experience With us</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="project-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Recently Completed Portfolio</h2>
                <div class="text">We Help You Build An Online Brand. Porta nibh venenatis cras sed felis eget aliquet
                    sagittis. Urna nec tincidunt praesent.</div>
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
                            <figure class="image overlay-anim"><a
                                    href="{{ route('portfolio.details', $portfolio->slug) }}">
                                    <img src="{{ asset('uploads/protfolio') }}/{{ $portfolio->preview_image }}" alt></a>
                            </figure>
                            <figure class="image-2"><a href="{{ route('portfolio.details', $portfolio->slug) }}">
                                    <img src="{{ asset('frontend') }}/images/resource/projec1-2.png" alt></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <span>{{ $portfolio->project_type }}</span>
                            <h6 class="title"><a
                                    href="{{ route('portfolio.details', $portfolio->slug) }}">{{ $portfolio->title }}</a>
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}
    <section class="featured-products">
        <div class="auto-container text-center">
            <div class="sec-title">
                <h2>Recently Completed Portfolio</h2>
                <div >We Help You Build An Online Brand. Porta nibh venenatis cras sed felis eget aliquet
                    sagittis. Urna nec tincidunt praesent.</div>
            </div>
        </div>
        <div class="auto-container">
            <div class="mixitup-gallery">

                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        @php
                            $uniqueProjectTypes = $portfolios->unique('project_type');
                        @endphp
                        @foreach ($uniqueProjectTypes as $portfolio)
                            <li class="filter" data-role="button" data-filter=".{{ str_replace(' ', '', $portfolio->project_type) }}">{{ $portfolio->project_type }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="filter-list row">
                    @foreach ($portfolios as $portfolio)
                    <div class="product-block all mix {{ str_replace(' ', '',$portfolio->project_type) }} col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image"><a href=""><img
                                        src="{{ asset('uploads/protfolio') }}/{{ $portfolio->preview_image }}" alt /></a></div>
                            <div class="content">
                                <h4><a href="">{{ $portfolio->title }}</a></h4>
                            </div>
                            {{-- <div class="icon-box">
                                <a href="{{ route('portfolio.details', $portfolio->slug) }}" class="ui-btn like-btn">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row my-3">
                    <div class="col-lg-6 m-auto">
                        <div class="text-center">
                            <a href="{{ route('our.protfolio') }}" data-animation-in="fadeInUp" data-delay-in="0.4"
                                class="theme-btn">See More
                                <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="auto-container text-center">
            <div class="sec-title">
                <a href="{{ route('our.protfolio') }}" data-animation-in="fadeInUp" data-delay-in="0.4" class="theme-btn">
                    See More
                    <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                </a>
            </div>
        </div> --}}
    </section>

    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">

                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms"
                    style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend') }}/images/resource/about2-1.webp" alt="">
                            </figure>
                            <div class="exp-box bounce-y">
                                <h6 class="title">7+</h6>
                                <div class="text">Years of experience</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-6 col-md-12 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms"
                    style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                    <div class="inner-column">
                        <div class="sec-title-two">
                            <h2>WE HELP YOU GROW YOUR OWN WAY</h2>
                            <div class="text">All business starts with small steps. As an online digital marketing
                                agency, we assist with powerful tools to take you a step ahead. No matter where you are, we
                                always have your back to push forward.</div>
                        </div>
                        <ul class="list">
                            <li><i class="fa-solid fa-check"></i>Build a business from scratch</li>
                            <li><i class="fa-solid fa-check"></i>Launch your business.</li>
                            <li><i class="fa-solid fa-check"></i>Grow your business.</li>
                            <li><i class="fa-solid fa-check"></i>Create a brand image for your business.</li>
                        </ul>
                        <div class="sec-title about-rihgt">
                            <h2>WE PROMISE HIGH-END PROJECTS FOR ANY PURPOSE</h2>
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text about-right-text">
                                        01 In-depth understanding of your criteria <br><strong>CORE FEATURES</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text about-right-text">
                                        02 On Time delivery, in your budget <br><strong>CORE FEATURES</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            @if ($setting->first()->phone != null)
                                <a href="tel:{{ $setting->first()->phone }}" class="contact-btn">
                                    <i class="flaticon-phone-call"></i>
                                    <span>Call us</span>
                                    <h6 class="title">{{ $setting->first()->phone }}</h6>
                                </a>
                            @endif
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
                @foreach ($teams->take(12) as $team)
                    <div class="team-block col-lg-3 col-md-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('uploads/team') }}/{{ $team->image }}" alt></figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title"><a>{{ $team->name }}</a></h4>
                                <span>{{ $team->education }}</span><br>
                                <span>{{ $team->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="featured-products">
        <div class="auto-container">
            <div class="mixitup-gallery">
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        @php
                            $uniqueCliendsTypes = $cliends->unique('type');
                        @endphp
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        @foreach ($uniqueCliendsTypes as $cliend)
                            @if ($cliend->type == 'one')
                                <li class="filter" data-role="button" data-filter=".{{ $cliend->type }}">OUR HAPPY CLIENTS</li>
                            @elseif ($cliend->type == 'two')
                                <li class="filter" data-role="button" data-filter=".{{ $cliend->type }}">WE ARE WORKING WITH</li>
                            @elseif ($cliend->type == 'three')
                                <li class="filter" data-role="button" data-filter=".{{ $cliend->type }}">WE ARE MEMBERS OF</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="filter-list row">
                    @foreach ($cliends->take(9) as $cliend)
                        <div class="product-block all mix {{ $cliend->type }} col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('uploads/cliend') }}/{{ $cliend->image }}" alt />
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-6 m-auto">
                    <div class="text-center">
                        <a href="{{ route('our.cliends') }}" data-animation-in="fadeInUp" data-delay-in="0.4"
                            class="theme-btn">See More
                            <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title-two light">
                            <h2>EXCEED YOUR GOAL WITH THE RIGHT MARKETING EXPERTS</h2>
                            <h4 class="text-white">WE PROVIDE TOP-NOTCH SERVICE WHILE KEEPING OUR EMPLOYEES UPDATED BY TRAINING.</h4>
                            <div class="text">As an online digital marketing company, we blend digital marketing, technology, branding, and analytics in digital marketing services. So, we have prepared our team for the best digital marketing services in building a solid foundation for your future. We are the global digital marketing agency in Bangladesh.
                            </div>
                            <div class="list-sec">
                                <ul class="list text-white">
                                    <li><i class="fa-solid fa-circle-check"></i>Encouraged by growth and determination.</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Grounded by honesty and transparency.</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Driven by results.</li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" data-animation-in="fadeInUp" data-delay-in="0.4"
                            class="theme-btn">DISCOVER MORE
                            <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                        </a>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><a href="page-about.html"><img
                                        src="{{ asset('frontend') }}/images/resource/choose1-1.jpg" alt></a></figure>
                            <div class="exp-box bounce-y">
                                <div class="text text-white">Since</div>
                                <h6 class="title text-white">2017</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-banner pt-0">
        <div class="auto-container">
            <div class="outer-box">
                <h3 class="title">MEET OUR NUgortech IT. SAVVY PROFESSIONALS, CERTIFIED BY GOOGLE WITH THE SKILLS TO 10
                    RESEARCH, ANALYZE AND DELIVER RESULTS</h3>
            </div>
        </div>
    </section>

    <section class="news-section mt-5">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Latest from the blog</h2>
            </div>
            <div class="row">

                @foreach ($blogs as $blog)
                    <div class="news-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('blog.details', $blog->slug) }}">
                                        <img src="{{ asset('uploads/blogs') }}/{{ $blog->preview_image }}" alt="{{ $blog->preview_image }}">
                                    </a>
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
                                        </svg>{{ $blog->created_at->format('d M Y') }}
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14"
                                            viewBox="0 0 10 14" fill="none">
                                            <path opacity="0.8"
                                                d="M0.625 0H9.375C9.72019 0 10 0.303636 10 0.678183V13.6608C10 13.8481 9.86006 14 9.6875 14C9.62881 14 9.57125 13.982 9.5215 13.9481L5 10.8722L0.478494 13.9481C0.332269 14.0476 0.139412 13.9997 0.0477311 13.841C0.0165436 13.787 0 13.7246 0 13.6608V0.678183C0 0.303636 0.279825 0 0.625 0ZM8.75 1.35637H1.25V11.8224L5 9.27123L8.75 11.8224V1.35637Z"
                                                fill="#F94A29" />
                                        </svg>{{ $blog->category }}
                                    </li>
                                </ul>
                                <h6 class="title"><a href="{{ route('blog.details', $blog->slug) }}">{{ Str::limit($blog->title, 70, '...') }}</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                                                    <a href="{{ $setting->first()->email }}" class="__cf_email__"
                                                        data-cfemail="345d5a525b745051595b59555d581a575b59">{{ $setting->first()->email }}</a>
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
                        <div class="auto-container">
                            <div class="outer-box">
                                <div class="row">
                                    <div class="form-column col-lg-12">
                                        <div class="inner-column">
                                            <h4 class="title">Get in touch</h4>
                                            {{-- <form method="post" action="{{ route('contact.message') }}"
                                                id="contact-form">
                                                @csrf --}}
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <div class="input-outer">
                                                            <input type="text" name="name" placeholder="Enter Name"
                                                                required>
                                                            <span class="icon fa fa-user"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <div class="input-outer">
                                                            <input type="email" name="email" placeholder="Your Email"
                                                                required>
                                                            <span class="icon fa fa-envelope"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <div class="input-outer">
                                                            <input type="text" name="Phone"
                                                                placeholder="Phone Number" required>
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
                                                            <span class="btn-title">send your message</span>
                                                            <i class="flaticon-arrow-pointing-to-right btn-icon ml-10"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                @foreach ($testmonials as $testmonial)
                    <div class="testimonial-block col-md-6">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-quote-1"></i>
                            </div>
                            <div class="content-box">
                                <div class="text">{{ $testmonial->description }}</div>
                                <div class="auther-info">
                                    <img src="{{ asset('uploads/testimonial') }}/{{ $testmonial->image }}" alt>
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

    <section class="faqs-section">
        <div class="auto-container">
            <div class="row">

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend') }}/images/resource/faq1-1.jpg" alt></figure>
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
                                <div class="acc-btn">WHAT'S THE EXPECTED TIMELINE TO OBSERVE SEO IMPROVEMENTS ON MY WEBSITE?<div
                                        class="icon fa fa-angle-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>After optimizing a website that’s been around for one or two years, you can anticipate initial signs of improvement in search rankings within 2, or 3 weeks. This timeframe accounts for search engines requiring time to crawl, analyze,  re-index new content, and respond to enhanced website performance. However, it typically takes 8-10 weeks to observe substantial and noticeable progress on your website.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block active-block">
                                <div class="acc-btn active">HOW MUCH DOES AN SEO SERVICE COST?<div
                                        class="icon fa fa-angle-down"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">The amount of SEO service pricing depends on different facts. It consists of the current performance search, web page amount, competitors and many other things.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">WHO WILL PROVIDE THE CONTENT FOR MY NEW WEBSITE?<div
                                        class="icon fa fa-angle-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">You have the option to supply content for your website, or if preferred, we can furnish content for an extra fee.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">IS IT NECESSARY FOR ME TO BE IN CLOSE PROXIMITY TO COLLABORATE WITH YOU?                                    <div class="icon fa fa-angle-down">
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Certainly not. Our services can be utilized from any corner of the globe.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn"> WHAT KINDS OF CONTENT ARE AVAILABLE FROM YOUR OFFERINGS?<div class="icon fa fa-angle-down">
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our writers excel in crafting a wide range of content, including articles, blogs, social media posts, Q&A content, and more. Additionally, we are proficient in producing content in both Bengali and English to serve various purposes.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn"> WHICH SECTORS DOES CONTENT MARKETING ENCOMPASS?<div class="icon fa fa-angle-down">
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">The content serves as a valuable resource for all aspects of your business, including areas such as search, social media, email marketing, PR, PPC, and numerous others.

                                        Certainly, we conduct comprehensive keyword research for your content to ensure that our service delivers SEO-friendly content to you.
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
