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

            <div class="col-xl-8 col-lg-8 col-md-8 ">
                <div class="services-details__content">
                    <img src="{{ asset('uploads/products/gallery') }}/{{ $productgallery->first()->gallery_image }}" alt />
                    <h3 class="mt-4">Service Overview</h3>
                    <p>{!! $products->first()->description !!}</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="service-sidebar">

                    <div class="sidebar-widget service-sidebar-single">

                        <div class="service-details-help" style="text-align: left">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Order For Online</h2>
                            <h4 class="help-title-price text-white">Offer Price: {{ $products->first()->product_discount}}Tk - <del>{{ $products->first()->product_price }}Tk</del></h4>
                            <div class="help-contact">
                                <form action="{{ route('services.product.checkout') }}" method="POST">
                                @csrf
                                    <input type="hidden" name="product_id" value="{{ $products->first()->id }}">
                                    <button type="submit" class="btn btn-light" style="color: #F94A29;"><a>Order Now</a></button>
                                </form>
                                <p class="mb-0 text-white">Order Confirm with live chat:</p>
                            </div>
                            <div class="help-social-icon">
                                <a href="https://m.me/218057834721211?ref=Hello%20there,%20I%20found%20you%20on%20website!%20I%20would%20like%20to%20talk%20about%20your%20service%20in%20details.%20Product:%20{{ urlencode($products->first()->product_name) }}" target="_blank">
                                    <i class="fa-brands fa-facebook-messenger"></i>
                                </a>

                                <a href="https://api.whatsapp.com/send?phone=8801303523442&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service%20in%20details.%20product:%20{{ urlencode($products->first()->product_name) }}%20-%20{{ urlencode(route('product.details',$products->first()->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-whatsapp" style="padding-left: 20px"></i>
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
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
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
                    {{-- <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                        dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo.</p> --}}
                    <ul class="accordion-box wow fadeInRight">

                        <li class="accordion block">
                            <div class="acc-btn">আপনারা কি কি সার্ভিস প্রোভাইড করেন?
                                <div class="icon fa fa-plus"></div>
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
                            <div class="acc-btn active">Facebook মার্কেটিং থেকে কি পরিমাণ সেল হতে পারে?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">পোস্ট বুস্ট মানেই সেল না।
                                        সেল নির্ভর করবে আপনার প্রোডাক্ট কোয়ালিটি, প্রাইসিং এবং কনভিন্সিং পাওয়ার এর উপর।
                                        আমরা আপনার প্রোডাক্ট টার্গেট অডিয়েন্স এর কাছে রিচ করতে পারবো।
                                        টার্গেট অডিয়েন্স বেসড প্রতি ডলার রিচ করবে ৫০০-২৫০০+-।
                                        এখানে যার কাছে আপনার প্রোডাক্ট নিড ফিল মনে করবে সে আপনাকে কুয়েরি করবে।
                                        কি পরিমান মেসেজ বা অর্ডার আসবে কখনো ফিক্সড করে বলা সম্ভব না এমন কি ফেসবুক ও ফিক্সড করে বলতে পারে না।</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">আমার অ্যাড অ্যাক্টিভ হতে কতক্ষন সময় লাগবে?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">ফেসবুক মার্কেটিং সার্ভিস ১০০% অ্যাডভান্স করতে হবে।
                                        আপনি পেমেন্ট করার ১ ঘণ্টার মধ্যে এড পাবলিশ করা
                                        হবে এবং ফেসবুক এড একটিভ করতে ২৪ ঘণ্টা সময় নিতে পারে।</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">আমি কেনো আপনাদের সার্ভিস নিবো?
                                <div class="icon fa fa-plus"></div>
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
