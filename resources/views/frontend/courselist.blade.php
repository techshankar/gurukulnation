@extends('common.layout')
@section('content')

<main>
    <style>
        .digital-course-txt {
            background-image: none !important;
        }
    </style>
    <section class="gold-banner-section">
        <div class="container">
            <div class="gold-banner-txt desktop-gold-txt">
                @foreach($courses as $row)
                <h2>{{$row->title}}</h2>
                @endforeach
                <h3>Digital Entrepreneurship Bundles I</h3>

                <a href="#">Buy Now</a>
            </div>
            <div class="mob-gold-img">
                <img src="{{ asset('public/frontend-styles/biz/img/marketing-mastery.png') }}">
            </div>

        </div>
    </section>
    <section class="why-section">
        <div class="container">
            <div class="why-number-div">
                <div class="why-num-sec">
                    <h2>1</h2>
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

                <div class="gold-banner-txt">
                    @foreach($courses as $row)
                    <h2>{{$row->title}}</h2>
                    @endforeach
                    <h3>Digital Entrepreneurship Bundles I</h3>

                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>

    </section>

    @foreach($courses as $row)
    <section class="digital-section">
        <div class="container-fluid">
            <div class="row res">
                <div class="col-md-6 col-sm-6 col-xs-12 a">
                    <div class="digital-course-txt dm-txt">
                        @php $catId = ''; @endphp
                        @foreach($courseCategories as $cat)
                        @if($cat->id == $row->category_id)
                        @php $catId = $cat->id; @endphp
                        <h2 class="heading-orange">{{$cat->name}}</h2>
                        @endif
                        @endforeach
                        @php $catSlug = DB::table('course_categories')->where('id',$catId)->first(); @endphp
                        <p>{{ strip_tags($row->short_desc) }}</p>
                        <a href="{{ URL::to('course/details',$catSlug->slug) }}" class="exp-btn">Explore Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 b">
                    <div class="course-img-div copywrite">
                        <a href="../bundel_courses/BundleCourseDet885e.html?course=UsTmmPsq6y8=">
                            <img src="{{ $row->thumbnail }}" height="400">

                            <div class="slide-name">
                                <h2>{{ $row->title }}</h2>
                                <h4>Anmol Duggal</h4>
                            </div>
                        </a>
                        <div class="course-detail-right course-txt">
                            <h3>This Course Includes</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/biz/img/lang-icon.jpg') }}">
                                    Language - English
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/biz/img/lang-icon.jpg') }}">
                                    Subtitles - No
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/biz/img/use-icon.jpg') }}">
                                    Use On Desktop,Tablet,Mobile
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/biz/img/full-icon.jpg') }}">
                                    Full Lifetime Access
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend-styles/biz/img/certificate-icon.jpg') }}">
                                    Certificate Of Completion
                                </li>
                            </ul>

                        </div>
                        <!-- <div class="course-detail-right course-txt">
                                <h3>This Course Includes</h3>
                                @foreach($vdos as $vdo)
                                 @if($vdo->cat_id)
                                    <ul>
                                        <li>
                                            <img src="{{ asset('public/frontend-styles/biz/img/lang-icon.jpg') }}">
                                            Language: {{ $vdo->language }}
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/frontend-styles/biz/img/lang-icon.jpg') }}">
                                            Subtitles: {{ $vdo->sub_title }}
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/frontend-styles/biz/img/use-icon.jpg') }}">
                                            Watch: {{ $vdo->watch_on }}
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/frontend-styles/biz/img/full-icon.jpg') }}">
                                            Access Time: {{ $vdo->access_time }}
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/frontend-styles/biz/img/certificate-icon.jpg') }}">
                                            Certificate Of Completion
                                        </li>
                                    </ul>
                                    @endif
                                 @endforeach
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <section class="buy-now-section">
        <a href="../../Signup1409.html?id=+IE6GzOTU90=&amp;ref=Tun5tO0hm4c=" class="buy-btn">Buy Now</a>
    </section>
</main>
@endsection