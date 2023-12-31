@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Homepage Banners')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Home Page Banners</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Home Page Banners</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
<!-- <img src="uploads/{{ Session::get('file') }}"> -->
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Edit Banners</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="packers_n_movers">
                                <form class="form-horizontal" action="{{ url('admin/edit_banners')}}/{{$banner->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="">Banner Title</label>
                                            <input type="text" name="title" placeholder="Enter banner title here" value="{{ $banner->title }}" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                        <label for="">Banner Content</label>
                                         <input type="text" name="content" placeholder="Enter banner content here" value="{{ $banner->content }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                        <label for="inputName" class="col-sm-6 col-form-label">Banner Image</label>
                                        <input type="file" class="form-control" id="inputName" name="banner" value="{{$banner->banner}}">
                                        </div>
                                        <div class="col-lg-6">
                                        <label for="" class="col-sm-6 col-form-label">Old Image</label>
                                            <img src="{{$banner->banner}}" alt="" style="height:200px; width:510px;">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-12 col-form-label">Status</label>
                                        <div class="col-sm-12">
                                            <select name="status" class="form-control" id="inputName">
                                                <option <?php if($banner->status == 1){ echo "Selected";}?> value="1">Active</option>
                                                <option value="0" <?php if($banner->status == 0){ echo "Selected";}?>>In-Active</option>
                                            </select>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="text-center col-sm-10">
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

@endsection