@extends('frontend.master.master')
@section('content')

<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.png);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Product Deatils</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Product Deatils</li>
            </ul>
        </div>
    </div>
</section>

<section class="product-details">
    <div class="container pb-70">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="bxslider">
                    <div class="slider-content">
                        <figure class="image-box">
                            <a href="{{ asset('uploads/shop/gallery') }}/{{ $productgallerys->first()->gallery_image }}" class="lightbox-image" data-fancybox="gallery">
                                <img src="{{ asset('uploads/shop/gallery') }}/{{ $productgallerys->first()->gallery_image }}" alt>
                            </a>
                        </figure>
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                @foreach ($productgallerys as $sl=>$productgallery)
                                    <li>
                                        <a class="{{ $productgallery->id?'active':'' }}" data-slide-index="{{ $productgallery->id }}" href="#">
                                            <figure>
                                                <img src="{{ asset('uploads/shop/gallery') }}/{{ $productgallery->gallery_image }}" alt>
                                            </figure>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="slider-content">
                        @foreach ($productgallerys as $productgallery)
                        <figure class="image-box">
                                <a href="{{ asset('uploads/shop/gallery') }}/{{ $productgallery->gallery_image }}" class="lightbox-image" data-fancybox="gallery">
                                    <img src="{{ asset('uploads/shop/gallery') }}/{{ $productgallery->gallery_image }}" alt="">
                                </a>
                            </figure>
                            @endforeach
                            <div class="slider-pager">
                                <ul class="thumb-box">
                                    @foreach ($productgallerys as $thumbnail)
                                        <li>
                                            <a class="{{ $thumbnail->id == $productgallery->id ? 'active' : 'hidden' }}" data-slide-index="{{ $thumbnail->id }}" href="#">
                                                <figure>
                                                    <img src="{{ asset('uploads/shop/gallery') }}/{{ $thumbnail->gallery_image }}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> --}}
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 product-info">
                <div class="product-details__top">
                    <h3 class="product-details__title">{{ $shopproducts->name }}
                        @if ($shopproducts->discount !=0)
                        <span>{{ $shopproducts->after_discount }}Tk</span>
                        <del style="font-size: 12px">{{ $shopproducts->price }}Tk</del>
                        @else
                            <span>{{ $shopproducts->after_discount }}Tk</span>
                        @endif
                    </h3>
                </div>
                <div class="product-details__content">
                    <p class="product-details__content-text1">{{ $shopproducts->sort_description }}</p>
                </div>
                <div class="product-details__quantity">
                    <h3 class="product-details__quantity-title">Choose quantity</h3>
                    <div class="quantity-box">
                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                        <input type="number" id="1" value="1" />
                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="product-details__buttons">
                    <div class="product-details__buttons-1">
                        <a href="shop-cart.html" class="theme-btn btn-style-one">Add to Cart</a>
                    </div>
                    <div class="product-details__buttons-2">
                        <a href="shop-product-details.html" class="theme-btn btn-style-one">Add to
                            Wishlist</a>
                    </div>
                </div>
                <div class="product-details__social">
                    <div class="title mt-10">
                        <h3>Share with friends</h3>
                    </div>
                    <ul class="social-icon-one product-share">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-description">
    <div class="container pt-0 pb-90">
        <div class="product-discription">
            <div class="tabs-box">
                <div class="tab-btn-box text-center">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                        <li class="tab-btn" data-tab="#tab-2">Reviews</li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="text">
                            <h3 class="product-description__title">Description</h3>
                            <p class="product-description__text1">
                                {!! $shopproducts->description !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="tab" id="tab-2">
                        <div class="customer-comment">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                    <div class="single-comment-box">
                                        <div class="inner-box">
                                            <figure class="comment-thumb"><img
                                                    src="images/resource/testi-thumb1-1.png" alt></figure>
                                            <div class="inner">
                                                <ul class="rating clearfix">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <h5>Jon D. William, <span>10 Jan, 2023 . 4:00 pm</span></h5>
                                                <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa
                                                    quis des mauris commodo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                    <div class="single-comment-box">
                                        <div class="inner-box">
                                            <figure class="comment-thumb"><img
                                                    src="images/resource/testi-thumb1-2.png" alt></figure>
                                            <div class="inner">
                                                <ul class="rating clearfix">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <h5>Aleesha Brown, <span>12 Feb, 2023 . 8:00 pm</span></h5>
                                                <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa
                                                    quis des mauris commodo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-box">
                            <h3>Add Your Comments</h3>
                            <form id="contact_form" name="contact_form" class
                                action="https://html.kodesolution.com/2023/digitex-html/includes/sendmail.php"
                                method="post">
                                <div class="mb-3">
                                    <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="form_name" class="form-control" type="text"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="form_email" class="form-control required email"
                                                type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="review-box clearfix">
                                        <p>Your Review</p>
                                        <ul class="rating clearfix">
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group clearfix">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Save my name, email, and website in
                                                    this browser for the next time I comment.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input name="form_botcheck" class="form-control" type="hidden" value />
                                    <button type="submit" class="theme-btn btn-style-one"
                                        data-loading-text="Please wait...">Submit Comment</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-product">
    <div class="container pt-0 pb-90">
        <h3>Related Products</h3>
        <div class="row clearfix">
            <div class="col">

                <div class="mixitup-gallery">
                    <div class="filter-list row">
                        @foreach ($similarproducts as $similarproduct)
                            <div class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image"><a href="{{ route('product.details', $similarproduct->slug) }}"><img
                                                src="{{ asset('uploads/shop') }}/{{ $similarproduct->preview_image }}" alt /></a></div>
                                    <div class="content">
                                        <h4><a href="{{ route('product.details', $similarproduct->slug) }}">{{ $similarproduct->name }}</a></h4>
                                        <span class="price">{{ $similarproduct->after_discount }}Tk</span>
                                    </div>
                                    <div class="icon-box">
                                        <a href="{{ route('product.details', $similarproduct->slug) }}" class="ui-btn like-btn"><i
                                                class="fa fa-heart"></i></a>
                                        <a href="shop-cart.html" class="ui-btn add-to-cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
