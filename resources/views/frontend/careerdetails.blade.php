@extends('common.layout')
@section('content')
<section class="career_form_section">
    <input type="hidden" name="ctl00$ContentPlaceHolder1$hdnmobile" id="hdnmobile" value="0" />
    <input type="hidden" name="ctl00$ContentPlaceHolder1$hdnid" id="ContentPlaceHolder1_hdnid" value="158" />
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="career_form_left">
                    <div id="ContentPlaceHolder1_divshow">
                        <h3 class="job_title">{{ $careerDetails->designation }}</h3>
                    </div>

                    <div id="ContentPlaceHolder1_divjob">
                        <p>
                        <p><strong>Years of Experience - {{ $careerDetails->exprience }} Years<br />
                                Location - {{ $careerDetails->job_location }}</strong></p>

                        <p><strong>Profile Overview:<br />
                                {{ strip_tags($careerDetails->overview) }}</strong></p>

                        <p><strong>Qualifications and Requirements:</strong></p>

                        <p><strong>{{ $careerDetails->qualification }}</strong></p>

                        <p><strong>Roles &amp; Responsibilities:</strong></p>

                        <p><strong>{{ strip_tags($careerDetails->roles_n_responsibilties) }}</strong></p>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="career_form">
                    <h4>Interested to work with Gurukul Nation?</h4>
                    <p>Share your details with us, and we will get back to you.</p>
                    <div class="form-group">
                        <form action="{{ URL::to('apply/job') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label>Job Title</label>
                            <input required name="job_title" type="text" value="{{ $careerDetails->designation }}" readonly class="form-control" placeholder="Title" />

                    </div>
                    <div class="form-group">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input required name="name" type="text" class="form-control" placeholder="Full Name" />

                    </div>
                    <div class="form-group">
                        <label>Email Id <span class="text-danger">*</span></label>
                        <input required name="email" placeholder="Email" type="email" class="form-control" />

                    </div>
                    <div class="form-group has-float-label">
                        <label>From Where do you know about us?</label>
                        <select required name="referenced_by" class="form-control" placeholder="From Where do you know about us?">
                            <option selected="selected" value="0">-Select-</option>
                            <option value="6">Friend</option>
                            <option value="5">Affiliate</option>
                            <option value="4">Website</option>
                            <option value="3">Facebook</option>
                            <option value="2">Instagram</option>
                            <option value="1">Other</option>

                        </select>


                    </div>
                    <div class="form-group" id="divphone">
                        <label>Phone No.</label>
                        <input required name="mobile" type="number" maxlength="10" class="form-control" placeholder="Phone No." />
                    </div>
                    <div class="form-group">
                        <label>Current Location</label>
                        <input required name="current_location" type="text" class="form-control" placeholder="Current Location" />
                    </div>
                    <div class="form-group form_check">
                        <input type="checkbox" required name="ready_to_relocate" value="yes" checked="checked" /><label>Are you ready to relocate?</label>
                    </div>
                    <div class="form-group has-float-label">
                        <textarea required name="job_description" rows="2" cols="20" maxlength="150" class="form-control" placeholder="Job Description"></textarea>
                        <label>Job Description</label>
                    </div>
                    <div class="form-group form-group-bottom  has-float-label">

                        <label>Upload Resume</label>
                        <span id="ContentPlaceHolder1_lblimg" style="color:White;"></span>
                        <input type="file" required name="resume" class="form-control upload-file" placeholder="Upload Resume" />
                    </div>


                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="form_apply" />
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection