@extends('common.layout')
@section('content')

<main>
    <section class="course-section" style="margin-top: 120px;">
        <div class="container">
            <input type="hidden" name="ctl00$ContentPlaceHolder1$hdn_id" id="ContentPlaceHolder1_hdn_id" value="1" />
            <div class="bundel_courses_purchase_box">
                <div class="courses_purchase_video">
                    <p>SALE</p>

                    <h3><span class="cls_price">₹{{ $courses->price }}</span></h3>
                </div>
                <div class="courses_purchase_box buy-now-section addcourse">
                    <!-- <h5>This Course Includes</h5> -->
                    <input type="button" name="ctl00$ContentPlaceHolder1$btn_buynow" value="Buy Now" id="ContentPlaceHolder1_btn_buynow" class="buy__now" class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 10px;" />
                    <h6 style="border-top: 1px solid #d9d9d9; padding-top: 30px; margin-top: 30px;"><i class="fa fa-language" aria-hidden="true"></i>Language-@if(!empty($vdos->language)){{$vdos->language}}@endif</h6>
                    <h6><i class="fa fa-file-text" aria-hidden="true"></i>Subtitles-@if(!empty($vdos->language)){{ $vdos->sub_title }}@endif</h6>
                    <h6><i class="fa fa-tablet" aria-hidden="true"></i>Use On @if(!empty($vdos->language)){{ $vdos->watch_on }}@else Desktop,Mobile,Laptop @endif</h6>
                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i>Access-@if(!empty($vdos->language)){{ $vdos->access_time }}@else full time @endif</h6>
                    <h6><i class="fa fa-certificate" aria-hidden="true"></i>Certificate Of Completion</h6>
                    <h6><i class="fa fa-file-video-o" aria-hidden="true"></i>21 lessons (3 Hr. 35 Min. )</h6>
                    <h6><i class="fa fa-smile-o" aria-hidden="true"></i>Learn at Your Own Pace</h6>
                </div>
            </div>
            <!-- details  -->
            <div class="bundel_main_content">
                <div class="bundel_courses_banner_content">
                <h2 class="heading-black">@if(!empty($courses->title)){{ $courses->title }}@endif</h2>
                    <p>{{ $courses->sub_title }}</p>
                    <h6><span class="best_selling">Best seller</span><span class="language"><i class="fa fa-volume-up" aria-hidden="true"></i>@if(!empty($vdos->language)){{$vdos->language}}@endif</span></h6>
                </div>
                <div class="bundel_courses_video embed-responsive embed-responsive-16by9">
                    @if(!empty($vdos->video))
                    <iframe src='{{ $vdos->video }}' class="embed-responsive-item" title="How to Earn 1Lakh a Month with Social Media? | Gurukulnation | Affiliate Marketing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    @else
                    @if(!empty($vdos->vdo_url))
                    <iframe width="1424" height="532" src="{{$vdos->vdo_url}}" title="Salman Khan Rapid Fire Round" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    @endif
                    @endif
                    <!-- <div class="bundle_overlay getleadPop">
                        <img src="{{ asset('public/frontend-styles/biz/img/play_btn.png') }}" />
                    </div> -->
                </div>

                <div class="you-will-learn-section">
                    <div class="you-will-learn-div">
                        <h3>What you'll learn</h3>
                        @php $whatULearnExplod = explode(',',$courses->what_you_will_learn); @endphp
                        <ul>
                            @foreach($whatULearnExplod as $whtULearn)

                            <li><i class="fa fa-check" aria-hidden="true"></i>{{ $whtULearn }}</li>

                            <!-- <span id="dots"></span>
                            <span id="more">
                                <ul>

                                    <li><i class="fa fa-check" aria-hidden="true"></i>The tools learned from the course can be applied in the real-life immediately, to help themselves and others.</li>

                                </ul>
                            </span>-->
                            @endforeach
                            <!-- <div class="read-more-btn">
                                <button type="button" type="button" onclick="myFunction()" id="myBtn">Read More...</button>
                            </div>  -->
                        </ul>

                    </div>
                </div>
                <div class="course-desc-section">
                    <div class="course-des-div">
                        <h3>Course Description</h3>

                        <div class="key-feature addReadMore showlesscontent">
                            <!-- <h4>Do you want to learn how to work with Excel?</h4> -->
                            <p>{{ strip_tags($courses->course_description) }}</p>

                        </div>
                        <div class="key-feature">
                            <img src="{{ $courses->thumbnail }}" />
                        </div>
                    </div>
                </div>
                <div class="course-content">
                    <div class="course-cotent-heading">
                        <h3>Course Content</h3>
                    </div>
                    <div class="expand-div">
                        <div class="lecture-div">
                            <ul>
                                <li>Sections 1</li>
                                <li>{{$allVdos->count()}} Lectures</li>
                                <li>3 Hr. 35 Min. </li>
                            </ul>
                        </div>
                        <div class="expand-txt">
                            <p>Expand Sections</p>
                        </div>
                    </div>

                    <div class="expand-tab">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <button role="button" type="button" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="tab-title"><i class="fa fa-angle-up " aria-hidden="true"></i>Course</span>

                                        </button>


                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body ">
                                        @foreach($allVdos as $row)
                                        <ul class="video-ul ">

                                            <li>
                                                <div class='video-sapn'><i class='fa fa-play-circle' aria-hidden='true'></i><a href='#'>{{ $row->vdo_heading }}</a></div>
                                                <!-- <div class='preview-span' data='https://player.vimeo.com/video/696950688?h=8df88c066d'><a style='cursor: pointer'> Preview</a></div>-->
                                                <div class='time-span'>02:04</div>
                                            </li>
                                            <button type="button" class="exp-li-btn"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                            <span class="expan-li">
                                            </span>
                                        </ul>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bundel_courses_certificate">
                    <h4>Earn the Certificate of Completion</h4>
                    <p>Unlock greater career opportunities and a better LinkedIn profile with an added certificate.</p>
                    <div class="certificate_img_box">
                        <img src="{{ $courses->certificate_img }}" />
                    </div>
                </div>
                <div class="bundel_courses_faqs">
                    <h4>Frequently Asked Questions</h4>
                    <div id="faq">
                        <ul>
                            @foreach($faqs as $faq)
                            <li>
                                <input type="checkbox" checked="">
                                <i></i>
                                <h2>{{ $faq->question }}</h2>
                                <p>
                                    <span>{{ strip_tags($faq->answer) }}</span>
                                </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <div class="expect_section">
                    <h4>What to expect from Gurukulnation Courses?</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="expert_couses_box">
                                <h5><i class="fa fa-certificate" aria-hidden="true"></i>Certificate of completion</h5>
                                <p>Your learning with Gurukulnation never goes unrewarded. So get a certificate of completion and open the doors to a brighter future.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="expert_couses_box">
                                <h5><i class="fa fa-leanpub" aria-hidden="true"></i>Learn at Your Own Pace</h5>
                                <p>We aim to provide education that is available whenever and wherever you want. So be flexible with our education.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="expert_couses_box">
                                <h5><i class="fa fa-users" aria-hidden="true"></i>Learn from Experienced mentors</h5>
                                <p>Enjoy the learning process from the experienced themselves. Gurukulnation believes in learning from experts to grow like an expert.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="expert_couses_box">
                                <h5><i class="fa fa-cogs" aria-hidden="true"></i>Trending Practical Skills</h5>
                                <p>Majorly Gurukulnation’s courses are trending skills that can shape you better and at par with the future, so practical knowledge is essential here.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="bundel_courses_instructor instructor-detail">
                    <h4>Your Instructor</h4>
                    <h6>
                        <img src="{{ asset('public/frontend-styles/biz/Subscription/img/instructor_img/rohitsh123%40gmail.com.jpg') }}" />Rohit Sharma <span class="instructor-teacher">Instructor</span><span> <span>Advance Personality Development</span>
                    </h6>

                    <div class="addReadMore showlesscontent">
                        <p>Rohit Sharma is an expert professional in sales, marketing, and entrepreneurship. He is a phenomenal public speaker and an extremely unconventional mind who do not think of what society says rather focuses on what society needs. He has a decade of experience in coaching people for personality development, communication skills, and public speaking.</p>
                    </div>

                </div> -->
            </div>
            <!--/ details  -->
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="become_contact">
                    <div class="row become_contact_center">
                        <div class="col-sm-7">
                            <div class="become_contact_right">
                                <h6>Advance Personality Development</h6>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="become_contact_right become_right buy-now-section">
                                <img src="{{ asset('public/frontend-styles/Biz/img/left-arrow.png') }}" class="move-arrow" />

                                <input type="button" name="ctl00$ContentPlaceHolder1$btnbuy" value="Buy Now" id="ContentPlaceHolder1_btnbuy" class="btn buy-btn" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection