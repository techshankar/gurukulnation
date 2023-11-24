@extends('common.layout')
@section('content')
<main>
    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">Services Listing</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">
                @foreach($services as $key=>$row)
                <div class="col-lg-4 col-4">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="{{ URL::to('service/details',$row->slug) }}">
                                <img src="{{ $row->image }}" class="news-image img-fluid" alt="">
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
                            <!-- <div class="d-flex mt-2">
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
                            </div> -->
 <br>
                            <div class="news-block-title mb-2">
                                <h4><a href="{{ URL::to('service/details',$row->slug) }}" class="">{{ $row->title }}</a></h4>
                            </div>

                            <div class="news-block-body">
                                @php $split = str_split($row->description, 110);
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