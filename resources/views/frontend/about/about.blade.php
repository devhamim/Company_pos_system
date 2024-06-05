@extends('frontend.master.master')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.webp);">
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
                    <div class="inner-column" style="margin-right: 106px; margin-left:0">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend') }}/images/resource/about1-1.webp" alt>
                            </figure>
                            <div class="play-box">
                                <figure class="image-2 overlay-anim"><img
                                        src="{{ asset('frontend') }}/images/resource/about1-2.webp" alt>
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
                            <div class="text">Nugortech IT, the leading digital marketing agency, is the sister concern of Creative IT Institute. Here, we serve several services including SEO, SMM, content marketing, social media kit, graphic design, logo design, 3D floor plan, 3D modeling, and rendering. Our company has more than 150 employees working in different sectors. Gladly, we serve you 24/7. So, no matter what time zone you are in, you can reach us anytime. We are just a knock away from you!</div>
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
                            <a href="{{ route('our.services') }}" class="theme-btn-v2">Get started <i
                                    class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                            </a>
                            <div class="contact-btn">
                                <a href="tel:09613753442"><i class="flaticon-telephone-1"></i></a>
                                <span>Call us</span>
                                <h6 class="title"><a href="tel:09613753442">09613753442</a></h6>
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
                @foreach ($teams as $team)
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
                                <h3 class="title"><a href="{{ route('services.product', $category->id) }}">{{ $category->category_name }}</a>
                                </h3>
                                <div class="text">{{ $category->category_desp }}</div>
                                <a href="{{ route('services.product', $category->id) }}" data-animation-in="fadeInUp" data-delay-in="0.4"
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
                                        src="{{ asset('frontend') }}/images/resource/choose1-1.jpg" alt></a></figure>
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

@endsection


