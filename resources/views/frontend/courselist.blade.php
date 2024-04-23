@extends('common.layout')
@section('content')
@php
$catId = '';
@endphp
@foreach($courses as $row)
@php
$catId = $row->category_id;
$courseCount = DB::table('courses')->where('category_id',$row->category_id)->groupBy('category_id')->count() @endphp
@endforeach
@php
$catName = DB::table('course_categories')->where('id',$catId)->first();
@endphp

<main>
    <style>
        .digital-course-txt {
            background-image: none !important;
        }
    </style>
    <section class="gold-banner-section">
        <div class="container">
            <div class="gold-banner-txt desktop-gold-txt">

                <h2 style="color:white;">{{$catName->name}}</h2>
                <h3>Digital Entrepreneurship Bundles I</h3>

                <a href="#">Buy Now</a>
            </div>
            <div class="mob-gold-img">
                <img src="{{ asset('public/frontend-styles/Biz/img/marketing-mastery.png') }}">
            </div>

        </div>
    </section>
    @if(Session::has('success'))
    <!-- flash message  -->
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
        @if(Session::has('error'))
        <div class="alert alert-danger p-3 text-green-700 bg-green-300 rounded">
            {{Session::get('error')}}
        </div>
        @endif
    </div>
    <!--/ flash message  -->

    <section class="why-section">
        <div class="container">
            <div class="why-number-div">
                <div class="why-num-sec">
                    <h2>{{$courseCount}}</h2>
                    <p>Courses</p>
                </div>
                <div class="why-num-sec">
                    <h2>70K+</h2>
                    <p>Students Enrolled</p>
                </div>
                <div class="why-num-sec">
                    <h2>1</h2>
                    <p>Instructors</p>
                </div>
                <div class="why-num-sec">
                    <h2>15+</h2>
                    <p>Hours</p>
                </div>
            </div>
            <div class="mob-gold-banner">
                <!-- for mobile  -->
                <div class="gold-banner-txt">
                    @foreach($courses as $row)
                    <h2>{{$row->title}}</h2>
                    @endforeach
                    <h3>Digital Entrepreneurship Bundles I</h3>
                    <a href="#">Buy Now</a>
                </div>
            </div>
            <!--/ for mobile  -->
        </div>
    </section>

    @foreach($courses as $key=>$row)

    @if($key % 2 ==0)
    <section class="coures-include-section">
        <div class="container-fluid">
            <div class="row res">
                <div class="col-md-6 col-sm-6 col-xs-12 a">
                    <div class="digital-course-txt pd-txt">
                        <h2 class="heading-orange">{{$row->title}}</h2>
                        <p>{{ strip_tags($row->short_desc) }}</p>
                        <div class="course-detail-right course-txt">
                        <h3>This Course Includes</h3>
                        @php $vdos = DB::table('videos')->where('course_id',$row->id)->first(); @endphp
                        <ul>
                            <li>
                                <img src="{{ asset('public/frontend-styles/Biz/img/lang-icon.jpg') }}">
                                Language - @if(!empty($vdos->language)){{$vdos->language}}@else English @endif
                            </li>
                            <li>
                                <img src="{{ asset('public/frontend-styles/Biz/img/lang-icon.jpg') }}">
                                Subtitles - @if(!empty($vdos->sub_title)){{$vdos->sub_title}}@else No @endif
                            </li>
                            <li>
                                <img src="{{ asset('public/frontend-styles/Biz/img/use-icon.jpg') }}">
                                Watch On - @if(!empty($vdos->watch_on)){{$vdos->watch_on}}@else English @endif
                            </li>
                            <li>
                                <img src="{{ asset('public/frontend-styles/Biz/img/full-icon.jpg') }}">
                                Access Time - @if(!empty($vdos->access_time)){{$vdos->access_time}}@else English @endif
                            </li>
                            <li>
                                <img src="{{ asset('public/frontend-styles/Biz/img/certificate-icon.jpg') }}">
                                Certificate Of Completion
                            </li>
                        </ul>

                    </div>
                        <a href="{{ URL::to('course/details',$row->slug) }}" class="exp-btn">Explore Now</a>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 b">
                    <div class="course-img-div copywrite">
                        <a href="../bundel_courses/BundleCourseDet9441.html?course=23Yy/qB87Eo=">
                            <img src="{{ $row->thumbnail }}" height="400">

                            <div class="slide-name">
                                <h2>{{ $row->title }}</h2>
                                <!-- <h4>Anmol Duggal</h4> -->
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="video-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="course-img-div-left master-course">
                        <a href="../bundel_courses/BundleCourseDet7f71.html?course=pTBpk7r3C+g=">
                            <img src="{{ $row->thumbnail }}" height="400">

                            <div class="slide-name">
                                <h2>{{ $row->title }}</h2>
                                <!-- <h4>Anmol Duggal</h4> -->
                            </div>
                        </a>
                        <div class="course-detail course-txt">
                            <h3>This Course Includes</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/Biz/img/lang-icon.jpg') }}">
                                    Language - @if(!empty($vdos->language)){{$vdos->language}}@else English @endif
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/Biz/img/lang-icon.jpg') }}">
                                    Subtitles - @if(!empty($vdos->sub_title)){{$vdos->sub_title}}@else No @endif
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/Biz/img/use-icon.jpg') }}">
                                    Watch On - @if(!empty($vdos->watch_on)){{$vdos->watch_on}}@else English @endif
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/Biz/img/full-icon.jpg') }}">
                                    Access Time - @if(!empty($vdos->access_time)){{$vdos->access_time}}@else English
                                    @endif
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/Biz/img/certificate-icon.jpg') }}">
                                    Certificate Of Completion
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="course-txt-left vs-txt">
                        <h2 class="heading-orange">{{$row->title}}</h2>
                        <p>{{ strip_tags($row->short_desc) }}</p>
                        <a href="{{ URL::to('course/details',$row->slug) }}" class="exp-btn">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach
    <section class="buy-now-section">
        <a href="../../Signup1409.html?id=+IE6GzOTU90=&amp;ref=Tun5tO0hm4c=" class="buy-btn">Buy Now</a>
    </section>
</main>
<!-- for disapera flash message  -->
<script>
    $(document).ready(function() {
        $(".alert").delay(5000).slideUp(300);
    });
</script>
@endsection