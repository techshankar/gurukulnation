@extends('common.layout')
@section('content')

<main>
    <section class="form-section">
        <input type="hidden" name="#" value="0" />
        <div class="container">
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
            <div class="row contact_row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="location">
                        <img src="{{ asset('public/frontend-styles/Biz/img/callback_vector.png') }}" />
                    </div>
                    <div class="location">

                        <div class="location-txt">
                            <h3>Registered Address:</h3>
                            <p>{{ $contact->address }}</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location-txt">
                            <h3>Info Mail:</h3>
                            <p>{{ $contact->info_email }}</p>
                        </div>
                    </div>
                    <div class="location">

                        <div class="location-txt">
                            <h3>Support Mail:</h3>
                            <p>{{ $contact->support_email }}</p>
                        </div>
                    </div>



                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="signup-heading">
                        <h3>Request For CallBack</h3>
                        <p>To know more about courses offered by us kindly fill in the below mention details you will get a call back soon.</p>
                    </div>
                    <div class="form-div row">
                        <form action="{{ URL::to('contact/store') }}" method="post">
                            @csrf 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group has-float-label">
                                    <input name="name" type="text" class="form-control" placeholder="Enter Name" required />
                                    <label for="txtName">Name</label>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group has-float-label">
                                    <input name="email" type="email" class="form-control" placeholder="Email Address" required />
                                    <label for="email">Email Id</label>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group has-float-label">
                                    <input type="number" name="mobile" id="txtphone" placeholder="Mobile No." class="form-control" />
                                    <label for="tbmobileno">Mobile no.</label>

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group has-float-label">
                                    <textarea name="message" rows="2" cols="20" id="message" class="form-control" placeholder="Message" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="submit-btn">
                                    <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-default" />
                                </div>

                            </div>
                        </form>
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