@extends('common.layout')
@section('content')
@php $bundle = DB::table('course_categories')->get(); @endphp
<link href="{{ asset('public/frontend-styles/Biz/css/signupeb77.css?v=4.6') }}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.7/flipclock.css" rel="stylesheet" />

<!-- for bundle select  -->
<style>
    .input-hidden {
        position: absolute;
        left: -9999px;
    }

    input[type=radio]:checked+label>img {
        border: 1px solid #fff;
        box-shadow: 0 0 3px 3px #090;
    }

    /* Stuff after this is only to make things more pretty */
    input[type=radio]+label>img {
        /* border: 1px dashed #444; */
        width: 400px;
        height: 374px;
        transition: 500ms all;
    }

    input[type=radio]:checked+label>img {
        transform:
            rotateZ(-10deg) rotateX(10deg);
    }
</style>
<!-- /for bundle select  -->
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
    @endif <!-- end flash message -->
    <main>
        <section class="form-section" style="margin-top: 0px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="signUP__formDiv">
                            <div class="signUP__formRow">
                                <div class="signUp__images">
                                    <img class="signIn__mobile" src="#" onerror="this.onerror=null;this.src='{{ asset('public/frontend-styles/Biz/img/signup-banner-mob.png') }}';">

                                    <img class="signIn__desktop" src="#" onerror="this.onerror=null;this.src='{{ asset('public/frontend-styles/Biz/img/signup-banner-desk.png') }}';">

                                </div>
                                <div class="form-divMain">
                                    <form action="{{ route('user.signup.saved') }}" method="post">
                                        @csrf
                                        <div class="form-div">
                                            <div class="col-md-12">
                                                <div class="signUp__title">
                                                    <h2>Enroll to Gurukul Nation</h2>
                                                </div>

                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div style="text-align:right;">
                                                    <span data-val-controltovalidate="txtfullname" data-val-errormessage="*Name Required" id="RequiredFieldValidator1" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="color:Red;font-size:Small;visibility:hidden;">*Name Required</span>
                                                </div>
                                                <div class="form-group has-float-label">
                                                    <input name="name" type="text" id="txtfullname" class="form-control" onpaste="return false" placeholder="Full Name" required />
                                                    <label for="exampleInputEmail1">Full Name</label>
                                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>

                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group has-float-label">
                                                    <input name="email" type="email" id="txtLoginId" class="form-control" onpaste="return false" placeholder="Email Id" onfocus="this.placeholder = &#39;&#39;" autofocus="" required="" />
                                                    <label for="exampleInputEmail1">Email Id</label>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group has-float-label">
                                                    <input name="phone" type="number" id="txtMobileNumber" class="form-control" placeholder="Enter Mobile Number" onfocus="this.placeholder = &#39;&#39;" autofocus="" required="" />
                                                    <label for="exampleInputEmail1">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group has-float-label">
                                                    <input name="password" type="password" id="txtPassword" class="form-control" placeholder="Password" onfocus="this.placeholder = &#39;&#39;" autofocus="" required="" />
                                                    <label for="exampleInputPassword1">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group has-float-label">
                                                    <select name="state" id="dd_state" class="form-control" placeholder="State" onfocus="this.placeholder = &#39;&#39;" autofocus="">
                                                        <option>Select State</option>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chandigarh">Chandigarh</option>
                                                        <option value="Chattisgarh">Chattisgarh</option>
                                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Orissa">Orissa</option>
                                                        <option value="Pondicherry">Pondicherry</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="Uttaranchal">Uttaranchal</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>

                                                    </select>
                                                    <label for="exampleInputEmail1">State</label>
                                                </div>

                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group has-float-label">

                                                    <div class="aff-div">
                                                        <input name="referral_code" type="text" id="refercode" class="form-control" placeholder="Enter Referral Code" />
                                                        <label for="exampleInputEmail1">Enter Referral Code</label>
                                                        <!-- <button type="submit" id="apply_code">Apply Code</button> -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  package  -->

                    <div class="col-ms-12 col-xs-12">
                        <div class="bundle-section">
                            <h3 id="choosebundel">Choose Your Bundle</h3>
                            <span id="spnError" class="text-danger" style="display: none"><strong>Please select a Bundle.</strong></span>
                            <div class="bundle-img-div">
                                @foreach($bundle as $row)
                                @php $course = DB::table('courses')->where('category_id', $row->id)->first(); @endphp
                                <div class="col-md-4 col-sm-4">
                                    <div class="bundle-img course_img" style="cursor: pointer;" id="4">
                                        <input type="radio" required name="bundle_id" value="{{ $row->id }}" id="{{$row->id}}" class="input-hidden" />
                                        <label for="{{$row->id}}">
                                            <img src="{{ $course->thumbnail }}" alt="img" />
                                        </label>
                                        
                                        <h4>{{ $row->name }}</h4>
                                        <span class="orgprice"><span>₹</span>{{ $course->price }}</span>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- / package  -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <label id="amount"></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 payment_main_image">
                        <div class="payment_img">
                            <img src="{{ asset('public/frontend-styles/Biz/img/payment_method_img.png') }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment__methods">
                            <h2>Payment Methods</h2>
                            <table id="ContentPlaceHolder1_rdo_payment_gateway">
                                <tr>
                                    <td><input id="ContentPlaceHolder1_rdo_payment_gateway_0" type="radio" name="ctl00$ContentPlaceHolder1$rdo_payment_gateway" value="1" checked="checked" /><label for="ContentPlaceHolder1_rdo_payment_gateway_0"><img src='cpic/instamojo.jpg' /></label></td>
                                </tr>
                            </table>
                        </div>

                        <div id="section_doc">
                            <input type="checkbox" id="chktandc" required />&nbsp;I Agree with Terms & Conditions <span><a href="{{ URL::to('terms-&-conditions') }}" target="_blank">Terms</a> </span>and <span><a href="{{ URL::to('privacy-policy') }}" target="_blank">Polices</a></span>
                            <br />
                            <input type="checkbox" id="chkrefund" required />&nbsp;I have Read The Refund Policy <a href="{{ URL::to('refund-policy') }">Read More</a>
                    </div>
                    <div class="submit-btn">

                        <input type="submit" name="Submit" value="Submit" id="btnSubmit" class="btn btn-default" />

                    </div>
                    </form>
                    <div class="or-txt">
                        or
                    </div>
                    <div class="signup-otp">
                        <a href="#">Signup Using OTP</a>
                    </div>
                </div>
            </div>
            <div class="disclaimerWrap__content">
                <p>
                    <b>Note : </b>
                    <br>
                    If you are facing any issue while making a payment, please Whatsapp to 9318365847. (Timing: Monday to Sunday 9:30 AM to 6:00 PM)
                </p>
            </div>
        </div>
    </section>

    <section class="vedio-testimonial-modal">
        <div class="course-section"></div>
    </section>
</main>

<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var isValid = $("input[name=Fruit]").is(":checked");
            $("#spnError")[0].style.display = isValid ? "none" : "block";
        });
    });
</script>
@endsection