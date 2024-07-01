@extends('frontend.landing.master')
@section('landingcontent')
    <section class="page-title" style="background: #000">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <h3 class="text-white ">Successful Online Business with Digital Marketing</h3>
                        <div class="sec-title">
                            <div class="text landing_font">আপনার কাছে যদি একটি ল্যাপটপ/ কম্পিউটার/ স্মার্ট ফোন ও ইন্টারনেট
                                কানেকশন থাকে। ও যদি আপনি অনলাইন বিজনেস করে প্রতিদিন লাখ টাকা সেলস করে, নিজেকে একজন সফল
                                অনলাইন বিজনেস উদ্যোক্তা হিসেবে দেখার স্বপ্ন দেখেন তাহলে কোর্স টি হতে পারে আপনার জন্য বেস্ট
                                চয়েজ। যদি এই ৩ মাসের জার্নি আপনি লেগে থাকতে পারেন। কথা দিলাম আপনার পরিশ্রম ও আমাদের চেষ্টায়
                                সফল হবে ইনশাল্লাহ।</div>
                        </div>
                        <div class="landing-inner-box">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="text-white landing_font">২৪ টি</span><br>
                                        <span class="landing-title text-white landing_font">লাইভ ক্লাস</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="text-white landing_font">ক্লাস রেকড</span><br>
                                        <span class="landing-title text-white landing_font">ভিডিও</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="text-white">অফলাইন</span><br>
                                        <span class="landing-title text-white landing_font">কন্সাল্টেন্সি</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="text-white landing_font">লাইফ টাইম</span><br>
                                        <span class="landing-title text-white landing_font">সাপোর্ট </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="text-white landing_font">বিজনেস</span><br>
                                        <span class="landing-title text-white landing_font">ফান্ডিং </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box "
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="text-white landing_font">জব</span><br>
                                        <span class="landing-title text-white landing_font">প্লেসমেন্ট</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img src="{{ asset('frontend/images/landing/banner.jpg') }}"
                                    alt=""></figure>
                            {{-- <div class="play-box">
                            <figure class="image-2 overlay-anim"><img src="{{ asset('frontend') }}/images/resource/about1-2.webp" alt="">
                            </figure>
                            <a title="" href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery"
                                data-caption="">
                                <i class="icon fa fa-play"></i>
                            </a>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section innerpage" style="background: #f3f3f3; padding: 50px 0 0 0">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <h3>Successful Online Business with Digital Marketing</h3>
                        <div class="sec-title">
                            <div class="text landing_font">দেশের সব চেয়ে কম খরচে বিজনেস কোর্স যেখেন আপনি সিখতে পারবেন কিভাবে
                                শুন্য লাখ টাকার বিজনেস শুরু করা যায় । আমারা আসা করি যদি সময় দিয়ে লেখে থাকেন আপনি হবেন সহল
                                অনলাইন বিজনেস উদ্যোক্তা।</div>
                            <div class="text landing_font">কোর্স ফি - ১০০০০ টাকা মাত্র</div>
                            <div class="my-3 d-flex ">
                                <form action="{{ route('services.product.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                                    <button type="submit" class="theme-btn text-white" style="color: #F94A29;"><a>Admission</a></button>
                                </form>
                                <form class="mx-2" action="{{ route('services.product.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                                    <button type="submit" class="theme-btn text-white" style=" background: #29cff9;"><a>Consultancy</a></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="landing-inner-box">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class=" landing_font">ব্যাচ শুরু</span><br>
                                        <span class="landing-title  landing_font">২০ জুলাই</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="landing_font">রাত - ১০টা</span><br>
                                        <span class="landing-title  landing_font">থেকে - ১১.৩০টা</span>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-6 ">
                                    <div class="landing-content-box "
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class=" landing_font">সিট সংখ্যা</span><br>
                                        <span class="landing-title  landing_font">২০ টি</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class=" landing_font">লাইফ টাইম</span><br>
                                        <span class="landing-title  landing_font">সাপোর্ট </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class="landing_font">বিজনেস</span><br>
                                        <span class="landing-title  landing_font">ফান্ডিং </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box "
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <span class=" landing_font">জব</span><br>
                                        <span class="landing-title  landing_font">প্লেসমেন্ট</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text landing_font mt-4">
                                <a class="text landing_font" style="font-size: 20px" href="tel:01303523442">প্রয়োজনে ফোন
                                    করুন - 01303523442</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-details" style="background: #000;">
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="innerpage mt-25">
                        <h3 class="text-center text-white landing_font">কোর্স কারিকুলাম</h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="accordion-box wow fadeInRight">

                                    <li class="accordion block active-block">
                                        <div class="acc-btn">সপ্তাহ -১
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-1</p>
                                                    <ul>
                                                        <li>১. বিজনেস আইডিয়া জেনারেট</li>
                                                        <li>২. প্রোডাক্ট সিলেকশন</li>
                                                        <li>৩. প্রোডাক্ট সরসিং</li>
                                                        <li>৪. ফান্ডিং</li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Class-2</p>
                                                    <ul>
                                                        <li>১. মার্কেটিং কী? </li>
                                                        <li>২. কতরকমের মার্কেটিং হয়?</li>
                                                        <li>৩. ডিজিটাল মার্কেটিং কী?</li>
                                                        <li>৪. আপনার কাস্টোমার কারা বুঝবেন কীভাবে?</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ২
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class -3</p>
                                                    <ul>
                                                        <li>১. কনটেন্ট মার্কেটিং</li>
                                                        <li>২. কনটেন্ট কী?</li>
                                                        <li>৩. কনটেন্ট রাইটিং কী?</li>
                                                        <li>৪. কীভাবে কনটেন্ট মার্কেটিং করবেন?</li>
                                                        <li>৫. কনটেন্ট কেনো কিং?</li>
                                                        <li>৬. ভালো কনটেন্ট বুঝবেন কীভাবে?</li>
                                                        <li>৭. আপনার কাস্টোমারের জন্য কনটেন্ট রিসার্চ করবেন কীভাবে?</li>
                                                        <li>৮. জানতে হবে কনটেন্ট রাইটিং ও কপিরাইটিং</li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Class-4</p>
                                                    <ul>
                                                        <li>কেনো একটা ভালো কপি দরকার? |
                                                            ভালো কপি লিখবেন কীভাবে? | কপিরাইটিং এর সিক্রেট টিপস
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৩
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class - 5</p>
                                                    <ul>
                                                        <li>Exam</li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Class-6</p>
                                                    <ul>
                                                        <li>১. ডিজাইন এন্ড ক্রিয়েটিভিটি</li>
                                                        <li>২. ডিজাইন কীভাবে করবেন?</li>
                                                        <li>৩. কীভাবে ক্যানভা দিয়ে সহজে ডিজাইন করবেন?</li>
                                                        <li>৪. ডিজাইন ফান্ডামেন্টালস</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৪
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-7</p>
                                                    <ul>
                                                        <li>১. প্রফেশনাল ফেসবুক পেইজ ক্রিয়েট</li>
                                                        <li>২. পেইজ সেটআপ</li>
                                                        <li>৩. পেইজ সিকিরটি </li>
                                                        <li>৪. কি ভাবে ওয়েবসাইট কাজ করে</li>
                                                        <li>৫. ওয়েবসাইট এর সুবিধা কি কি </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-8</p>
                                                    <ul>
                                                        <li>Exam</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="accordion-box wow fadeInRight">
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৫
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-9</p>
                                                    <ul>
                                                        <li>১. ফেইসবুক বিজনেস ম্যানেজার </li>
                                                        <li>২. ফেইসবুক এড ম্যানেজার</li>
                                                        <li>৩. ফেইসবুক বুস্ট, প্রমট, এড ক্যাম্পেইন কি ?</li>
                                                        <li>৪. ক্যাম্পেইন অব্জেকটিভ সিলেকশন</li>
                                                        <li>৫. বিজনেস ম্যানেজার পেমেন্ট মেথড </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 10</p>
                                                    <ul>
                                                        <li>১. ক্যাম্পেইন ম্যানেজমেন্ট এন্ড রিপোর্টিতি । এডভান্সড ফিচারস
                                                            এন্ড টুলস</li>
                                                        <li>২. ডেইলি বাজেট বনাম লাইফটাইম বাজেট ডেইলি বাজেট ম্যানেজমেন্ট ।
                                                            লাইফটাইম বাজেট স্ট্র্যাটেজিস</li>
                                                        <li>৩. বাজেট অপটিমাইজেশন টেকনিক্স । বাজেটিং কন্সিডারেশন</li>
                                                        <li>৪. ফেইসবুক পিক্সেল এবং ইভেন্ট সেটআপ মাস্টারি</li>
                                                        <li>৫. ফেইসবুক পিক্সেল এর পরিচিতি । ইভেন্ট ট্র্যাকিং সেটআপ ।
                                                            এডভান্সড ইভেন্ট কনফিগারেশন । ক্রস - ডোমেইন ট্র্যাকিং</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৬
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-11</p>
                                                    <ul>
                                                        <li>১. কনভারসন এপিআই এবং ইভেন্ট ম্যাচ কোয়ালিটি সেটআপপ</li>
                                                        <li>২. কনভারশন এপিআই এর পরিচিতি । বেনিফিটস অফ কনভারশন এপিআই ।
                                                            অপটিমাইজিং ইভেন্ট ম্যাচ কোয়ালিটি ।</li>
                                                        <li>৩. ফেইসবুক এডস লোকেশন এবং ডেমোগ্রাফিক টার্গেটিং</li>
                                                        <li>৪. ফেইসবুক অডিয়েন্স বিল্ডিং স্ট্র্যাটেজি</li>
                                                        <li>৫. বিল্ডিং সেভড অডিয়েন্স। ক্রিয়েটিং কাস্টম অডিয়েন্স।
                                                            ইন্টারেস্ট -বেসড অডিয়েন্স টার্গেটিং । ডাইনামিক অডিয়েন্স
                                                            সেগমেনটেশন</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 12</p>
                                                    <ul>
                                                        <li>Exam</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৭
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-13</p>
                                                    <ul>
                                                        <li>১. ফেইসবুক কাস্টম এবং লুক এ লাইক অডিয়েন্স</li>
                                                        <li>২. ওভারলেপ এনালাইসিস বিটুইন কাস্টম এন্ড লুক এ লাইক অডিয়েন্স ।
                                                        </li>
                                                        <li>৩. ইন্টারপ্রেটিং ওভারলেপ ইন্সাইটস । টেইলরিং এড ক্রিয়েটিভ ।</li>
                                                        <li>৪. A/B টেস্টিং এড ভেরিয়েশন</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 14</p>
                                                    <ul>
                                                        <li>১. ওয়েবসাইট কি</li>
                                                        <li>২. ওয়েব সাইট এর প্রয়জনিতা</li>
                                                        <li>৩. ওয়েবসাইট কি ভাবে কাজ করে</li>
                                                        <li>৪. ওয়েবসাইট তৈরি তে কি কি টেকনোলজি বাবাহার হয়</li>
                                                        <li>৫. ওয়েবসাইট তৈরি এর জন্য কি ভাবে এজেন্সি অথবা ডেভেলপার হায়ার
                                                            করবেন</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৮
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-15</p>
                                                    <ul>
                                                        <li>১. Landing পেজ কি</li>
                                                        <li>২. ফেসবুক মার্কেটিং এর জন্য Landing পেজ কেন প্রয়োজন</li>
                                                        <li>৩. Landing পেজ সুবিধা কি </li>
                                                        <li>৪. ওয়েবসাইট ও Landing পেজ এর মধ্যে পারথক কি</li>
                                                        <li>৫. Landing পেজ থেকে কেন বেশি সেলস হয়</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 16</p>
                                                    <ul>
                                                        <li>১. Google My Business Page Optimization (GMB)</li>
                                                        <li>২. Claim/Create a GMB Listing</li>
                                                        <li>৩. Optimizing existing page/Adding Business Info</li>
                                                        <li>৪. Verify Your GMB Listing</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="accordion-box wow fadeInRight">
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ৯
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-17</p>
                                                    <ul>
                                                        <li>১. What is Search Engine Optimization (SEO)?</li>
                                                        <li>২. Basic Search operators</li>
                                                        <li>৩. Why does my website need SEO?</li>
                                                        <li>৪. Career with SEO</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 18</p>
                                                    <ul>
                                                        <li>১. Google Trend</li>
                                                        <li>২. Organic Search (SEO)</li>
                                                        <li>৩. Paid Search (PPC)</li>
                                                        <li>৪. Referrals (Backlinks)</li>
                                                        <li>৫. Direct Traffic</li>
                                                        <li>৬. Familiar with other different componentVerify Your GMB
                                                            Listing</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ১০
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-19</p>
                                                    <ul>
                                                        <li>১. Submitting Website to Webmaster</li>
                                                        <li>২. Internal links & links to your site.</li>
                                                        <li>৩. Disavow Tool Usage </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 20</p>
                                                    <ul>
                                                        <li>* Exam</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ১১
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-21</p>
                                                    <ul>
                                                        <li>১. কাসটমার ক্মিনিকেসন</li>
                                                        <li>২. লিড মানাজমেন্ট</li>
                                                        <li>৩. কল সেন্তার মানাজমেন্ট</li>
                                                        <li>৪. ডেলিভারি মানাজমেন্ট</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 22</p>
                                                    <ul>
                                                        <li>১. আমারা কম ইনভেস্টমেন্ট দিয়ে একটি বিজনেস শুরু করব?</li>
                                                        <li>২. সেই বিজনেস দিয়ে প্রতি মাসে মিনিমাম ৫ লাখ টাকা সেলস নিয়ে আসব
                                                            ইনশাল্লাহ</li>
                                                        <li>৩. বিজনেস ইনভেস্টমেন্ট নিয়ে বিস্তারিত আলোচনা</li>
                                                        <li>৪. কি ভাবে আমাদের থেকে ইনভেস্টমেন্ট পাবেন</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">সপ্তাহ - ১২
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class-23</p>
                                                    <ul>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text">
                                                    <p>Class 24</p>
                                                    <ul>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h3>যেসব টুল ইউজ করবেন</h3>
                            <div class="text">আপনার কাছে যদি একটি ল্যাপটপ/ কম্পিউটার/ স্মার্ট ফোন ও ইন্টারনেট কানেকশন
                                থাকে। ও যদি আপনি অনলাইন বিজনেস করে প্রতিদিন লাখ টাকা সেলস করে, নিজেকে একজন সফল অনলাইন বিজনেস
                                উদ্যোক্তা হিসেবে দেখার স্বপ্ন দেখেন তাহলে কোর্স টি হতে পারে আপনার জন্য বেস্ট চয়েজ। যদি এই ৩
                                মাসের জার্নি আপনি লেগে থাকতে পারেন। কথা দিলাম আপনার পরিশ্রম ও আমাদের চেষ্টায় সফল হবে
                                ইনশাল্লাহ।</div>
                        </div>
                        <div class="landing-inner-box">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/1-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Meta Business Suit</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/2-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Facebook Pixel</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/3-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Google Analytics 4</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/4-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Google Ads</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/5-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Google Tag Manager</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/6-icon.png') }}"
                                            alt="">
                                        <h6 class="title">ChatGPT</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/7-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Google Spreadsheet</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/8-icon.png') }}"
                                            alt="">
                                        <h6 class="title">WhatsApp</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                    <div class="landing-content-box"
                                        style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                        <img width="40px" src="{{ asset('frontend/images/landing/9-icon.png') }}"
                                            alt="">
                                        <h6 class="title">Canva</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend/images/resource/about1-1.webp') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section innerpage" style="background: #000; padding: 50px 0 0 0">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="landing-inner-box">
                            <div class="text landing_font mt-4">
                                <a class="text landing_font" style="font-size: 20px" href="tel:01303523442">Countdown
                                    hoba</a> <br>
                                <a class="text landing_font" style="font-size: 20px" href="tel:01303523442">প্রয়োজনে ফোন
                                    করুন - 01303523442</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <h3 class="text-white">Successful Online Business with Digital Marketing</h3>
                        <div class="sec-title">
                            <div class="text landing_font text-white">দেশের সব চেয়ে কম খরচে বিজনেস কোর্স যেখেন আপনি সিখতে
                                পারবেন কিভাবে শুন্য লাখ টাকার বিজনেস শুরু করা যায় । আমারা আসা করি যদি সময় দিয়ে লেখে থাকেন
                                আপনি হবেন সহল অনলাইন বিজনেস উদ্যোক্তা।</div>
                            <div class="text landing_font text-white">কোর্স ফি - ১০০০০ টাকা মাত্র</div>
                            <div class="my-3 d-flex ">
                                <form action="{{ route('services.product.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                                    <button type="submit" class="theme-btn text-white" style="color: #F94A29;"><a>Admission</a></button>
                                </form>
                                <form class="mx-2" action="{{ route('services.product.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                                    <button type="submit" class="theme-btn text-white" style=" background: #29cff9;"><a>Consultancy</a></button>
                                </form>
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
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend/images/resource/about1-1.webp') }}" alt=""></figure>
                            {{-- <div class="play-box">
                            <figure class="image-2 overlay-anim"><img src="{{ asset('frontend') }}/images/resource/about1-2.webp" alt="">
                            </figure>
                            <a title="" href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery"
                                data-caption="">
                                <i class="icon fa fa-play"></i>
                            </a>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title landing_ul">
                            <h3>কোর্স টি কাদের জন্য</h3>
                            <ul style="margin-left: 20px">
                                <li>অনলাইন বিজনেস শুরু করবেন ভাবছেন</li>
                                <li>যারা নিজেই নিজের ব্যবসার অনলাইন মার্কেটিং করতে চান</li>
                                <li>অফলাইন বিজনেস কে অনলাইনে নিতে চাচ্ছেন</li>
                                <li>অনলাইন বিজনেস আছে কিন্তু গ্র-আপ করতে পারছেন না</li>
                                <li>যারা ফেইসবুক থেকে আয় করার উপায় জানতে চান।</li>
                                <li>যারা অফিসের প্রয়োজনে কাজের জন্য শিখতে চান।</li>
                                <li>যারা কনটেন্ট ক্রিয়েশন করে পারসোনাল ব্র্যান্ডিং করতে চান।</li>
                                <li>যারা ফ্রিল্যান্সিং করতে চান।</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="inner-column">
                            <h3>Successful Online Business with Digital Marketing</h3>
                            <div class="sec-title">
                                <div class="my-3 d-flex ">
                                    <form action="{{ route('services.product.checkout') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                                        <button type="submit" class="theme-btn text-white" style="color: #F94A29;"><a>Admission</a></button>
                                    </form>
                                    <form class="mx-2" action="{{ route('services.product.checkout') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                                        <button type="submit" class="theme-btn text-white" style=" background: #29cff9;"><a>Consultancy</a></button>
                                    </form>
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
                <h2>WHAT’s TALKING about<br> our Learners?</h2>
            </div>
            <div class="row testi-slider">
                <div class="testimonial-block col-md-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-quote-1"></i>
                        </div>
                        <div class="content-box">
                            <div class="text">aaaaaa</div>
                            <div class="auther-info">
                                <img src="ssss" alt>
                                <div class="info-box">
                                    <h6 class="title">sss</h6>
                                    <span>sss</span>
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
                            <div class="text">aaaaaa</div>
                            <div class="auther-info">
                                <img src="ssss" alt>
                                <div class="info-box">
                                    <h6 class="title">sss</h6>
                                    <span>sss</span>
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
                            <div class="text">aaaaaa</div>
                            <div class="auther-info">
                                <img src="ssss" alt>
                                <div class="info-box">
                                    <h6 class="title">sss</h6>
                                    <span>sss</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section innerpage" style="background: #000; padding: 50px 0 0 0">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('frontend/images/landing/banner.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title landing_ul">
                            <h3 class="text-white">title dita hoba certificate</h3>
                            <div class="text text-white">
                                demo জব মার্কেটে আমাদের এই সার্টিফিকেট আপনি বাড়তি যোগ্যতার প্রমাণ হিসেবে দেখাতে পারবেন। দক্ষতা অর্জনের এই সার্টিফিকেট ইন্ডাস্ট্রিতে আপনার ক্যারিয়ার ডেভেলপমেন্টে সহায়তা করবে। আমাদের এই সার্টিফিকেট জব ইন্ডাস্ট্রিতে আপনাকে প্রফেশনাল হিসেবে ইন্ট্রোডিউস করাবে। LinkedIn এর মতো প্রফেশনাল ওয়েবসাইটে সার্টিফিকেট অ্যাড করতে পারবেন।
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

                <div class="content-column col-lg-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="https://nugortechit.com/uploads/team/FanBd131697.png" alt="">
                        </div>
                        <div class="col-lg-9">
                            <div class="inner-column">
                                <div class="">
                                    <h3>Successful Online Business with Digital Marketing</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <div class="landing-content-box"
                                            style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                            <span class="landing_font">১৩</span><br>
                                            <span class="landing-title landing_font">টপিক</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="landing-content-box"
                                            style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                            <span class=" landing_font">48</span><br>
                                            <span class="landing-title  landing_font">লেসন</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="landing-content-box"
                                            style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                            <span class="landing_font">24</span><br>
                                            <span class="landing-title  landing_font">ভিডিও</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="landing-content-box"
                                            style="border: 1px solid #f94a29; text-align: center; padding-top: 10px;">
                                            <span class="landing_font">5</span><br>
                                            <span class="landing-title landing_font">Exam </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-column">
                                    <div class="sec-title">
                                        <div class="text">কোর্স ফি - ১০০০০ টাকা মাত্র</div>
                                        <div class="my-3">
                                            <form action="{{ route('services.product.checkout') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                                <button type="submit" class="theme-btn text-white" style="color: #F94A29;"><a>Admission</a></button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="image-box">
                            <div class="text">countdown</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
