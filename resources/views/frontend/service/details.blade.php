@extends('frontend.master.master')
@section('content')
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.webp);">
    <div class="auto-container">
        <div class="title-outer text-center">
            @if ($services->first() != null)
                <h1 class="title">{{ $services->first()->category_name }}</h1>
            @endif
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Product</li>
            </ul>
        </div>
    </div>
</section>


<section class="team-section position-relative pt-120 pb-100 bg-light">
    <div class="auto-container">
        <div class="row">

            @foreach ($products as $product)
                <div class="team-block col-lg-3 col-md-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img width="100%" src="{{ asset('uploads/products/preview') }}/{{ $product->preview_image }}" alt></figure>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="{{ route('services.product.details',$product->slug) }}">{{ $product->product_name }}</a></h4>
                        </div>
                        <div class="content-box">
                            <a href="{{ route('services.product.details',$product->slug) }}" class="btn btn-dark w-100" style="background: #F94A29">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

