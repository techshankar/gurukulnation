<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/plugins/ijaboCropTool/ijaboCropTool.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css')}}">
</head>

<body class="sidebar-mini layout-fixed text-sm">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ \URL::to('/')}}" class="brand-link">
        <img src="{{ asset('public/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Your Site</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!-- <div class="image">
          <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2 admin_picture" alt="User Image">
        </div> -->
          <div class="info">
            <a href="#" class="d-block admin_name">{{ Auth::user()->name }}</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="{{ route('admin.banners')}}" class="nav-link {{ (request()->is('admin/banners*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Add Banner
                </p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{ route('admin.banner_list')}}" class="nav-link {{ (request()->is('admin/banner_list*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Banner List
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
             <a href="{{ route('admin.our_story_and_mission')}}" class="nav-link {{ (request()->is('admin/our_story_and_mission*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  Our Story & Mission
                </p>
              </a>
            </li> -->

            <li class="active" style="margin-left: 3em;">
              <a href="#courseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Course</a>
              <ul class="collapse list-unstyled" id="courseSubmenu">
                <li class="nav-item">
                  <a href="{{ route('admin.category')}}" class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                    <i class="nav-icon fas fa-square"></i>
                    <p>
                      Course Category
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.courses')}}" class="nav-link {{ (request()->is('admin/courses*')) ? 'active' : '' }}">
                    <i class="nav-icon fas fa-snowflake"></i>
                    <p>
                      Courses
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.video')}}" class="nav-link {{ (request()->is('admin/video*')) ? 'active' : '' }}">
                    <i class="nav-icon fas fa-square"></i>
                    <p>
                      Course Video
                    </p>
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <!-- <li class="nav-item">
              <a href="{{ route('admin.category')}}" class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-square"></i>
                <p>
                  Course Category
                </p>
              </a>
            </li> -->





            <li class="nav-item">
              <a href="{{ route('admin.careers')}}" class="nav-link {{ (request()->is('admin/careers*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  Careers 
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.how_gurukul_nation_work')}}" class="nav-link {{ (request()->is('admin/how_gurukul_nation_work*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  How Gurkul Nation Work
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.why_gurukul_nation')}}" class="nav-link {{ (request()->is('admin/why_gurukul_nation*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  Why Gurkul Nation
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.about')}}" class="nav-link {{ (request()->is('admin/about*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  About
                </p>
              </a>
            </li>
            <!--
            <li class="nav-item">
              <a href="{{ route('admin.blogs')}}" class="nav-link {{ (request()->is('admin/blogs*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-snowflake"></i>
                <p>
                  Blogs 
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.services')}}" class="nav-link {{ (request()->is('admin/services*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-snowflake"></i>
                <p>
                  Our Services 
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('admin.testmonials')}}" class="nav-link {{ (request()->is('admin/testmonials*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-snowflake"></i>
                <p>
                  Testmonials 
                </p>
              </a>
            </li> -->

            <!--
             <li class="nav-item">
              <a href="{{ route('admin.main_banner')}}" class="nav-link {{ (request()->is('admin/main_banner*')) ? 'active' : '' }}">
                <i class="nav-icon fa fa-image" aria-hidden="true"></i>
                <p>
                  Main Banners
                </p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="{{ route('admin.homepage')}}" class="nav-link {{ (request()->is('admin/homepage*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                Home Page(icons 2nd section)
                </p>
              </a>
            </li>  -->
            <!-- <li class="nav-item">
              <a href="{{ route('admin.newsletterlist')}}" class="nav-link {{ (request()->is('admin/newsletterlist*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Newsletters
                </p>
              </a>
            </li>-->

            <li class="nav-item">
              <a href="{{ route('admin.contact')}}" class="nav-link {{ (request()->is('admin/contact*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-phone"></i>
                <p>
                  Contact Us
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('admin.reviews')}}" class="nav-link {{ (request()->is('admin/reviews*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Reviews
                </p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="{{ route('admin.faqs')}}" class="nav-link {{ (request()->is('admin/faqs*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  FAQs
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('admin.learner_support')}}" class="nav-link {{ (request()->is('admin/learner_support*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  Learner Support
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.profile')}}" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.termsncondandprvcypolicy')}}" class="nav-link {{ (request()->is('admin/termsncondandprvcypolicy*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-hdd"></i>
                <p>
                  Terms & Privacy Policy
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.settings')}}" class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Settings
                </p>
              </a>
            </li>

          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <!-- Anything you want -->
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <a href="#">gurukulnation.com</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ url('public/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('public/plugins/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('public/dist/js/adminlte.min.js')}}"></script>


  
  {{-- CUSTOM JS CODES --}}
  <script>
// for ck-editor 
ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});
// for ck-editor 

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(function() {

      /* UPDATE ADMIN PERSONAL INFO */

      $('#AdminInfoForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: new FormData(this),
          processData: false,
          dataType: 'json',
          contentType: false,
          beforeSend: function() {
            $(document).find('span.error-text').text('');
          },
          success: function(data) {
            if (data.status == 0) {
              $.each(data.error, function(prefix, val) {
                $('span.' + prefix + '_error').text(val[0]);
              });
            } else {
              $('.admin_name').each(function() {
                $(this).html($('#AdminInfoForm').find($('input[name="name"]')).val());
              });
              alert(data.msg);
            }
          }
        });
      });



      $(document).on('click', '#change_picture_btn', function() {
        $('#admin_image').click();
      });


      $('#admin_image').ijaboCropTool({
        preview: '.admin_picture',
        setRatio: 1,
        allowedExtensions: ['jpg', 'jpeg', 'png'],
        buttonsText: ['CROP', 'QUIT'],
        buttonsColor: ['#30bf7d', '#ee5155', -15],
        processUrl: '{{ route("adminPictureUpdate") }}',
        // withCSRF:['_token','{{ csrf_token() }}'],
        onSuccess: function(message, element, status) {
          alert(message);
        },
        onError: function(message, element, status) {
          alert(message);
        }
      });


      $('#changePasswordAdminForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: new FormData(this),
          processData: false,
          dataType: 'json',
          contentType: false,
          beforeSend: function() {
            $(document).find('span.error-text').text('');
          },
          success: function(data) {
            if (data.status == 0) {
              $.each(data.error, function(prefix, val) {
                $('span.' + prefix + '_error').text(val[0]);
              });
            } else {
              $('#changePasswordAdminForm')[0].reset();
              alert(data.msg);
            }
          }
        });
      });


    });
  </script>
</body>

</html>