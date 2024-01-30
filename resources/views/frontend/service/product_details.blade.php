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
                    <img src="{{ asset('frontend') }}/images/resource/service-details.jpg" alt />
                    <h3 class="mt-4">Service Overview</h3>
                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                        dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet
                        finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make </p>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur
                        adipis icing elit </p>
                    <div class="content mt-40">
                        <div class="text">
                            <h3>Service Center</h3>
                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est
                                qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae
                                vitae dicta sunt explicabo.</p>
                            <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted
                                adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum
                                dolor sit amet consec tetur</blockquote>
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

                        <div class="service-details-help">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Order For Online</h2>
                            <h4 class="help-title-price text-white">Offer Price: {{ $products->first()->product_discount}}Tk - <del>{{ $products->first()->product_price }}Tk</del></h4>
                            <div class="help-contact">
                                <a href="" class="btn btn-light" style="color: #F94A29">Order Now</a>
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
                                <span class=" lnr-icon-phone-handset"></span>
                            </div>
                            <div class="help-contact">
                                <p>Need help? Talk to an expert</p>
                                <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
                            </div>
                        </div>

                        <div class="sidebar-widget service-sidebar-single mt-4">
                            <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s"
                                data-wow-duration="1200m">
                                <a href="#" class="theme-btn btn-style-one d-grid"><span
                                        class="btn-title"><span class="fas fa-file-pdf"></span> Consultancy</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
