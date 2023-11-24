@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Edit Testimonials')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Testimonials</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Testimonials</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Testimonials</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ url('admin/updateTestmonials') }}/{{$testimonials->slug}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$testimonials->id}}">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Name:</label>
                                            <input type="input" class="form-control" id="inputName" name="title" value="{{$testimonials->title}}" required>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Avatar:</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Old Avatar:</label>
                                            <img src="{{$testimonials->image}}" alt="" style="height:200px; width: 440px">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-12 col-form-label">Description:</label>
                                        <div class="col-sm-12">
                                            <textarea name="description" class="form-control" id="description">{{ $testimonials->description }}</textarea>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
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
</script>
@endsection