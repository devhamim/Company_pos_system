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


    <section class="about-section innerpage" style="padding-bottom: 0">
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>FULL-SERVICE DIGITAL MARKETING AGENCY</h2>
                            <div class="my-3">
                                <h4>OUR MISSION</h4>
                                <div class="text">We provide innovative brand marketing that helps our clients reach their business goals.</div>
                            </div>
                            <div class="my-3">
                                <h4>OUR VISION</h4>
                                <div class="text">Our vision is to be a trustworthy digital marketing agency by improving your sales and fostering your growth.</div>
                            </div>
                            <div class="my-3">
                                <h4>OUR VALUES</h4>
                                <div class="text">
                                    In Nugortech IT, we maintain certain values.
                                    <ul>
                                        <li>- Professionalism</li>
                                        <li>- Diversity</li>
                                        <li>- Friendly ambiance</li>
                                        <li>- Promising work</li>
                                        <li>- Equality in the workforce</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="text">
                                Nugortech IT is the leading digital marketing agency. Here, we serve several services including SEO, SMM, content marketing, social media kit, graphic design, logo design, 3D floor plan, 3D modeling, and rendering. Our company has more than 20 employees working in different sectors. Gladly, we serve you 24/7. So, no matter what time zone you are in, you can reach us anytime. We are just a knock away from you!
                                </div>
                        </div>
                        <div class="inner-box row">
                            <div class="content-box pt-3 col-lg-5 col-6">
                                <h6 class="title mb-4"><i class="fa-solid fa-check" style="color: #f94a29;"></i> We love to explore</h6>
                                <h6 class="title mb-4"><i class="fa-solid fa-check" style="color: #f94a29;"></i> We stop at nothing</h6>
                                <h6 class="title mb-4"><i class="fa-solid fa-check" style="color: #f94a29;"></i> We solve real problems</h6>
                                <h6 class="title mb-4"><i class="fa-solid fa-check" style="color: #f94a29;"></i> We keep everything simple</h6>
                                <h6 class="title mb-4"><i class="fa-solid fa-check" style="color: #f94a29;"></i> We think differently</h6>
                            </div>
                            <div class="content-box col-lg-5 col-6">
                                <img  src="{{ asset('frontend/images/shan.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section innerpage">
        <div class="auto-container">
            <div class="row">

                <div class="image-column col-lg-6">
                    <div class="inner-column" style="margin-left:0">
                        <div class="image-box">
                            <figure class="image overlay-anim">
                                <img width="100%" src="{{ asset('frontend') }}/images/resource/about1-1.webp" alt>
                            </figure>
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

                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>WE ARE TEAM Nugortech IT</h2>
                            <div class="text">Nugortech IT is an innovative digital marketing agency. Here, we believe integrating experience with technology brings the perfect outcome. Accordingly, we empower more than thousands of businesses across the world. So, we are the global marketing platform to boost any business to reach the apex.</div>
                        </div>
                        <div class="inner-box">
                            <div class="content-box">
                                <span>FREE AUDIT REPORT</span>
                                <h6 class="title">Get 100% authentic audit reports
                                    your online business absolutely free. </h6>
                            </div>
                            <div class="content-box">
                                <span>BEST TEAM MEMBERS</span>
                                <h6 class="title">from  Expert teammates for
                                    ensuring top-quality service.</h6>
                            </div>
                        </div>
                        <div class="btn-box mt-5">
                            <a href="{{ route('our.services') }}" class="theme-btn-v2">Get started <i
                                    class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                            </a>
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
            {{-- <div class="row my-3">
                <div class="col-lg-6 m-auto">
                    <div class="text-center">
                        <a href="{{ route('terms') }}" data-animation-in="fadeInUp" data-delay-in="0.4"
                            class="theme-btn">See More
                            <i class="btn-icon fa-sharp far fa-arrow-right ml-10 font-size-18"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="contact-banner pt-0">
        <div class="auto-container">
            <div class="outer-box">
                <h3 class="title text-center">GREAT THINGS IN BUSINESS ARE NEVER DONE BY ONE PERSON. THEY’RE DONE BY A TEAM OF PEOPLE.</h3>
            </div>
        </div>
    </section>

    {{-- <section class="service-section">
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
    </section> --}}

    <section class="testimonial-section">
        <div class="inner-container">
            <div class="sec-title text-center">
                <h2>WHAT OUR CUSTOMERS ARE <br> TALKING ABOUT</h2>
                <h6>Across the world, we have more than thousands of satisfied clients. So, <br> count our milestones with our client’s success stories.</h6>
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
                                    <img width="70px" height="70px" src="{{asset('uploads/testimonial')}}/{{ $testmonial->image }}" alt>
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

    {{-- <section class="choose-us-section">
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
    </section> --}}

@endsection


