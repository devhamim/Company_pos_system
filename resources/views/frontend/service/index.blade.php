@extends('frontend.master.master')
@section('content')
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.png);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>

<section class="service-section-two">
    <div class="auto-container">
        <div class="row">

            @foreach ($services as $service)
                <div class="service-block-two col-xl-3 col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('uploads/category')}}/{{$service->category_image}}" alt="">
                        </div>
                        <div class="content-box">
                            <h3 class="title"><a href="page-service-details.html">{{$service->category_name}}</a></h3>
                            <div class="text">{{$service->category_desp}}</div>
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

@endsection
