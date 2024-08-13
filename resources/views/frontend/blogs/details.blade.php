@extends('frontend.master.master')
@section('content')

<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title-bg.webp);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Blog Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="{{ asset('uploads/blogs') }}/{{ $blogs->image }}" alt="{{ $blogs->image }}">
                        <div class="blog-details__date">
                            <span class="day">{{ $blogs->created_at->format('d') }}</span>
                            <span class="month">{{ $blogs->created_at->format('M') }}</span>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><a><i class="fas fa-user-circle"></i> {{ $blogs->author }}</a> </li>
                            <li><a><i class="fas fa-comments"></i> {{ $comments_count }}
                                    Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-details__title">{{ $blogs->title }}</h3>
                        <p class="blog-details__text-2">
                            {!! $blogs->description !!}
                        </p>

                    </div>
                    <div class="blog-details__bottom">
                        <p class="blog-details__tags">
                            <span>Tags</span>
                            @foreach(collect($tagsArray)->take(4) as $tag)
                                <a href="#">{{ trim($tag) }}</a>
                            @endforeach
                        </p>
                        <div class="blog-details__social-list">
                            <a href="https://www.tiktok.com/@nugortechitbd">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://www.facebook.com/nugortechitcom">
                                <i class="fab fa-facebook"></i>
                            </a> <a href="https://www.linkedin.com/company/nugortechitbd/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.youtube.com/@NugortechIT">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div class="comment-one">
                        <h3 class="comment-one__title">{{ $comments_count }} Comments</h3>

                        @foreach ($comments as $comment)
                        <div class="comment-one__single">
                            <div class="comment-one__content">
                                <h3>{{ $comment->name }}</h3>
                                <p>
                                    {{ $comment->message }}
                                </p>
                            </div>
                        </div>
                        @endforeach

                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form id="contact_form" name="contact_form" action="{{ route('blog.comment.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="name" class="form-control" type="text"
                                                placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="email" class="form-control email"
                                                type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" name="blog_id" value="{{ $blogs->id }}">
                                    <button type="submit" class="theme-btn btn-style-one"
                                        data-loading-text="Please wait..."><span class="btn-title">Submit
                                            Comment</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    {{-- <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="lnr-icon-search"></i></button>
                        </form>
                    </div> --}}
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($resent_blog as $resent)
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('uploads/blogs') }}/{{ $resent->preview_image }}" alt="{{ $resent->preview_image }}">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3> <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i>{{ $resent->author }}</span> <a
                                                href="{{ route('blog.details', $resent->slug) }}">{{ $resent->title }}</a>
                                        </h3>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="news-details.html">Business<span class="icon-right-arrow"></span></a>
                            </li>
                            <li class="active"><a href="news-details.html">Digital Agency<span
                                        class="icon-right-arrow"></span></a></li>
                            <li><a href="news-details.html">Introductions<span
                                        class="icon-right-arrow"></span></a> </li>
                            <li><a href="news-details.html">New Technologies<span
                                        class="icon-right-arrow"></span></a> </li>
                            <li><a href="news-details.html">Parallax Effects<span
                                        class="icon-right-arrow"></span></a> </li>
                            <li><a href="news-details.html">Web Development<span
                                        class="icon-right-arrow"></span></a> </li>
                        </ul>
                    </div> --}}
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            @foreach ($tagsArray as $tags)
                                <a>{{ $tags }}</a>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Recent Comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A wordpress commenter on <br>
                                        launch new mobile app
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on template:</p>
                                    <h5>comments</h5>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A wordpress commenter on <br>
                                        launch new mobile app
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on template:</p>
                                    <h5>comments</h5>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
