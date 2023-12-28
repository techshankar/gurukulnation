<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gurukulnation.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="author" content="Trisha Software">
    <!-- Favicon icon -->
    <script src="{{ asset('public/frontend-styles/apps/head/FyMUmghuDMHd-hdsZH7l5zQAJkQ.js') }}"></script>
    <link href="{{ asset('public/frontend-styles/assets/img/favicon.png') }}" rel="icon" type="image/x-icon">

    <!-- Google font-->
    <link href="{{ asset('public/frontend-styles/fonts.googleapis.com/css0e2b.css?family=Open+Sans:400,600') }}" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend-styles/Content/bower_components/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend-styles/Content/bower_components/bootstrap/css/bootstrap.min.css') }}" />
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend-styles/Content/assets/icon/feather/css/feather.css') }}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend-styles/Content/assets/css/style.css') }}">
    </link>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend-styles/Content/assets/css/jquery.mCustomScrollbar.css') }}">
    </link>
</head>

<body class="fix-menu" style="background-color: #ffffff !important">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <form action="{{ URL::to('reset-user-password-save') }}" method="post">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('public/frontend-styles/Biz/img/myimgs/gurukul_logo.png') }}" style="width: 200px;" alt="logo.png" />
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                    </div>
                                    <p class="text-muted text-center p-b-5">Reset your password</p>
                                    <div class="form-group form-primary" style="margin-bottom: 5px;">
                                        <input name="email" type="email"  class="form-control" readonly value="{{ $email }}" />
                                    </div>
                                    <div class="form-group form-primary" style="margin-bottom: 5px;">
                                        <input name="password" type="password" id="password" class="form-control" placeholder="Enter Your Password" required="" />
                                    </div>
                                    <div class="form-group form-primary" style="margin-bottom: 5px;">
                                        <input name="conform_password" type="conform_password" id="confirm_password" class="form-control" placeholder="Enter Your Conform Password" required="" />
                                        <span id="confirm_password_msg"></span>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <input type="submit" id="sign_in_btn" onclick="return false" value="Reset Password"  id="btnSubmit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" />
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <span id="txtMessage" style="margin-left: auto; margin-right: auto; display: block; color: red;"></span>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/i18next/js/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend-styles/Content/assets/js/common-pages.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"829e984e08536b9f","version":"2023.10.0","token":"0b2d30c0d91c41ef8c5e660185295aa3"}' crossorigin="anonymous"></script>


    <script>
                $(document).ready(function(){
          
          $("#confirm_password").bind('keyup change', function(){

            check_Password( $("#password").val(), $("#confirm_password").val() )
            
            
          })

          $("#sign_in_btn").click(function(){

            check_Password( $("#password").val(), $("#confirm_password").val() )

          })
        })

        function check_Password( Pass, Con_Pass){

          if(Pass === ""){

            

          }else if( Pass === Con_Pass){

            $("#sign_in_btn").removeAttr("onclick")
            $('#confirm_password_msg').show()
            $("#confirm_password_msg").html('<div class="alert alert-success">Password matched</div>')

            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            }, 3000);

          }else{
            $("#confirm_password").focus()
            $('#confirm_password_msg').show()
            $("#confirm_password_msg").html('<div class="alert alert-danger">Password did not matched</div>')

            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            }, 3000);

          }

        }
    </script>
</body>

</html>