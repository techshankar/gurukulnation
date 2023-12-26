@extends('common.layout')
@section('content')
<main>
    <section class="gold-banner-section">
        <div class="container">
            <div class="gold-banner-txt">

                <h2>About Us</h2>

            </div>
        </div>
    </section>
    <section class="why-section">
        <div class="container">
            <div class="why-number-div">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="we-logo-div">
                            <h2>We Are</h2>
                            <img src="{{ asset('public/frontend-styles/Biz/img/myimgs/gurukul_logo.png') }}" alt="logo">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="heading-div">
                            <h2>Develop Your <span>Skills</span></h2>
                            <h2>Pursue Your <span>Passion</span></h2>
                            <h2>Make A <span>Difference</span></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="we-here-section">
        <div class="container">
            <div class="we-here-text">
                <p>{{ $data->details }}
                </p>
            </div>
        </div>
    </section>
    <section class="arise-section">
        <div class="container">
            <div class="our-belief-text">
                We believe in giving you quality over quantity and practical education over mug-up education. That’s why <span>ARISE</span>.
            </div>
            <div class="arise-div">
                <div class="arise-txt">
                    <h1>A</h1>
                    <h3>Act To Wow</h3>
                    <p>Aiming to leave people awestruck with our knowledge and expertise.</p>
                </div>
                <div class="arise-txt">
                    <h1>R</h1>
                    <h3>Respect</h3>
                    <p>Respecting everyone who walks into our lives- Team, Clients, Customers, and Partners.</p>
                </div>
                <div class="arise-txt">
                    <h1>I</h1>
                    <h3>Integrity</h3>
                    <p>Maintain integrity and take complete accountability of our actions</p>
                </div>
                <div class="arise-txt">
                    <h1>S</h1>
                    <h3>Service Mindset</h3>
                    <p>Serving our clients with top-notch value to add the same in their lives.</p>
                </div>
                <div class="arise-txt">
                    <h1>E</h1>
                    <h3>Excellence</h3>
                    <p>Striving for excellence and enhancing ourselves to be better at what we do.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="enjoying-section">
        <div class="container">

            <div class="our-team">
                <div class="our-team-heading">
                    <h2 class="heading-black">Our <span>Team</span></h2>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <div class="team__memberimg">
                            <img src="{{ asset('public/frontend-styles/Biz/img/Ritwiz-Tiwari.jpg') }}">
                            <div class="team__overlay team__overlayShow">

                            </div>
                        </div>

                        <div class="team-txt">
                            <h3>Ritwiz Tiwari</h3>
                            <h4>Founder</h4>

                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <div class="team__memberimg">
                            <img src="{{ asset('public/frontend-styles/Biz/img/Rohit-sharma-2.jpg') }}">
                            <div class="team__overlay team__overlayShow">

                            </div>
                        </div>

                        <div class="team-txt">
                            <h3>Rohit Sharma</h3>
                            <h4>Co-Founder</h4>

                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <div class="team__memberimg">
                            <img src="{{ asset('public/frontend-styles/Biz/img/keshave-lal.jpg') }}">
                            <div class="team__overlay team__overlayShow">

                            </div>
                        </div>

                        <div class="team-txt">
                            <h3>Keshave Lal </h3>
                            <h4>Business Mentor</h4>

                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <div class="team__memberimg">
                            <img src="{{ asset('public/frontend-styles/Biz/img/Karti--dang.jpg') }}">
                            <div class="team__overlay team__overlayShow">

                            </div>
                        </div>

                        <div class="team-txt">
                            <h3>Kartik Dang</h3>
                            <h4>Business Operations Head</h4>

                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <div class="team__memberimg">
                            <img src="{{ asset('public/frontend-styles/Biz/img/paras-saxena.jpg') }}">
                            <div class="team__overlay team__overlayShow">

                            </div>
                        </div>

                        <div class="team-txt">
                            <h3>Paras Saxena</h3>
                            <h4>Chief Marketing Officer</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section">
        <div class="container">

            <div class="gallery-heading">
                <h2 class="heading-black">Gallery</h2>
            </div>

            <div id="appndSldr"></div>

        </div>
    </section>
</main>
@endsection