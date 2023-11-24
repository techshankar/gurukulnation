@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Add Blog')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Blog</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Blog</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.saveBlog') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Select Category Name:</label>
                                            <select name="category_id" class="form-control" id="">
                                                <option value="">Select Blog Category</option>
                                                @foreach($blogCategory as $val)
                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title:</label>
                                            <input type="input" class="form-control" id="inputName" placeholder="Enter Title" name="title" required>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-12 col-form-label">Description:</label>
                                        <div class="col-sm-12">
                                            <textarea name="content" class="form-control" id="description"></textarea>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-12 col-form-label">Image:</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="image" class="form-control">
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
<script>
    $('#catId').change(function() {
        var cat_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{url('admin/fetchSubCategory')}}",
            data: "cat_id=" + $(this).val(),
            async: false,
            success: function(response) {
                $('#subCatId').html(response)
            },
            error: function() {
                alert('Error occured');
            }
        });

    });
    $('#BlogType').change(function() {
        var type = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{url('admin/fetchCategory')}}",
            data: "type=" + $(this).val(),
            async: false,
            success: function(response) {
                $('#catId').html(response)
            },
            error: function() {
                alert('Error occured');
            }
        });

    });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection