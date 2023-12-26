@extends('common.layout')
@section('content')
<link href="{{ asset('public/frontend-styles/Biz/css/signupeb77.css?v=4.6') }}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.7/flipclock.css" rel="stylesheet" />
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
                                            <input name="name" type="text" id="txtfullname" class="form-control" onpaste="return false" placeholder="Full Name" onfocus="this.placeholder = &#39;&#39;" autofocus="" required="" />
                                            <label for="exampleInputEmail1">Full Name</label>

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
                                                <input name="referral_code" type="text" id="refercode" class="form-control" placeholder="Enter Referral Code" onfocus="this.placeholder = &#39;&#39;" autofocus="" />
                                                <label for="exampleInputEmail1">Enter Referral Code</label>
                                                <button type="submit" id="apply_code">Apply Code</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-ms-12 col-xs-12">
                        <div class="bundle-section">
                            <h3 id="choosebundel">Choose Your Bundle</h3>
                            <div class="bundle-img-div">
                                
                                        <div class="col-md-4 col-sm-4 col-xs-12 step1">
                                            <div class="bundle-img course_img" style="cursor: pointer;" id="4">
                                                <img src="{{ asset('public/frontend-styles/Biz/img/marketing-mastery.png') }}">
                                                <h4>Marketing Mastery</h4>
                                                <span class="orgprice"><span>₹</span>2143</span><span class="splprice" style="display: none; margin-left: 10px;"><span>₹</span>1499</span><span class="disprice" style="display: none"><span>₹</span>1499</span>
                                            </div>
                                        </div>


                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 step1">
                                            <div class="bundle-img course_img" style="cursor: pointer;" id="1">
                                                <img src="{{ asset('public/frontend-styles/Biz/img/gold-bundle.png') }}">
                                                <h4>Branding Mastery</h4>
                                                <span class="orgprice"><span>₹</span>4999</span><span class="splprice" style="display: none; margin-left: 10px;"><span>₹</span>3499</span><span class="disprice" style="display: none"><span>₹</span>3499</span>
                                            </div>
                                        </div>


                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 step1">
                                            <div class="bundle-img course_img" style="cursor: pointer;" id="2">
                                                <img src="{{ asset('public/frontend-styles/Biz/img/sapphire.png') }}">
                                                <h4>Traffic Mastery</h4>
                                                <span class="orgprice"><span>₹</span>8999</span><span class="splprice" style="display: none; margin-left: 10px;"><span>₹</span>5999</span><span class="disprice" style="display: none"><span>₹</span>5999</span>
                                            </div>
                                        </div>


                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 step1">
                                            <div class="bundle-img course_img" style="cursor: pointer;" id="3">
                                                <img src="{{ asset('public/frontend-styles/Biz/img/platinum-bundle.png') }}">
                                                <h4>Influence Mastery</h4>
                                                <span class="orgprice"><span>₹</span>15999</span><span class="splprice" style="display: none; margin-left: 10px;"><span>₹</span>10999</span><span class="disprice" style="display: none"><span>₹</span>10999</span>
                                            </div>
                                        </div>


                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 step1">
                                            <div class="bundle-img course_img" style="cursor: pointer;" id="5">
                                                <img src="{{ asset('public/frontend-styles/Biz/img/stock-banner.jpg') }}">
                                                <h4>Finance Mastery</h4>
                                                <span class="orgprice"><span>₹</span>19999</span><span class="splprice" style="display: none; margin-left: 10px;"><span>₹</span>14999</span><span class="disprice" style="display: none"><span>₹</span>14999</span>
                                            </div>
                                        </div>


                                    
                            </div>
                        </div>
                    </div> -->

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <label id="amount"></label>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">

                </div>

                <div class="modal fade" id="add_on_modal" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="coupn_code_box" style="display:none">
                                    <p>Coupon Code:</p>
                                    <div class="coupn_code_form">
                                        <input name="ctl00$ContentPlaceHolder1$txtcoupon" type="text" id="txtcoupon" class="form-control" placeholder="have any promo code?" />
                                        <button type="button" id="btn_applycoupon">Apply</button>

                                    </div>
                                    <label id="lbl_msg" style="padding-top: 10px;color:red"></label>
                                </div>
                                <div class="amt_card_box">
                                    <div class="amount_table_box">
                                        <div class="addon_tut_video">
                                            <h4 id="addon_lbl_with_bundle"></h4>
                                            <div class="user_watch_video preview-span_nolead" data="https://player.vimeo.com/video/819462486?h=8cff466a17">
                                                <a data-toggle="modal" data-target="#video-test5" class="watch_video_btn">
                                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>Watch Tutorial
                                                </a>
                                            </div>

                                        </div>
                                        <table id="rdo_addon" class="addon_rdo">
                                            <tr>
                                                <td><input id="rdo_addon_0" type="radio" name="ctl00$ContentPlaceHolder1$rdo_addon" value="1" /><label for="rdo_addon_0"><img src=cpic/primesubscription.jpg class="addon_img" /><span class="addon_title">Prime Subscription</span><span class="addon_amount">₹399</span><span class="addon_description"><span class="cls_view_info">View info.</span><samp class="tooltiptext2"><b>28 Days Gurukul Nation Prime Subscription</b>
                                                                <ul style="padding-left: 18px;">
                                                                    <li>Weekly exciting offers to boost your affiliate business</li>
                                                                    <li>Get early access to all the offers</li>
                                                                    <li>Exclusive Discount coupons on packages</li>
                                                                    <li>Free courses</li>
                                                                </ul>
                                                            </samp></span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_addon_1" type="radio" name="ctl00$ContentPlaceHolder1$rdo_addon" value="2" /><label for="rdo_addon_1"><img src=cpic/3coupons.jpg class="addon_img" /><span class="addon_title">1 Coupon</span><span class="addon_amount">₹399</span><span class="addon_description"><span class="cls_view_info">View info.</span><samp class="tooltiptext2"><b>Discount Coupon Codes</b>
                                                                <ul style="padding-left: 18px;">
                                                                    <li>You will get a coupon code worth Rs 500/-</li>
                                                                    <li>Refer friends with your coupon code for Branding and above bundles to give them Rs 500/- off and earn a high commission.</li>
                                                                    <li>You can use this coupon code for upgradation as well.</li>
                                                                    <li>This coupon code will be valid for 15 days only from the date of purchase.</li>
                                                                </ul>
                                                            </samp></span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_addon_2" type="radio" name="ctl00$ContentPlaceHolder1$rdo_addon" value="3" /><label for="rdo_addon_2"><img src=cpic/upskilling.jpg class="addon_img" /><span class="addon_title">UpSkilling</span><span class="addon_amount">₹399</span><span class="addon_description"><span class="cls_view_info">View info.</span><samp class="tooltiptext2"><b>Gurukul Nation Treasure Courses</b>
                                                                <ul style="padding-left: 18px;">
                                                                    <li>Extra courses to help you grow more</li>
                                                                    <li>Capsule skill courses</li>
                                                                    <li>Designed by professionals</li>
                                                                    <li>Get certification</li>
                                                                    <li>Enhance your career</li>
                                                                </ul>
                                                            </samp></span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_addon_3" type="radio" name="ctl00$ContentPlaceHolder1$rdo_addon" value="4" /><label for="rdo_addon_3"><img src=cpic/addallbenefits.jpg class="addon_img" /><span class="addon_title">Add all benefits!</span><span class="addon_amount">₹499</span><span class="addon_description"><span class="cls_view_info">View info.</span><samp class="tooltiptext2">Kindly select this option to get all the benefits of the add-ons</samp></span></label></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="dv_upskilling_course" style="display:none">
                                        <h4>You can choose only 1 course (From the below mentioned options)</h4>
                                        <table id="rdo_upskillingcourse" class="addon_rdo">
                                            <tr>
                                                <td><input id="rdo_upskillingcourse_0" type="radio" name="ctl00$ContentPlaceHolder1$rdo_upskillingcourse" value="20" checked="checked" /><label for="rdo_upskillingcourse_0"><img src=Biz/Subscription/img/sub_con_img/89Adobe-Premiere-Pro.jpg class="addon_img" /><span class="addon_title">Adobe Premiere Pro</span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_upskillingcourse_1" type="radio" name="ctl00$ContentPlaceHolder1$rdo_upskillingcourse" value="21" /><label for="rdo_upskillingcourse_1"><img src=Biz/Subscription/img/sub_con_img/678Adobe-After-Effects.jpg class="addon_img" /><span class="addon_title">Adobe After Effects</span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_upskillingcourse_2" type="radio" name="ctl00$ContentPlaceHolder1$rdo_upskillingcourse" value="22" /><label for="rdo_upskillingcourse_2"><img src=Biz/Subscription/img/sub_con_img/834Adobe-Photoshop.jpg class="addon_img" /><span class="addon_title">Adobe Photoshop</span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_upskillingcourse_3" type="radio" name="ctl00$ContentPlaceHolder1$rdo_upskillingcourse" value="35" /><label for="rdo_upskillingcourse_3"><img src=Biz/Subscription/img/sub_con_img/750DigitalPhotographyforBegginers.jpg class="addon_img" /><span class="addon_title">Digital Photography For Beginners With DSLR & Smartphone</span></label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdo_upskillingcourse_4" type="radio" name="ctl00$ContentPlaceHolder1$rdo_upskillingcourse" value="71" /><label for="rdo_upskillingcourse_4"><img src=Biz/Subscription/img/sub_con_img/517SmartphoneVideoEditing.jpg class="addon_img" /><span class="addon_title">Smartphone Video Editing Masterclass</span></label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default cls_class" id="btn_addon_skip" data-dismiss="modal">Skip</button>
                                <button type="button" class="btn btn-default cls_class" id="btn_clear_addon" style="display:none">Clear Add On</button>
                                <button type="button" class="btn btn-default cls_class" data-dismiss="modal" id="btn_ok_popup">OK</button>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="adv_subcat_modal" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">
                                    <img src="{{ asset('public/frontend-styles/Biz/img/cancel2.png') }}" /></button>
                                <div class="modal_header">
                                    <h4 class="modal-title">Choose your pack</h4>

                                </div>

                                <div class="course_select_div">
                                    <div>
                                        <select name="ctl00$ContentPlaceHolder1$dd_adv_subcat_grp" id="dd_adv_subcat_grp">
                                            <option value="1" data="3.html" data-grvamt="25000" data-grvrefamt="20000" id="subcat_grp_1">Pack of 3</option>
                                            <option value="2" data="5.html" data-grvamt="30000" data-grvrefamt="25000" id="subcat_grp_2">Pack of 5</option>
                                            <option value="3" data="8.html" data-grvamt="35000" data-grvrefamt="30000" id="subcat_grp_3">Pack of 8</option>

                                        </select>
                                    </div>
                                    <div>
                                        <span class='orgprice orgprice_pack' id="grv_amt"></span><span class='disprice' style='display: none;' id="grv_refamt"></span><span class='splprice' style='display: none;' id="grv_spl_refamt"></span>
                                    </div>
                                </div>

                                <div class="course_div">
                                    <table id="chkMMList" class="cls_chkmm">
                                        <tr>
                                            <td><input id="chkMMList_0" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_0" value="1" /><label for="chkMMList_0"><img src='Biz/members/AdvBundle/image/platinum-bundle.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack1 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_1" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_1" value="2" /><label for="chkMMList_1"><img src='Biz/members/AdvBundle/image/gold-bundle.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack2 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_2" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_2" value="3" /><label for="chkMMList_2"><img src='Biz/members/AdvBundle/image/sapphire.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack3 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_3" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_3" value="4" /><label for="chkMMList_3"><img src='Biz/members/AdvBundle/image/stock-banner.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack4 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_4" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_4" value="5" /><label for="chkMMList_4"><img src='Biz/members/AdvBundle/image/stock-banner.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack5 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_5" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_5" value="6" /><label for="chkMMList_5"><img src='Biz/members/AdvBundle/image/stock-banner.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack6 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_6" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_6" value="7" /><label for="chkMMList_6"><img src='Biz/members/AdvBundle/image/stock-banner.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack7 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_7" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_7" value="8" /><label for="chkMMList_7"><img src='Biz/members/AdvBundle/image/stock-banner.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack8 </h4>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><input id="chkMMList_8" type="checkbox" name="ctl00$ContentPlaceHolder1$chkMMList$chkMMList_8" value="9" /><label for="chkMMList_8"><img src='Biz/members/AdvBundle/image/stock-banner.html' class='addon_img' />
                                                    <h4 class='addon_title'>Pack9 </h4>
                                                </label></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default cls_class" data-dismiss="modal" id="btn_adv_selected">Ok</button>
                            </div>
                        </div>
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
                        <input type="checkbox" id="chktandc" />&nbsp;I Agree with Terms & Conditions <span><a href="Biz/Terms-2.html" target="_blank">Terms</a> </span>and <span><a href="Biz/Privacy-2.html" target="_blank">Polices</a></span>
                        <br />
                        <input type="checkbox" id="chkrefund" />&nbsp;I have Read The Refund Policy <a href="Biz/RefundPolicy-2.html">Read More</a>
                    </div>
                    <div class="submit-btn">

                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnSubmit" class="btn btn-default" />

                    </div>
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
@endsection