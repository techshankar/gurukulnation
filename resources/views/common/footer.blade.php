<!-- Modal -->
<div id="myModal3" class="modal slider__modal fade" role="dialog" style="z-index: 9999999;">
    <button type="button" class="close" data-dismiss="modal">
        <img src="{{ asset('public/frontend-styles/Biz/img/cancel.png') }}">
    </button>
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row about_bizgurukul_row2">
                    <div class="col-sm-6">
                        <div class="about_bizgurukul_img2">
                            <img src="{{ asset('public/frontend-styles/Biz/img/contact.jpg') }}" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about_bizgurukul_content">
                            <div id="user_detail">
                                <h4 class="modal-title">Please Register Here:</h4>

                                <input type="text" id="tb_name" placeholder="Name" />
                                <input type="text" id="tb_email" placeholder="Email" />
                                <input type="number" id="tb_mobile" placeholder="Mobile No." />
                            </div>
                            <div id="otp_verification" style="display: none">
                                <input type="number" id="tbotp" placeholder="Enter Your OTP here." />
                            </div>
                            <div id="div_thanku" style="display: none">
                                <h5>Thank You for showing your interest!</h5>
                                <p>Time: Nov 27, 2022 02:50 PM India</p>
                                <p>Topic: Sunday Special Training</p>
                                <a href="https://us02web.zoom.us/j/86530850276?pwd=R1lrcVBJelc5c3BGbVkwZ25PQ05OZz09" target="_blank">Please click here to join the webinar</a>
                                <p>Webinar ID: 865 3085 0276</p>
                                <p>Passcode: 579457</p>
                            </div>
                            <div id="div_btn">
                                <button type="button" id="btn_submit">Get OTP</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal slider__modal fade cap_user_lead" role="dialog" id="capUserLead" style="z-index: 999999;">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="{{ asset('public/frontend-styles/Biz/img/cancel2.png') }}">
                </button>
                <div class="row about_bizgurukul_row2">
                    <div class="col-sm-12">
                        <div class="about_bizgurukul_content">
                            <h4 class="modal-title">Request a call back</h4>

                            <div id="dv_tbleaduser_detail">
                                <div class="req_dropdown">
                                    <h5>Which skill are you interested in?</h5>
                                    <div class="form-group">
                                        <select class="form-control" id="dd_intrest">
                                            <option value="-1">-Select-</option>
                                            <option value="/Biz/bundel/FinanceMastery">Stock Trading</option>
                                            <option value="/Biz/bundel/BrandingMastery">Personality development</option>
                                            <option value="/Biz/bundel/TrafficMastery">Digital Marketing</option>
                                            <option value="/Biz/bundel/InfluenceMastery">Content & Copywriting</option>
                                            <option value="0">Not sure</option>
                                        </select>
                                        <label id="lblmsg" style="color: red; display: none">Please select from the above options</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="ctl00$ContentPlaceHolder1$mobile_code" id="mobile_code" class="form-control country_code" placeholder="Phone Number">

                                    </select>

                                    <input name="ctl00$ContentPlaceHolder1$tbusercap_mobile" type="text" maxlength="10" id="tbusercap_mobile" placeholder="Mobile No." onkeypress="return isNumber(event)" />
                                    <span data-val-controltovalidate="tbusercap_mobile" data-val-errormessage="*" id="ContentPlaceHolder1_RegularExpressionValidator1" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="[0-9]{10}" style="color:Red;visibility:hidden;">*</span>
                                    <span data-val-controltovalidate="tbusercap_mobile" data-val-errormessage="**" id="RequiredFieldValidator3" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="color:Red;visibility:hidden;">**</span>
                                    <label id="lblmsgmobile" style="color: red; display: none">Please Enter Invalid Mobile No.!</label>
                                </div>
                                <input name="ctl00$ContentPlaceHolder1$tbusercap_Name" type="text" value="NA" id="tbusercap_Name" placeholder="Name" style="display: none" />
                                <input name="ctl00$ContentPlaceHolder1$tbusercap_Email" type="text" value="NA" id="tbusercap_Email" placeholder="Email" style="display: none" />

                                <h6><i class="fa fa-check" aria-hidden="true"></i>Advance career guidance</h6>
                                <h6><i class="fa fa-check" aria-hidden="true"></i>Live qualitative training</h6>
                                <h6><i class="fa fa-check" aria-hidden="true"></i>Expect a call at your convenience</h6>
                                <p>We will give you a call between 9:30 AM to 6:00 PM</p>
                            </div>
                            <div id="dv_tbleadotp" style="display: none; margin-bottom: 15px;">
                                <input type="number" id="tbleadotp" placeholder="Enter Your OTP here." style="padding-left: 10px;" />
                                <label style="color: red; display: none" id="otplabel_error">*Invalid OTP</label>
                            </div>
                            <div class="req_thankyou">
                                <p>&#x1F389; <strong>Congratulations!</strong> You’ve taken the first step toward achieving your learning goals. We will get in touch with you soon! &#x1f4de;</p>
                                <p>Our team is excited to have you in our community and can't wait to help you achieve your dreams. &#x1f680;</p>
                            </div>
                            <div style="text-align: right;">
                                <button id="btn_checkLead" class="sub_btn" type="button" style="padding: 10px !important; width: 100%; font-size: 18px;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="floating_chatbot floating_chatbot2 chatboat2" style="display: none">
    <div class="floating_chatbot_icon">
        <p class="tooltiptext2 animated bounceInRight"><span>Got questions? We’re here!</span></p>
        <span>
            <img src="{{ asset('public/frontend-styles/Biz/img/information2.jpg') }}" class="float-img2"></span>
    </div>
</div>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".tooltiptext2").css("display", "block");
        }, 1000);
        setTimeout(function() {
            $(".tooltiptext2").css("display", "none");
        }, 3000);

        //if (matchMedia("(max-width: 767px)").matches) {
        //    setTimeout(function () { $(".chatboat2").css("right", "-60px"); }, 1000);
        //    setTimeout(function () { $(".chatboat2").css("right", "-355px"); }, 3000);
        //}

    });
    // -----Country Code Selection
    $("#mobile_code").intlTelInput({
        initialCountry: "in",
        separateDialCode: true,
        // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });
</script>
<script>
    $(function() {
        setTimeout(function() {
            $("#freedom_popup").fadeIn(400);
        }, 6000)

    })
    $(document).ready(function() {
        $("#free_close").click(function() {
            $("#freedom_popup").hide();
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        "use strict";
        //  TESTIMONIALS CAROUSEL HOOK
        $('#customers-testimonials').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 0,
            autoplay: true,
            dots: true,
            autoplayTimeout: 2500,
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
    });
</script>



<script>
    jQuery(document).ready(function($) {
        "use strict";
        $('#customers-testimonials-course-bundle').owlCarousel({
            autoplayHoverPause: true,
            loop: true,
            //center: true,
            items: 5,
            margin: 30,
            autoplay: true,
            dots: false,
            nav: true,
            autoplayTimeout: 2000,
            smartSpeed: 1000,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
    });
</script>



<script>
    jQuery(document).ready(function($) {
        "use strict";
        $('#customers-testimonials-course').owlCarousel({
            autoplayHoverPause: true,
            loop: true,
            //center: true,
            items: 4,
            margin: 30,
            autoplay: true,
            dots: false,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                    stagePadding: 30,
                },
                480: {
                    items: 1,
                    margin: 15,
                    stagePadding: 70,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,

                }
            }
        });
    });
</script>



<script>
    jQuery(document).ready(function($) {
        "use strict";
        $('#customers-testimonials-in').owlCarousel({
            autoplayHoverPause: true,
            loop: true,
            items: 4,
            margin: 10,
            autoplay: false,
            dots: false,
            nav: true,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                    stagePadding: 30,
                },
                480: {
                    items: 1,
                    margin: 15,
                    stagePadding: 70,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
    });
</script>



<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Bizgurukul",
        "url": "https://bizgurukul.com/",
        "logo": "https://bizgurukul.com/Biz/img/logo.png",
        "sameAs": [
            "https://www.facebook.com/Bizgurukul-100750271589910",
            "https://twitter.com/Bizgurukul_IND",
            "https://www.instagram.com/bizgurukul/",
            "https://www.youtube.com/c/Bizgurukul",
            "https://www.linkedin.com/company/officialbizgurukul"
        ]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Bizgurukul",
        "url": "https://bizgurukul.com/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
</script>
<script type="text/javascript" src="{{ asset('public/frontend-styles/cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js') }}"></script>
<script src="{{ asset('public/frontend-styles/Biz/js/custome_js/default_homepaged134.js?v=3.4') }}"></script>
<script src="{{ asset('public/frontend-styles/Biz/js/custome_js/sliders_effectsf9e3.js?v=1.1') }}"></script>
<script src="{{ asset('public/frontend-styles/Biz/js/custome_js/diwali-timer.js') }}"></script>

<link href="{{ asset('public/frontend-styles/unpkg.com/flickity%402.2.1/dist/flickity.min.css') }}" rel="stylesheet" />
<script src="{{ asset('public/frontend-styles/unpkg.com/flickity%402.2.1/dist/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('public/frontend-styles/Biz/js/slideshow_sliderc619.js?v=1.0') }}"></script>

<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('public/frontend-styles/Biz/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend-styles/Biz/js/jquery.min.js') }}"></script>
<!-- <script src="{{ asset('public/frontend-styles/Biz/Subscription/js/courseflixf195.js?v=2.1') }}"></script> -->
<script type="text/javascript">
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<footer class="mobile_app_hide">
    <div class="top-footer">
        <div class="container-90">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer_left">
                        <div class="footer-logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('public/frontend-styles/Biz/img/myimgs/gurukul_logo.png') }}" />

                            </a>
                        </div>

                        <div class="footer__about">
                            <!-- <p>
                                            Bizgurukul is bringing the learner community of all age groups under one roof to learn, implement, and grow with the dynamic skills of the future to help you stand out of the crowd.
                                        </p> -->
                        </div>
                    </div>
                    <div class="footer-social">
                        <ul>
                            <li><a class="footer__insta" href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a class="footer__facebook" href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

                            <li><a class="footer__twiter" href="#" target="_blank"><img src="{{ asset('public/frontend-styles/Biz/img/twitter_new_icon.png') }}" class="twitter_new_logo" /></a></li>

                            <li><a class="footer__youtube" href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a class="footer__linked" href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer-aboutus">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="{{ URL::to('contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ URL::to('disclaimer') }}">Disclaimer</a></li>
                            <li><a href="{{ URL::to('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ URL::to('terms-&-conditions') }}">Terms and Conditions</a></li>
                            <li><a href="{{ URL::to('refund-policy') }}">Refund Policy</a></li>
                            <li><a href="{{ URL::to('end-user-license-agreement') }}">End User License Agreement</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer-aboutus">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ URL::to('about-us') }}">About Us</a></li>

                            <li><a href="{{ URL::to('career/list') }}">Career</a></li>

                            <!-- <li><a href="Biz/BecomeAnInst.html">Become An Instructor</a></li>
                                        <li><a href="Biz/BecomeAnAffiliate.html">Become An Affiliate</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer_last_child">

                    <div class="mobile_footer">
                        <!-- <img src="Biz/img/app_view3.png" class="view_app" />
                                    <h6>Download the Bizgurukul App</h6>
                                    <div class="app_footer">
                                        <a href="https://apps.apple.com/in/app/bizgurukul/id6448565147" target="_blank"><img src="Biz/img/appstore.png" /></a>
                                        <a href="https://play.google.com/store/search?q=Bizgurukul&amp;c=apps&amp;hl=en-IN" target="_blank"><img src="Biz/img/googleplay.png" /></a>
                                    </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>



<div class="modal fade cart__modal" id="DetModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div>
                <h5 class="modal-title">Selected Courses:</h5>
            </div>
            <div class="modal-body">
                <div style="overflow:auto;width:100%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Course</th>
                                <th>Course Price</th>
                                <th>Qty</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_cart">
                        </tbody>
                    </table>
                </div>
                <div class="cf__courseTotal">
                    <label>Total:</label>
                    <label id="cart_total" style="color: #1879c2;"></label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary mb-2 cls_close btn_submit_cart">CheckOut</button>
                <button type="button" class="btn btn-primary mb-2 cls_close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--<div class="floating_chatbot">-->
<!--    <div class="floating_chatbot_icon">-->
<!--        <p class="tooltiptext animated bounceInRight" style="animation-delay: 1s"><span id="botsay">Need Support!</span><i class="fa fa-times close_tooltip" aria-hidden="true"></i></p>-->
<!--        <span id="imgbot_icon"><a href="javascript:void(0)">-->
<!--            <img src="{{ asset('public/frontend-styles/Biz/img/support-bb.png') }}" class="float-img"></a></span>-->
<!--    </div>-->
<!--</div>-->
<script>
    const header = document.querySelector('.navbar-default');
    const content = document.querySelector('.wrapper');
    let headerHeight = header.offsetHeight;

    function adjustMarginTop() {
        // update header height
        headerHeight = header.offsetHeight;
        // update margin-top of content
        content.style.marginTop = headerHeight + 'px';
    }

    window.addEventListener('resize', adjustMarginTop);
    window.addEventListener('load', adjustMarginTop);
    $(function() {
        setTimeout(function() {
            $(".tooltiptext").show();
        }, 3000)
    })
    $(document).ready(function() {

        $("#imgbot_icon").click(function() {

            if ($("#hdn_offertime").val() != "") {
                window.location.href = "Biz/UserHelp.html";
            } else {
                $(".tooltiptext").show();
                $("#botsay").html("Get in touch <i class='fa fa-phone' aria-hidden='true'></i> +91 8567856753");
                window.location.href = "Biz/UserHelp.html";
            }


        })
        $(".close_tooltip").click(function() {
            $(".tooltiptext").hide();
        });



        $(".dropdown_nav_show1").click(function() {
            $(".dropdown_nav_hide1").toggle();
            $(".dropdown_nav_hide2").hide();
        });

        $(".dropdown_nav_show2").click(function() {
            $(".dropdown_nav_hide2").toggle();
            $(".dropdown_nav_hide1").hide();
        });

    });
</script>
<script>
    $(function() {
        setTimeout(function() {
            $("#hideDiv").fadeOut(1500);
        }, 3000)

    })
</script>
<style>
    body {
        position: relative;
    }

    .pre_loader {
        background-color: rgb(0 0 0 / 70%);
        height: 100%;
        display: flex;
        align-items: center;
        z-index: 99999;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
    }

    .pre_loader h2 {
        text-align: center;
        font-size: 50px;
        font-weight: 800;
    }

    .pre_loader .flag_box {
        width: fit-content;
        margin: 0 auto;
    }

    .pre_loader .flag_box img {
        max-width: 400px;
    }

    .zoom-in-zoom-out {
        -webkit-animation: zoom-in-zoom-out 2s ease-out infinite;
        animation: zoom-in-zoom-out 2s ease-out infinite;
    }

    @keyframes zoom-in-zoom-out {
        0% {
            transform: scale(1, 1);
        }

        50% {
            transform: scale(1.2, 1.2);
        }

        100% {
            transform: scale(1, 1);
        }
    }

    @media(max-width:575px) {
        .pre_loader .flag_box img {
            max-width: 250px;
        }

        .pre_loader h2 {
            font-size: 35px;
            font-weight: 800;
        }
    }

    @media(max-width:479px) {
        .pre_loader .flag_box img {
            max-width: 250px;
        }

        .pre_loader h2 {
            font-size: 27px;
            font-weight: 800;
        }
    }

    .floating_chatbot {
        position: fixed;
        z-index: 999;
        right: 0px;
        bottom: 40px;
        background: #fff;
        text-align: center;
        box-shadow: 0 4px 10px rgb(0 0 0 / 20%);
        border-radius: 10px;
    }

    .floating_chatbot .floating_chatbot_icon {
        position: relative;
    }

    .floating_chatbot .floating_chatbot_icon p.tooltiptext {
        display: none;
    }

    .floating_chatbot .floating_chatbot_icon p.tooltiptext::after {
        content: "";
        position: absolute;
        top: 10px;
        transform: rotate(270deg);
        right: -24px;
        margin-left: -5px;
        border-width: 12px;
        border-style: solid;
        border-color: white transparent transparent transparent;
    }

    .floating_chatbot .floating_chatbot_icon p {
        position: absolute;
        top: 13px;
        font-size: 17px;
        background-color: rgb(255 255 255);
        border-radius: 8px;
        padding: 12px 20px;
        width: max-content;
        right: 95px;
        box-shadow: 0 4px 10px rgb(0 0 0 / 20%);
        padding-right: 30px;
    }

    .floating_chatbot .floating_chatbot_icon img {
        max-width: 65px;
        cursor: pointer;
    }

    .floating_chatbot .floating_chatbot_icon img.float-img {
        border-radius: 10px 0px 0px 10px;
    }

    .floating_chatbot .floating_chatbot_icon img.float-img2 {
        border-radius: 10px 0px 0px 10px;
    }


    .floating_chatbot .floating_chatbot_icon p i {
        color: #333333c4;
        font-size: 12px;
        border-radius: 100%;
        height: 18px;
        width: 18px;
        padding: 2.5px 4.5px;
        text-align: center;
        position: absolute;
        top: 2px;
        right: 2px;
        cursor: pointer;
    }

    .floating_chatbot .floating_chatbot_icon p i.fa.fa-phone {
        color: #333333c4;
        font-size: 17px;
        border-radius: 0;
        height: auto;
        width: auto;
        padding: 0;
        text-align: center;
        position: relative;
        top: auto;
        right: auto;
        cursor: auto;
    }

    /*.floating_chatbot .floating_chatbot_icon img.float-img {
                                 animation: flip 10s infinite;
                            }*/
    @keyframes flip {
        0% {
            transform: scaleX(1);
        }

        50% {
            transform: scaleX(-1);
        }

        100% {
            transform: scaleX(1);
        }
    }

    @media(max-width:767px) {
        .floating_chatbot .floating_chatbot_icon img {
            max-width: 55px;
            top: -35px;
        }

        .floating_chatbot .floating_chatbot_icon p {
            top: 9px;
            font-size: 15px;
            padding: 8px 10px;
            right: 75px;
            padding-right: 25px;
        }

        .floating_chatbot .floating_chatbot_icon p.tooltiptext::after {
            top: 11px;
            right: -16px;
            margin-left: -5px;
            border-width: 8px;
        }
    }

    @media(max-width:479px) {
        .floating_chatbot .floating_chatbot_icon img {
            max-width: 50px;
            top: -20px;
            right: -65px;
        }

        .floating_chatbot .floating_chatbot_icon p {
            top: 8px;
            font-size: 14px;
            padding: 8px 10px;
            right: 65px;
            padding-right: 25px;
        }
    }
</style>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- scroll to top button -->

<!-- scroll to top button -->

<script>
    $(document).ready(function() {
        if ($("#hdnstory").val() == 1) {
            $("#stories").addClass("isview_story");
        }
        getstory();


        function getstory() {
            $.ajax({
                type: "POST",
                url: "/../default.aspx/getStoryForUser",
                contentType: "application/json",
                data: {},
                dataType: "json",
                success: function(data) {


                    var currentSkin = getCurrentSkin();

                    for (var i = 0; i < data.d.length; i++) {


                        var stories = new Zuck('stories', {
                            backNative: true,
                            previousTap: true,
                            skin: currentSkin['name'],
                            autoFullScreen: currentSkin['params']['autoFullScreen'],
                            avatars: currentSkin['params']['avatars'],
                            paginationArrows: currentSkin['params']['paginationArrows'],
                            list: currentSkin['params']['list'],
                            cubeEffect: currentSkin['params']['cubeEffect'],
                            localStorage: true,

                            stories: [
                                Zuck.buildTimelineItem(
                                    "ramon",
                                    "Biz/img/bb.jpg",
                                    "Bizgurukul",
                                    "",
                                    timestamp(),
                                    [
                                        data.d[i]

                                    ]
                                )
                            ]
                        });
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {

                    //var obj = jQuery.parseJSON(xhr.responseText);
                    //alert(obj.Message);
                },
                complete: function() {

                }
            });
        }


        var $navbar = $("#mNavbar");

        AdjustHeader(); // Incase the user loads the page from halfway down (or something);
        $(window).scroll(function() {
            AdjustHeader();
        });

        function AdjustHeader() {
            if ($(window).scrollTop() > 60) {
                if (!$navbar.hasClass("navbar-fixed-top")) {
                    $navbar.addClass("navbar-fixed-top");
                }
            } else {
                $navbar.removeClass("navbar-fixed-top");
            }
        }
    });

    $("#stories").click(function() {
        $.ajax({
            type: "POST",
            url: "/../default.aspx/insertStoryView",
            contentType: "application/json",
            data: {},
            dataType: "json",
            success: function(data) {
                $("#stories").addClass("isview_story");
            },
            error: function(xhr, ajaxOptions, thrownError) {


            },
            complete: function() {

            }
        });



    })

    $(".cls_closetimer").click(function() {

        $("#div_update_plan").hide();
        $(".wrapper").css("margin-top", "0px");

    })
</script>


<script>
    // Set the date we're counting down to
    var offerTime = $("#hdn_offertime").val();
    var countDownDate = new Date(offerTime).getTime();
    var counter = 0;
    // Update the count down every 1 second

    // Support Image Animation Start
    var x = setInterval(function() {
        if (counter >= 30) {

            $('.float-img').attr('style', 'animation:flip 1s');
            counter = 0;
        } else {
            counter++;
            $('.float-img').removeAttr('style');
        }
        // Support Image Animation End

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="spn_time"
        document.getElementById("spn_time").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("spn_time").innerHTML = "EXPIRED";

            $("#div_update_plan").hide();
        }
    }, 1000);
</script>

</form>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W6X6V8" height="0" width="0" style="display: none; visibility: hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<script src="../cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "f7398055-1f34-4727-833a-4c5268b79f6a",
        });
    });
</script>


<script src="Biz/js/custome_js/cart7839.js?v=1.2"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82992cc35f7a8944","b":1,"version":"2023.10.0","token":"0b2d30c0d91c41ef8c5e660185295aa3"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from www.bizgurukul.com/Default by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 13:14:55 GMT -->

</html>