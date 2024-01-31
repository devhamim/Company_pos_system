@extends('frontend.master.master')
@section('content')

<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.png);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">{{ $products->first()->product_name }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</section>

<section class="services-details">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-lg-8">
                <div class="services-details__content">
                    <img src="{{ asset('uploads/products/gallery') }}/{{ $productgallery->first()->gallery_image }}" alt />
                    <h3 class="mt-4">Service Overview</h3>
                    <p>{!! $products->first()->description !!}</p>

                    <div class="content mt-40">
                        <div class="text">
                            <h3>Review</h3>

                        </div>
                        <div class="feature-list mt-4">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="{{ asset('frontend') }}/images/resource/service-d1.jpg"
                                        alt="images" />
                                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur
                                        temporibus doloribus hic conse quatur copy typing refreshing</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="{{ asset('frontend') }}/images/resource/service-d2.jpg"
                                        alt="images" />
                                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur
                                        temporibus doloribus hic conse quatur copy typing refreshing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="innerpage mt-25">
                        <h3>Frequently Asked Question</h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                            dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                            sunt explicabo.</p>
                        <ul class="accordion-box wow fadeInRight">

                            <li class="accordion block">
                                <div class="acc-btn">Is my technology allowed on tech?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block active-block">
                                <div class="acc-btn active">How to soft launch your business?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">How to turn visitors into contributors
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">How can i find my solutions?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="service-sidebar">

                    <div class="sidebar-widget service-sidebar-single">

                        <div class="service-details-help" style="text-align: left">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Order For Online</h2>
                            <h4 class="help-title-price text-white">Offer Price: {{ $products->first()->product_discount}}Tk - <del>{{ $products->first()->product_price }}Tk</del></h4>
                            <div class="help-contact">
                                <a href="" class="btn btn-light" style="color: #F94A29">Order Now</a>
                            </div>
                            <p class="mb-0 mt-3 text-white">Order Confirm with live chat:</p>
                            <div class=" mt-3">
                                <a href="https://m.me/218057834721211?ref=Hello%20there,%20I%20found%20you%20on%20website!%20I%20would%20like%20to%20talk%20about%20your%20service%20in%20details.%20Product:%20{{ urlencode($products->first()->product_name) }}" target="_blank"><i class="fa-brands fa-facebook-messenger" style="color: #ffffff; font-size: 40px;"></i></a>

                                <a href="https://api.whatsapp.com/send?phone=8801303523442&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service%20in%20details.%20product:%20{{ urlencode($products->first()->product_name) }}%20-%20{{ urlencode(route('product.details',$products->first()->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-whatsapp" style="color: #ffffff; font-size: 40px; padding-left: 20px"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="service-sidebar">

                    <div class="sidebar-widget service-sidebar-single">

                        <div class="service-details-help">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                            <div class="help-icon">
                                <a href="tel:{{ $setting->first()->phone }}">
                                    <span class=" lnr-icon-phone-handset"></span>
                                </a>
                            </div>
                            <div class="help-contact">
                                <p>Need help? Talk to an expert</p>
                                @if ($setting->first()->phone != null)
                                    <a href="tel:{{ $setting->first()->phone }}">{{ $setting->first()->phone }}</a>
                                @endif
                            </div>
                        </div>

                        <div class="sidebar-widget service-sidebar-single mt-4">
                            <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s"
                                data-wow-duration="1200m">
                                <a href="#" class="theme-btn btn-style-one d-grid"><span
                                        class="btn-title"><span class="fa-solid fa-headset fa-beat"></span>Free Consultancy</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
