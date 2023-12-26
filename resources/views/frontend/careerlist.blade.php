@extends('common.layout')
@section('content')
<main>
    <section class="career_banner_section">
        <div class="career_banner_img">
            <img class="career_desk" src="{{ asset('public/frontend-styles/Biz/img/career/career_deskc619.jpg?v=1.0') }}" />
            <img class="career_mob" src="{{ asset('public/frontend-styles/Biz/img/career/career_mobc619.jpg?v=1.0') }}" />
        </div>

    </section>
    @if(Session::has('success'))<!-- flash message  -->
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
    </div><!--/ flash message  -->
    <section class="our_mission">
        <div class="container">
            <div class="about_main_box">
                <h3>About Us</h3>
                <p>Gurukul Nation is a leading edtech platform based in India, dedicated to revolutionising the way people learn. We are committed to fostering a culture of continuous learning and growth, where every individual can thrive and achieve their goals.</p>

            </div>
            <div class="mission_main_box row">
                <div class="col-md-7 col-sm-6 a">
                    <div class="mission_left">
                        <h3>Our Vision</h3>
                        <p>At Gurukul Nation, we firmly believe that education has the power to shape destinies and open doors to boundless opportunities. Our vision is to unleash this potential and emerge as a symbol of educational excellence, where knowledge is not only valued but also monetized, empowering individuals to embrace their aspirations and embrace a prosperous future. Together, we are poised to redefine education and ignite a new era of brilliance, making a lasting impact on the lives of our learners and beyond. </p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 b">
                    <div class="mission_right">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/our_vision2.png') }}">
                    </div>
                </div>
            </div>
            <div class="mission_main_box vission_main_box row">
                <div class="col-md-5 col-sm-6">
                    <div class="mission_right">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/our_mission2.png') }}">
                    </div>
                </div>
                <div class="col-md-7 col-sm-6">
                    <div class="mission_left">
                        <h3>Our Mission</h3>
                        <p>Embark on a transformative journey with Gurukul Nation, where our resolute mission is to empower one million individuals digitally by 2026. We are dedicated to ushering in a new era of growth and enlightenment, guiding our learners towards unparalleled success in the digital realm.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="work_section">
        <div class="container">
            <div class="work_heading">
                <h3>
                    Why Work at Gurukul Nation?
                </h3>
            </div>
            <div class="row work_top">
                <div class="col-md-4 col-sm-4">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work1.png') }}">
                            <h5>A Culture of Growth</h5>
                            <p>At Gurukul Nation, we foster a culture that encourages continuous learning and professional development. We provide our employees with numerous opportunities to upskill and grow within the organisation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work2.png') }}">
                            <h5>Impactful Work</h5>
                            <p>Your contributions at Gurukul Nation directly impact the lives of our students and learners. Join us in shaping the future of education and making a difference in the digital landscape.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work3.png') }}">
                            <h5>Career Advancement</h5>
                            <p>At Gurukul Nation, your career path is only limited by your ambition and dedication. We provide ample opportunities for career advancement and growth within the organisation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row work_bottom">
                <div class="col-md-6 col-sm-6">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work4.png') }}">
                            <h5>Collaboration and Teamwork</h5>
                            <p>We believe in the power of collaboration. Working at Gurukul Nation means being part of a supportive and diverse team that values teamwork and camaraderie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work5.png') }}">
                            <h5>Personal and Professional Balance</h5>
                            <p>We understand the importance of work-life balance and encourage our employees to maintain a healthy equilibrium between their personal and professional lives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work6.png') }}">
                            <h5>Passionate and Supportive Leadership</h5>
                            <p>Our leadership team is passionate about creating an environment where employees can flourish. Their guidance and support will empower you to achieve your professional goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="work_box">
                        <div>
                            <img src="{{ asset('public/frontend-styles/Biz/img/career/work7.png') }}">
                            <h5>Engaging and Fun Work Environment</h5>
                            <p>Work doesn't have to be all serious! We promote a fun and engaging work environment that encourages creativity and out-of-the-box thinking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="biz_family_section">
        <div class="container">
            <div class="row family_card res">
                <div class="col-md-7 col-sm-6 a">
                    <div class="fam_heading">
                        <h3>Join the Gurukul Nation Family Today<span>!</span></h3>
                        <p>If you are passionate about education, technology, and making a positive impact on the world, Gurukul Nation is the place for you. Come be a part of our journey and make your mark in the ever-evolving field of edtech.</p>
                        <p>Check out our current job openings and take the first step towards an exciting and fulfilling career at Gurukul Nation. Join us as we embark on a mission to empower one million people digitally and redefine the future of education. Together, let's create a world where knowledge truly transforms lives.</p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 b">
                    <div class="fam_heading">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/join_us.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hiring_main_box">
        <div class="container">
            <div class="hiring_box">
                <h3>We are hiring!</h3>
                @foreach($careerList as $row)
                <div class="career_apply">
                    <a id="" class="apply_now" href="{{ URL::to('career/details',$row->slug) }}" target="_blank">{{ $row->designation }}</a>
                </div>
                @endforeach
                
                <div class="career_apply apply_here a">
                    <h6>
                        Other profile, <a onclick="" id="ContentPlaceHolder1_LinkButton1" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$LinkButton1&#39;,&#39;&#39;)">click here</a> to upload your resume
                    </h6>

                </div>
            </div>
        </div>
    </section>






    <section class="gallery_section">
        <div class="container">
            <div class="row gallery_video">
                <div class="col-md-6">
                    <div class="gallery_heading">
                        <h3>Welcome to Our Empowered Gallery</h3>
                        <p>Welcome to the world of Gurukul Nation, where every moment captured in our gallery reflects the extraordinary contributions and empowered experiences of our incredible team. Join us, and let's create a future of shared success and boundless growth together.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video_card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/860394877?h=42cb8f25fc&amp;autoplay=1&amp;loop=1&amp;muted=1" title="Vimeo video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/gal_1.jpg') }}">
                        <div class="card__content">
                            <div>
                                <h6 class="card__title">Rewards and Recongition</h6>
                                <a href="#" class="card_view">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/gal_2.jpg') }}">
                        <div class="card__content">
                            <div>
                                <h6 class="card__title">Office Trip</h6>
                                <a href="#" class="card_view">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/gal_3.jpg') }}">
                        <div class="card__content">
                            <div>
                                <h6 class="card__title">Fun Friday</h6>
                                <a href="#" class="card_view">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/gal_4.jpg') }}">
                        <div class="card__content">
                            <div>
                                <h6 class="card__title">Festival Celebrations</h6>
                                <a href="#" class="card_view">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/gal_5.jpg') }}">
                        <div class="card__content">
                            <div>
                                <h6 class="card__title">Events</h6>
                                <a href="#" class="card_view">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/gal_6.jpg') }}">
                        <div class="card__content">
                            <div>
                                <h6 class="card__title">Birthday Celebrations</h6>
                                <a href="#" class="card_view">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row gallery_res" style="display:none;">
                <div class="col-sm-4 gallery_res1">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/carrer_gallery1c619.jpg?v=1.0') }}">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/carrer_gallery2.jpg') }}">
                    </div>
                </div>
                <div class="col-sm-4 gallery_res2">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/carrer_gallery3.jpg') }}">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/carrer_gallery4.jpg') }}">
                    </div>
                </div>
                <div class="col-sm-4 gallery_res3">
                    <div class="gallery_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/carrer_gallery5.jpg') }}">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/carrer_gallery6.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="active item">
                    <div class="instagram_main">
                        <div class="container">
                            <div class="row insta_row">
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_side_img.png') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <h4>Instagram</h4>
                                        <p>Gurukul Nation has been a life-changing platform for thousands of Indians. Browse what people have to say about us.</p>
                                        <a href="https://openinapp.co/2ysoi" target="_blank" class="follow_btn2"><span>Follow Us on Instagram <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div class="social_card">
                                        <h4>Other Social Media</h4>
                                        <ul class="wrapper_icon">
                                            <li class="icon instagram_icon">
                                                <span class="tooltip">Instagram</span>
                                                <a href="https://openinapp.co/2ysoi" target="_blank">
                                                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon facebook_icon">
                                                <span class="tooltip">Facebook</span>
                                                <a href="https://www.facebook.com/Gurukul Nation-100750271589910" target="_blank">
                                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon twitter_icon">
                                                <span class="tooltip">Twitter</span>
                                                <a href="https://twitter.com/Gurukul Nation_IND" target="_blank">
                                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon youtube_icon">
                                                <span class="tooltip">Youtube</span>
                                                <a href="https://www.youtube.com/c/Gurukul Nation" target="_blank">
                                                    <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon linkedin_icon">
                                                <span class="tooltip">LinkedIn</span>
                                                <a href="https://www.linkedin.com/company/officialGurukul Nation" target="_blank">
                                                    <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="instagram_main">
                        <div class="container">
                            <div class="row insta_row">
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_side_img4.png') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <h4>Facebook</h4>
                                        <p>Become a part of our facebook community for a firsthand look into our world, where inspiration meets interaction.</p>
                                        <a href="https://www.facebook.com/Gurukul Nation-100750271589910" target="_blank" class="follow_btn2"><span>Follow Us on Facebook <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div class="social_card">
                                        <h4>Other Social Media</h4>
                                        <ul class="wrapper_icon">
                                            <li class="icon instagram_icon">
                                                <span class="tooltip">Instagram</span>
                                                <a href="https://openinapp.co/2ysoi" target="_blank">
                                                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon facebook_icon">
                                                <span class="tooltip">Facebook</span>
                                                <a href="https://www.facebook.com/Gurukul Nation-100750271589910" target="_blank">
                                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon twitter_icon">
                                                <span class="tooltip">Twitter</span>
                                                <a href="https://twitter.com/Gurukul Nation_IND" target="_blank">
                                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon youtube_icon">
                                                <span class="tooltip">Youtube</span>
                                                <a href="https://www.youtube.com/c/Gurukul Nation" target="_blank">
                                                    <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon linkedin_icon">
                                                <span class="tooltip">LinkedIn</span>
                                                <a href="https://www.linkedin.com/company/officialGurukul Nation" target="_blank">
                                                    <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="instagram_main">
                        <div class="container">
                            <div class="row insta_row">
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_side_img3.png') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <h4>Twitter</h4>
                                        <p>Stay connected and engage with us on Twitter for the latest updates, insights, and vibrant discussions</p>
                                        <a href="https://twitter.com/Gurukul Nation_IND" target="_blank" class="follow_btn2"><span>Follow Us on Twitter <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div class="social_card">
                                        <h4>Other Social Media</h4>
                                        <ul class="wrapper_icon">
                                            <li class="icon instagram_icon">
                                                <span class="tooltip">Instagram</span>
                                                <a href="https://openinapp.co/2ysoi" target="_blank">
                                                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon facebook_icon">
                                                <span class="tooltip">Facebook</span>
                                                <a href="https://www.facebook.com/Gurukul Nation-100750271589910" target="_blank">
                                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon twitter_icon">
                                                <span class="tooltip">Twitter</span>
                                                <a href="https://twitter.com/Gurukul Nation_IND" target="_blank">
                                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon youtube_icon">
                                                <span class="tooltip">Youtube</span>
                                                <a href="https://www.youtube.com/c/Gurukul Nation" target="_blank">
                                                    <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon linkedin_icon">
                                                <span class="tooltip">LinkedIn</span>
                                                <a href="https://www.linkedin.com/company/officialGurukul Nation" target="_blank">
                                                    <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="instagram_main">
                        <div class="container">
                            <div class="row insta_row">
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <img src="{{ asset('public/frontend-styles/Biz/img/career/youtube_side_img.png') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <h4>Youtube</h4>
                                        <p>Explore engaging videos that showcase our expertise, provide valuable insights, and keep you in the loop with the latest trends.</p>
                                        <a href="https://www.youtube.com/c/Gurukul Nation" target="_blank" class="follow_btn2"><span>Follow Us on Youtube <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div class="social_card">
                                        <h4>Other Social Media</h4>
                                        <ul class="wrapper_icon">
                                            <li class="icon instagram_icon">
                                                <span class="tooltip">Instagram</span>
                                                <a href="https://openinapp.co/2ysoi" target="_blank">
                                                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon facebook_icon">
                                                <span class="tooltip">Facebook</span>
                                                <a href="https://www.facebook.com/Gurukul Nation-100750271589910" target="_blank">
                                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon twitter_icon">
                                                <span class="tooltip">Twitter</span>
                                                <a href="https://twitter.com/Gurukul Nation_IND" target="_blank">
                                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon youtube_icon">
                                                <span class="tooltip">Youtube</span>
                                                <a href="https://www.youtube.com/c/Gurukul Nation" target="_blank">
                                                    <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon linkedin_icon">
                                                <span class="tooltip">LinkedIn</span>
                                                <a href="https://www.linkedin.com/company/officialGurukul Nation" target="_blank">
                                                    <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="instagram_main">
                        <div class="container">
                            <div class="row insta_row">
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_side_img2.png') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="insta_mobile">
                                        <h4>LinkedIn</h4>
                                        <p>Join us in the professional conversation on LinkedIn! Follow our page for the latest updates, industry insights, and opportunities.</p>
                                        <a href="https://www.linkedin.com/company/officialGurukul Nation" target="_blank" class="follow_btn2"><span>Follow Us on LinkedIn <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div class="social_card">
                                        <h4>Other Social Media</h4>
                                        <ul class="wrapper_icon">
                                            <li class="icon instagram_icon">
                                                <span class="tooltip">Instagram</span>
                                                <a href="https://openinapp.co/2ysoi" target="_blank">
                                                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon facebook_icon">
                                                <span class="tooltip">Facebook</span>
                                                <a href="https://www.facebook.com/Gurukul Nation-100750271589910" target="_blank">
                                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon twitter_icon">
                                                <span class="tooltip">Twitter</span>
                                                <a href="https://twitter.com/Gurukul Nation_IND" target="_blank">
                                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon youtube_icon">
                                                <span class="tooltip">Youtube</span>
                                                <a href="https://www.youtube.com/c/Gurukul Nation" target="_blank">
                                                    <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="icon linkedin_icon">
                                                <span class="tooltip">LinkedIn</span>
                                                <a href="https://www.linkedin.com/company/officialGurukul Nation" target="_blank">
                                                    <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram_section" style="display:none;">
        <div class="container">
            <div class="insta_heading">
                <h3>Instagram</h3>

            </div>
            <div class="row insta_res">
                <div class="col-sm-4 insta_res1">
                    <div class="insta_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_img1.gif') }}">
                    </div>
                </div>
                <div class="col-sm-4 insta_res1">
                    <div class="insta_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_img2.gif') }}">
                    </div>
                </div>
                <div class="col-sm-4 insta_res1">
                    <div class="insta_box">
                        <img src="{{ asset('public/frontend-styles/Biz/img/career/insta_img3.gif') }}" class="last_insta">
                        <div class="insta_cover">
                            <div class="insta_link">
                                <a href="https://openinapp.co/2ysoi" target="_blank" class="follow_btn">Follow Us on Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career_list_section" style="display:none;">
        <div class="container-80 res">
            <div class="career_apply apply_here a">
                <h6>
                    Didn't find any suitable job from the list <a onclick="" id="ContentPlaceHolder1_btnapplyhere" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$btnapplyhere&#39;,&#39;&#39;)">Click here</a> to upload your resume
                </h6>


            </div>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$hdn_id" id="ContentPlaceHolder1_hdn_id" value="0" />

            <div class="career_main_box b">



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
@endsection