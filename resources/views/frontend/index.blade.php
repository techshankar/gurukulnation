@extends('common.layout')
@section('content')

<!-- <main>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        @foreach($banners as $row)
                            <div class="carousel-item active">
                                <img src="{{ $row->banner }}" class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>{{ $row->title }}</h1>

                                    <p>{{ $row->content }}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">We revolutionize global finance</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ URL::to('public/assets/images/icons/hands.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Diverse <strong>Ecosystems</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ URL::to('public/assets/images/icons/heart.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Sacred </strong> Rivers</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ URL::to('public/assets/images/icons/receive.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Biodiversity <strong>Hotspot</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ URL::to('public/assets/images/icons/scholarship.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Cultural </strong>Integration</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="@if(!empty($ourStory->id)){{ $ourStory->image }}@else @endif" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Our Story</h2>

                        <h5 class="mb-3">@if(!empty($ourStory->id)){{ $ourStory->title_our_story }}@else @endif</h5>

                        <p class="mb-0">@if(!empty($ourStory->id)){{ $ourStory->desc_our_story }}@else @endif</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>@if(!empty($ourStory->id)){{ $ourStory->disc_our_mission }}@else @endif</p>

                                <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                       @if(!empty($ourStory->id)){{ $ourStory->bullets1_our_mission }}@else @endif
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        @if(!empty($ourStory->id)){{ $ourStory->bullets2_our_mission }}@else @endif
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="2010" data-speed="1000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">Founded</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="20" data-speed="1000"></span>
                                        <span class="counter-number-text">M</span>
                                    </div>

                                    <span class="counter-text">Donations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <img src="@if(!empty($founder->id)){{ $founder->image }}@else''@endif" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">@if(!empty($founder->id)){{ $founder->name }}@else @endif</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">@if(!empty($founder->id)){{ $founder->designation }}@else @endif</p>

                        <p>@if(!empty($founder->id)){{ $founder->details }}@else @endif</p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="#" class="me-4">Make a donation</a>

                    <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Our Services</h2>
                </div>
                @foreach($services as $row)
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{ $row->image }}" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">{{ $row->title }}</h5>
                                @php $split = str_split($row->description, 100);
                                $description = $split[0] . "...";
                                @endphp
                                <p>{{ strip_tags($description) }}</p>

                               
                            </div>

                            <a href="{{ URL::to('all/services') }}" class="custom-btn btn">Services</a>
                        </div>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </section>

    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5 text-center">
                    <h2><a href="{{ URL::to('all/blogs') }}">Blogs</a></h2>
                </div>
                <div class="col-lg-7 col-12">
                    @foreach($blogs as $key=>$row)
                    @if($key<2); <div class="news-block">
                        <div class="news-block-top">
                            <a href="news-detail.html">
                                <img src="{{ $row->image }}" class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    Lifestyle,
                                </a>

                                <a href="#" class="category-block-link">
                                    Clothing Donation
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        @php
                                        $posted_at = strtotime($row->created_at);
                                        @endphp
                                        {{ date('F d, Y', $posted_at) }}
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By Admin
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="{{ URL::to('blog/details',$row->slug) }}" class="">{{ $row->title }}</a></h4>
                            </div>

                            <div class="news-block-body">
                                @php $split = str_split($row->content, 150);
                                $content = $split[0] . "...";
                                @endphp
                                <p>{{ strip_tags($content) }}</p>
                            </div>
                        </div>
                </div>
                @endif
                @endforeach
            </div>

            <div class="col-lg-4 col-12 mx-auto">
                
                <form class="custom-form search-form" action="#" method="" role="form">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                    <button type="submit" class="form-control">
                        <i class="bi-search"></i>
                    </button>
                </form>

                <h5 class="mt-5 mb-3">Popular Posts</h5>
                @foreach($popular as $key=>$row)
                <div class="news-block news-block-two-col d-flex mt-4">
                    <div class="news-block-two-col-image-wrap">
                        <a href="news-detail.html">
                            <img src="{{ $row->image }}" class="news-image img-fluid" alt="">
                        </a>
                    </div>

                    <div class="news-block-two-col-info">
                        <div class="news-block-title mb-2">
                            <h6><a href="news-detail.html" class="news-block-title-link">{{ $row->title }}</a>
                            </h6>
                        </div>

                        <div class="news-block-date">
                            <p>
                                <i class="bi-calendar4 custom-icon me-1"></i>
                                @php $posted_at2=strtotime($row->created_at) @endphp
                                {{ date('F d, Y', $posted_at2) }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="category-block d-flex flex-column">
                    <h5 class="mb-3">Categories</h5>
                    @foreach($blogCatgories as $row)
                    <a href="#" class="category-block-link">
                        {{ $row->name }}
                        @php
                        $postCount = DB::table('blog_posts')->where('category_id',$row->id)->count();
                        @endphp
                        <span class="badge">{{ $postCount }}</span>
                    </a>
                    @endforeach
                </div>

                <div class="tags-block">
                    <h5 class="mb-3">Tags</h5>
                    @foreach($blogCatgories as $row)
                    <a href="#" class="tags-block-link">
                        {{ $row->name }}
                    </a>
                    @endforeach
                </div>

                <form class="custom-form subscribe-form" action="{{URL::to('news/letter/saved')}}" method="post" role="form">
                    @csrf
                    <h5 class="mb-4">Newsletter Form</h5>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>

                    <div class="col-lg-12 col-12">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </section>


    <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="mb-lg-3">Happy customers</h2>

                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        @foreach($testimonials as $key => $row)
                            <div class="carousel-item @if($key == 0)active @endif">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">{{strip_tags($row->description)}}</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">{{$row->title}}</span></small>
                                </div>
                            </div>
                        @endforeach


                            <ol class="carousel-indicators">
                        @foreach($testimonials as $key => $row)
                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="{{$key+0}}" class="@if($key == 0)active @endif">
                                    <img src="{{ $row->image }}" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>
                        @endforeach

                            </ol>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Get in touch</h2>

                        <div class="contact-image-wrap d-flex flex-wrap">
                            <img src="{{ URL::to('public/assets/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}" class="img-fluid avatar-image" alt="">

                            <div class="d-flex flex-column justify-content-center ms-3">
                                <p class="mb-0">Clara Barton</p>
                                <p class="mb-0"><strong>HR & Office Manager</strong></p>
                            </div>
                        </div>

                        <div class="contact-info">
                            <h5 class="mb-3">Contact Infomation</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                58, Greater Vaishali 
Annapurna Road, INDORE
PIN-452009
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: +91-9039060607">
                                    +91-9039060607/8962835102
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mx-auto">
                    <form class="custom-form contact-form" action="{{URL::to('contact/store')}}" method="post" role="form">
                        @csrf
                        <h2>Contact form</h2>

                        <p class="mb-4">Or, you can just send an email:
                            <a href="#">info@m7rock</a>
                        </p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name here" required>
                            </div>
                        </div>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Enter your email here" required>

                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                        <button type="submit" class="form-control">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main> -->

<h1>Home Page</h1>
<h4>click here to: <a href="http://localhost/gurukul/admin" style="color:cadetblue;">Admin Login</a></h4>
@endsection