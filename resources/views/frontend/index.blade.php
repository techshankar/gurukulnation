@extends('common.layout')
@section('content')

<main>
    <section style="display: block;">
        <div id="carousel-example-generic1" class="carousel banner__slider slide" data-ride="carousel"
            data-interval="4000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner banner__slider_inner" role="listbox">

                <input type="hidden" name="ctl00$ContentPlaceHolder1$hdncount" id="hdncount" value="0" />

                <div class="item active">
                    <div class="banner_item">
                        <img class="desktop__viewB_slide"
                            src="{{ asset('public/frontend-styles/Biz/img/myimgs/study_img.jpeg') }}" />
                    </div>
                </div>

                <div class="item">
                    <div class="banner_item">
                        <img class="desktop__viewB_slide"
                            src="{{ asset('public/frontend-styles/Biz/img/myimgs/study_img.jpeg') }}" />

                    </div>
                </div>
                <div class="item">
                    <div class="banner_item">
                        <img class="desktop__viewB_slide"
                            src="{{ asset('public/frontend-styles/Biz/img/myimgs/study_img.jpeg') }}" />

                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <div class="why-number-div-outer">
        <div class="container-80">
            <div class="why-number-div">
                <div class="why-num-sec">
                    <h2><span class="counter" data-count="{{ $whyGurukulNation->count1 }}">0</span>+</h2>
                    <p>{{ $whyGurukulNation->title1 }}</p>
                </div>
                <div class="why-num-sec">
                    <h2><span class="counter" data-count="{{ $whyGurukulNation->count2 }}">0</span> Lakh+</h2>
                    <p>{{ $whyGurukulNation->title2 }}</p>
                </div>

                <div class="why-num-sec">
                    <h2><span class="counter" data-count="{{ $whyGurukulNation->count3 }}">0</span>+</h2>
                    <p>{{ $whyGurukulNation->title3 }}</p>
                </div>
                <div class="why-num-sec">
                    <h2><span class="counter" data-count="{{ $whyGurukulNation->count4 }}">0</span>Cr.+</h2>
                    <p>{{ $whyGurukulNation->title4 }}</p>
                </div>
            </div>
        </div>
    </div>

    <section class="work-section wow fadeInUp">
        <div class="container-80">
            <div class="work-heading">
                <h2 class="heading-black index-title">How Gurukul Nation Workss</h2>
            </div>
            <div class="row ">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="explore-div">
                        <div class="explore-icon">
                            <img src="{{ asset('public/frontend-styles/Biz/img/geography.png') }}">
                        </div>
                        <div class="explore-title">
                            <h3>{{ $howGurukulNation->title }}</h3>
                            <h5>{{ $howGurukulNation->sub_title }}</h5>
                            <p>{{ $howGurukulNation->details }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="explore-div mid-div">
                        <div class="explore-icon">
                            <img src="{{ asset('public/frontend-styles/Biz/img/online-learning.png') }}">
                        </div>
                        <div class="explore-title">
                            <h3>{{ $howGurukulNation->title2 }}</h3>
                            <h5>{{ $howGurukulNation->sub_title2 }}</h5>
                            <p>{{ $howGurukulNation->details2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="explore-div">
                        <div class="explore-icon">
                            <img src="{{ asset('public/frontend-styles/Biz/img/reward.png') }}">
                        </div>
                        <div class="explore-title">
                            <h3>{{ $howGurukulNation->title3 }}</h3>
                            <h5>{{ $howGurukulNation->sub_title3 }}</h5>
                            <p>{{ $howGurukulNation->details3 }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="courseflix wow fadeInUp">
        <div class="">
            <section class="courseflix-section">
                <div class="container-80">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="courseflix__heading">
                                <h2 class="index-title"><span>Ups</span>killing Courses</h2>
                                <p>This segment offers lifetime access to a plethora of courses with self-paced
                                    learning. </p>
                            </div>
                        </div>
                    </div>
                    <!-- TESTIMONIALS -->
                    <section class="testimonials-in">
                        <div id="customers-testimonials-course"
                            class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-courseflix">

                            <!--COURSE 1 -->
                            @foreach($courses as $row)
                            <div class="item">
                                <div class="shadow-effect-in">

                                    <a href="#">
                                        <div class="our__courseflixContant">

                                            <div class="courseflix-img">
                                                <img src="{{ $row->thumbnail }}" />
                                            </div>
                                            <div class="text-div">
                                                <h2>{{ $row->title }}</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                            <!--END OF COURSE 1 -->
                        </div>
                    </section>
                    <!-- END OF TESTIMONIALS -->
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="all-coursesBtn">
                                <a class="explore__btn" href="{{ URL::to('upskilling/courses') }}">Explore more
                                    courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="digital_bundle">
        <div class="container-90">
            <div class="digital_bun">
                <div class="digital_bundle_heading">
                    <h2 class="index-title">Digital Entrepreneurship Bundles</h2>
                    <p>Choose from the wide range of skillful courses to crack the ultimate code of success in the
                        social media world.</p>
                </div>
                <div class="">
                    <div class="digital_bundle_left">
                        <ul class="digital_navigation">
                            @foreach($courseCategories as $key=>$row)
                            <li>
                                <a href="#{{ $key+1 }}">
                                    <span>{{ $row->name }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="digital_bundle_right">
                        @foreach($courseCategories as $row)
                        <section class="digital_course_main" id="{{ $key+1 }}">
                            <div class="digital_course_left">
                                @php $courseDesNThumb = DB::table('courses')->where('category_id',
                                $row->id)->first();
                                @endphp
                                <h3>@if($row->id){{ $row->name }} @endif</h3>
                                <p>{{ strip_tags($courseDesNThumb->home_page_desc) }}</p>
                                <p>
                                    <span><i class="fa fa-book" aria-hidden="true"></i>01 Course</span>
                                    <span class="program_hrs"><i class="fa fa-clock-o" aria-hidden="true"></i>15+
                                        Hours</span>
                                </p>
                                <p class="bundle-info"><i class="fa fa-check" aria-hidden="true"></i>Live Q&amp;A
                                    Support</p>
                                <p class="bundle-info"><i class="fa fa-check" aria-hidden="true"></i>13k+ Students
                                    Enrolled</p>
                                <p class="bundle-info"><i class="fa fa-check" aria-hidden="true"></i>Gurukul Nation
                                    Certificate</p>
                                <a href="{{ URL::to('course/list',$row->slug) }}">Know More</a>
                            </div>
                            <div class="digital_course_right">
                                <img src="{{ $courseDesNThumb->thumbnail }}" />
                            </div>
                        </section>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $(".counter").each(function() {
                var count = $(this);
                var countTo = count.attr('data-count');
                // console.log(countTo);
                $({
                    countNum: count.text()
                }).animate({
                    countNum: countTo,
                }, {
                    duration: 3000,
                    easing: 'linear',
                    step: function() {
                        count.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        count.text(this.countNum);
                    }
                });
            });
        });
    </script>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            //if (n == 0) {
            //    document.getElementById("prevBtn").style.display = "none";
            //} else {
            //    document.getElementById("prevBtn").style.display = "inline";
            //}
            if (n == (x.length - 1)) {
                $("#nextBtn").hide()
            } else if (n == (x.length - 2)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            }
            //else {
            //    document.getElementById("nextBtn").innerHTML = "Next";
            //}
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

    <!-- testi_sec -->

    <script>
        jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $("#our_media_carousel").owlCarousel({
                loop: true,
                items: 4,
                margin: 35,
                autoplay: true,
                dots: false,
                slideBy: 1,
                autoplayTimeout: 3000,
                smartSpeed: 1000,
                navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>",
                    "<i class='fa fa-angle-right' aria-hidden='true'></i>"
                ],
                responsive: {
                    0: {
                        items: 1,
                        margin: 15,
                    },
                    380: {
                        items: 1,
                        margin: 15,
                    },
                    480: {
                        items: 1,
                        margin: 15,
                    },
                    576: {
                        items: 2,
                        margin: 15,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                    1200: {
                        items: 4,
                    },
                },
            });
        });
    </script>

    <section class="biz_review_section">
        <div class="container">
            <div class="row biz_review_main">
                <div class="col-sm-2">
                    <div class="biz_review">
                        <!-- <img src="{{ asset('public/frontend-styles/Biz/img/bg1.png') }}" class="biz_review_desk"> -->
                        <img src="{{ asset('public/courseThumbnailsNvdo/thumbnail1701430809.jpg') }}"
                            class="biz_review_desk">
                        <img src="{{ asset('public/frontend-styles/Biz/img/review-hm.png') }}" class="biz_review_mob">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="biz_review biz_review_content">
                        <h2 class="index-title">What Others Have To Say About Gurukul Nation</h2>
                        <p>Gurukul Nation has been a life-changing platform for thousands of Indians. Browse what
                            people have to say about us.</p>
                        <a href="{{ URL::to('reviews/what/other/say') }}">Browse Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="follow_insta_section">
        <div class="follow_insta_box">
            <a href="https://openinapp.co/ct1do" target="_blank">
                <div class="follow_web">
                    <div class="container-80">
                        <div class="follow_web_sub2">
                            <div class="follow_web_sub">
                                <h2>See <span>Everything Creative</span> We Have To Offer.</h2>
                                <p>Follow Us On Instagram<i class="fa fa-angle-right" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section class="faq__section wow fadeInUp">
        <div class="container">
            <h2 class="faq__title index-title"><span>Fre</span>quently Asked Questions</h2>
            <div id="faq">

                <ul class="accordion-list">
                    @foreach($faqs as $row)
                    <li>
                        <h3>{{ $row->question }}</h3>
                        <div class="answer">
                            {!! $row->answer !!}
                        </div>
                    </li>

                    @endforeach

                </ul>

            </div>

        </div>
        </div>
    </section>
    <script>
        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "↓") {
                $(this).text("↑")
            } else {
                $(this).text("↓")
            }
        });
    </script>

    <section class="customer-support-section">
        <div class="container">
            <div class="customer-support-heading">
                <h2 class="heading-black index-title">Gurukulnation Learner Support</h2>
            </div>
            <div class="customer-support-box">
                <img src="{{ $learnerSupport->image }}" />
                <div class="support_sub_box">
                    <h5><i class="fa fa-phone" aria-hidden="true"></i>{{ $learnerSupport->mobile_no }}</h5>
                    <p>({{ $learnerSupport->days_n_time }})</p>
                    <div class="disclaimerWrap__content">
                        <p>
                            <b>Disclaimer : </b>
                            <br />{{ $learnerSupport->desclaimer }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="disclaimerWrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
    </section>
</main>

<!-- for disapera flash message  -->
<script>
    $(document).ready(function() {
        $(".alert").delay(5000).slideUp(300);
    });
</script>
<script>
    $(document).ready(function() {
        $('.accordion-list > li > .answer').hide();
        $('.accordion-list > li').click(function() {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active").find(".answer").slideUp();
            } else {
                $(".accordion-list > li.active .answer").slideUp();
                $(".accordion-list > li.active").removeClass("active");
                $(this).addClass("active").find(".answer").slideDown();
            }
            return false;
        });
    });
</script>
@endsection