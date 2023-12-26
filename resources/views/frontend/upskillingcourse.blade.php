@extends('common.layout')
@section('content')
<!-- upskilling courses css  -->
<link href="{{ asset('public/frontend-styles/Biz/Subscription/css/courseflixd134.css?v=3.4') }}" rel="stylesheet" />
<!-- carousel -->
<link rel="stylesheet" href="{{ asset('public/frontend-styles/Biz/Subscription/cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css') }}">
<main>
    <input type="hidden" name="ctl00$ContentPlaceHolder1$hdn_first_catId" id="hdn_first_catId" value="9" />
    <input type="hidden" name="ctl00$ContentPlaceHolder1$hdn_ref_id" id="hdn_ref_id" value="cbcDJ7DVHoQ=" />
    <section class="courseflix__banner">
        <img class="course__bannerDesktop" src="{{ asset('public/frontend-styles/Biz/Subscription/img/courseflix-bannerDesk1.jpg') }}" />
        <img class="course__bannerMobile" src="{{ asset('public/frontend-styles/Biz/Subscription/img/courseflix-bannerMob1.jpg') }}" />

    </section>

    <section>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="course__tabHeading">
                    <h1>Explore new skills and choose the best fit for yourself</h1>

                </div>
            </div>
        </div>
    </section>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Browse By Category <i class="fa fa-times nav__close" aria-hidden="true"></i></h3>

            </div>

            <ul class="list-unstyled components">
                @foreach($courseCategories as $key=>$row)
                <li class='@if($key == 0)? "active" : " " @endif cls_cat' data-url="{{ URL::to('get-course', $row->id) }}"><a href='javascript:void(0)' class='cls_category' id="show-course">{{ $row->name }}</a></li>
                @endforeach
            </ul>


        </nav>

        <!-- Page Content Holder -->
        <div class="row">
        <span id="courses"></span>
    </div>
    </div>
    </div>
    </div>
</main>

<script>
    $(document).ready(function() {
        $("#sidebarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
            $(this).toggleClass("active");
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        /* When click show user */
        $('body').on('click', '.cls_cat', function() {
            $(".cls_cat").removeClass("active");
            $(this).addClass("active");

            var userURL = $(this).data('url');
            $.get(userURL, function(data) {
                $('#courses').html(data);
            })
        });

    });
</script>
@endsection