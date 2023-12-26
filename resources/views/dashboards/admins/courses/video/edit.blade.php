@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Edit Video')

@section('content')



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Video</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Video</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Video</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.saveVideo') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $videos->id }}">
                                    <div class="form-group row">
                                        <div class="col-lg-12"><!-- col-sm-12 -->
                                            <label for="inputName" class="col-sm-12 col-form-label">Video Heading:</label>
                                            <input type="text" class="form-control" name="vdo_heading" value="{{ $videos->vdo_heading }}" required>
                                        </div><!--/ col-sm-12 -->
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4"><!-- col-sm-4 -->
                                            <label for="inputName" class="col-sm-12 col-form-label">Select Package Name:</label>
                                            <select name="cat_id" class="form-control" id="catId">
                                                <option value="">Select Package</option>
                                                @foreach($courseCatcary as $val)
                                                <option value="{{$val->id}}" {{ $val->id == $videos->cat_id ? 'selected' : '' }}>{{$val->name}}</option>
                                                @endforeach
                                            </select>
                                        </div><!--/ col-sm-4 -->
                                        <div class="col-sm-4"><!-- col-sm-4 -->
                                            <label for="inputName" class="col-sm-12 col-form-label">Select Course Name:</label>
                                            <select name="course_id" class="form-control" id="courseId">
                                                <option>-- Select course --</option>
                                                @foreach($course as $row)
                                                <option value="{{ $row->id }}" {{ $row->id == $videos->course_id ? 'selected' : '' }}>{{ $row->title }}</option>
                                                @endforeach
                                            </select>
                                        </div><!--/ col-sm-4 -->
                                        <div class="col-lg-4"><!-- col-sm-4 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Video Language:</label>
                                            <input type="text" placeholder="Enter Language like: Hindi" class="form-control" name="language" value="{{ $videos->language }}">
                                        </div><!--/ col-sm-4 -->
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-4"><!-- col-sm-4 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Video Subtitles:</label>
                                            <input type="text" placeholder="Enter Subtitles like:Yes/No" value="{{ $videos->sub_title }}" class="form-control" name="sub_title">
                                        </div><!--/ col-sm-4 -->
                                        <div class="col-lg-4"><!-- col-sm-4 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Video Use On:</label>
                                            <input type="text" placeholder="Enter watch on like:Laptop,Desktop,mobile" value="{{ $videos->watch_on }}" class="form-control" name="watch_on">
                                        </div><!--/ col-sm-4 -->
                                        <div class="col-lg-4"><!-- col-sm-4 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Video Access Time Line:</label>
                                            <input type="text" placeholder="Enter Access Time Line like:Full time" value="{{ $videos->access_time }}" class="form-control" name="access_time">
                                        </div><!--/ col-sm-4 -->
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-6"><!-- col-sm-6 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Select Video:</label>
                                            <input type="file" class="form-control" name="video">
                                        </div><!--/ col-sm-6 -->
                                        <div class="col-lg-6"><!-- col-sm-6 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Video Priority:</label>
                                            <input type="text" placeholder="Enter Video Priority like: 1" value="{{ $videos->vdo_priority }}" class="form-control" name="vdo_priority">
                                        </div><!--/ col-sm-6 -->
                                    </div>
                                    <strong>OR</strong>
                                    <div class="form-group row">
                                        <div class="col-lg-12"><!-- col-sm-12 -->
                                            <label for="inputName" class="col-sm-6 col-form-label">Ifram Link(Video URL):</label>
                                            <input type="text" class="form-control" placeholder="Enter Ifram Link" value="{{ $videos->vdo_url }}" name="vdo_url">
                                        </div><!-- col-sm-12 -->
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<script src="{{ url('public/plugins/jquery/jquery.min.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });

    // <!-- for select course according to package/category  -->
    $('#catId').change(function() {
        var cat_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{url('admin/fetchCourse')}}",
            data: "cat_id=" + $(this).val(),
            async: false,
            success: function(response) {
                $('#courseId').html(response)
            },
            error: function() {
                alert('Error occured');
            }
        });
    });
    // <!--/ for select course according to package/category  -->
</script>
@endsection