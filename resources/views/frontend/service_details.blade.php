@extends('common.layout')
@section('content')
<main>

        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white">Service Details</h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <img src="{{ $serviceDetails->image }}"
                                    class="news-image img-fluid" alt="">

                                <!-- <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Lifestyle,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Clothing Donation
                                    </a>
                                </div> -->
                            </div>

                            <div class="news-block-info">
                                <!-- <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            @php $posted_at=strtotime($serviceDetails->created_at); @endphp
                                            {{ date('F d, Y', $posted_at) }}
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>
                                </div> -->
<br>
                                <div class="news-block-title mb-2">
                                    <h4 class="text-secondary">{{ $serviceDetails->title }}</h4>
                                </div>

                                <div class="news-block-body text-dark">
                                    {{ strip_tags($serviceDetails->description) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Other Services</h5>

                        @foreach($services as $key=>$row)
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="{{ URL::to('service/details',$row->slug) }}">
                                    <img src="{{ $row->image }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="{{ URL::to('service/details',$row->slug) }}" class="news-block-title-link">{{ $row->title }}</a>
                                    </h6>
                                </div>
                                    @php $split = str_split($row->description, 40);
                                    $description = $split[0] . "...";
                                    @endphp
                                <div class="news-block-date">
                                    <p>{{ strip_tags($description) }}
                                        <!-- <i class="bi-calendar4 custom-icon me-1"></i>
                                        @php $posted_at2=strtotime($row->created_at) @endphp
                                        {{ date('F d, Y', $posted_at2) }} -->
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                       
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-4">
                        <h2>Related posts</h2>
                    </div>

                    @foreach($services as $row)
                    <div class="col-lg-6 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="{{ $row->image }}"
                                        class="news-image img-fluid" alt="">
                                </a>

                                <!-- <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Lifestyle,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Clothing Donation
                                    </a>
                                </div> -->
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <!-- <div class="news-block-date">
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
                                    </div> -->
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="{{ URL::to('service/details',$row->slug) }}" class="news-block-title-link">{{ $row->title }}</a></h4>
                                </div>

                                <div class="news-block-body">
                                    @php $split = str_split($row->description, 150);
                                    $description = $split[0] . "...";
                                    @endphp
                                    <p>{{ strip_tags($description) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection