@extends('common.layout')
@section('content')
<link href="{{ asset('public/frontend-styles/Biz/css/login2048.css?v=1.5') }}" rel="stylesheet" />
<main>
    <section class="form-section" style="margin-top: 0px !important;">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="logIN__formDiv">
                        <div class="logIN__formRow  row">
                            
                                
                                    <div class="login__formMain">
                                        <div class="login-form">
                                            <div class="form-div">
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
                                                <form action="{{ route('user.login') }}" method="post">
                                                    @csrf
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="signup-heading">
                                                            <h2>SignIn to Gurukul Nationn</h2>

                                                        </div>
                                                        <div class="login_error_alt">
                                                            <span id="ContentPlaceHolder1_txtMessage" style="color:Red;font-weight:bold;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group has-float-label">
                                                            <input name="email" type="email" class="form-control" placeholder="Enter User/Email Id" onfocus="this.placeholder = &#39;&#39;" autofocus="" required="" />
                                                            <label for="exampleInputEmail1">Enter User/Email Id</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group has-float-label">
                                                            <input name="password" type="password" class="form-control" placeholder="Password" onfocus="this.placeholder = &#39;&#39;" autofocus="" required="" />
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <a class="forget-pass" href="{{ route('user.forget.password') }}" style="margin-top:8px;">Forgot Password?</a>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                                        <div class="submit-btn">
                                                            <input type="submit" value="Login" class="btn btn-default" id="btnLogin" />
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                


                            </div>
                        </div>
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
@endsection