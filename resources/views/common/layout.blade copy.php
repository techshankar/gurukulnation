<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broopi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" href="{{URL::to('public/assets/css/style.css')}}">
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Menu box Start -->
        <div class="menu_box">
            <span class="close_icon">
            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
            </span>
            <ul>
                <li>
                    <a href="">About Us</a>
                </li>
                <li>
                    <a href="">Mission</a>
                </li>
                <li>
                    <a href="">Testimonials</a>
                </li>
                
                <li>
                    <a href="">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- Menu box ends -->
        <!-- Header Start -->
        <div class="header_outer">
        <header>
            <div class="sec_container">
                <div class="header_inner">
                    <div class="header-left">
                        <a class="logo" href="index.php">
                            <img src="{{URL::to('public/assets/images/broopi_logo.png')}}" alt="Logo">
                        </a>
                    </div>
                    <div class="header_right">
                        <ul>
                            @if(Auth::guard('web')->user())
                            <li>
                                <a href="#">{{ Auth::user()->name }}</a>
                            </li>
                            @else
                            <li>
                                <a href="/signup.html"> Signup </a>
                            </li>
                            <li>
                                <a href="{{ route('signin') }}"> Login </a>
                            </li>

                            @endif
                            
                            <li>
                                <a href="#" class="toggle_bar">
                                    <div class="toggle_icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div> Menu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
        <!-- Header Ends -->

        @yield('content')

        <footer>
            <div class="sec_container">
                <div class="footer_top">
                    <nav class="footer_nav">
                        <ul>
                            <li>
                                <a href="#">Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Information Security Policy</a>
                            </li>
                            <li>
                                <a href="#">Statement & Objective</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Reviews</a>
                            </li>
                            <li>
                                <a href="#">Near Me Services</a>
                            </li>
                            <li>
                                <a href="#">Anti Discrimination Policy</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer_bottom">
                    <div class="foot_logo">
                        <img src="{{URL::to('public/assets/images/broopi_logo.png')}}" alt="">
                    </div>
                    <div class="email">
                        <img src="{{URL::to('public/assets/images/email.png')}}" alt="" width="40px">
                        <a href="mailto:">xxxx@gmail.comjoijriioj</a>
                    </div>
                    <div class="email">
                        <img src="{{URL::to('public/assets/images/phone.png')}}" alt=""  width="40px">
                        <a href="mailto:">+91-9999999</a>
                    </div>
                    <ul class="social_links">
                        <li>
                            <a href="#" class="twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="fb">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="insta">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="youtube">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pintrest">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

<!-- Scripts Start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script>
  $().ready(function() {
    $('.slick-carousel').slick({
      arrows: false,
      centerPadding: "0px",
      dots: false,
      slidesToShow: 1,
      infinite: false,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 500,
      autoplaySpeed: 1000,
      fade: true,
      // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      cssEase: 'ease-in-out',
    });
  });
</script>
<!-- Scripts Ends -->

        <script>
            $(".toggle_bar").click(function(){
  $(".menu_box").addClass("active");
});

$(".close_icon").click(function(){
  $(".menu_box").removeClass("active");
});

        </script>

        <!--  -->
        <!--  -->
        <!--  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  const radioButtons = document.querySelectorAll('.radio-button');
  radioButtons.forEach(radioButton => {
    radioButton.addEventListener('change', function() {
      document.querySelectorAll('.radio-label').forEach(label => {
        label.classList.remove('checked');
      });
      if (this.checked) {
        this.nextElementSibling.classList.add('checked');
      }
    });
  });
  document.querySelector('.radio-label').classList.add('checked');
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  $('.slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    //    focusOnSelect: true
  });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>