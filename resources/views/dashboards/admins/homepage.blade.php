@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Homepage')

@section('content')
@php 
$packers = [];
$interior = [];
$rsa = [];
    foreach($homepagebanners as $key => $val){
        $packers = $homepagebanners[0];
        $interior = $homepagebanners[1];
        $rsa = $homepagebanners[2];
    }
@endphp

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Home Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Home Page</li>
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
                            <li class="nav-item"><a class="nav-link tablinks" onclick="openTab(event, 'packers_n_movers')" data-toggle="tab">Packers & Movers</a></li>
                            <li class="nav-item"><a class="nav-link tablinks" onclick="openTab(event, 'interior_designing')" data-toggle="tab">Interior Designing</a></li>
                            <li class="nav-item"><a class="nav-link tablinks" onclick="openTab(event, 'roadsideassistance')" data-toggle="tab">Road Side Assistance</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="packers_n_movers">
                                <form class="form-horizontal" action="{{ route('admin.homepagebanners') }}" method="POST" id="changePasswordAdminForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="uniqueId" value="{{$packers->id}}">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Packers & Movers Image 1</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image1" value="{{$packers->image1}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$packers->image1}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Packers & Movers Image 2</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image2" value="{{$packers->image2}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$packers->image2}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Packers & Movers Image 3</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image3" value="{{$packers->image3}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$packers->image3}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Packers & Movers Image 4</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image4" value="{{$packers->image4}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$packers->image4}}" alt="" style="height:150px;">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane tabcontent" id="interior_designing">
                                <form class="form-horizontal" action="{{ route('admin.homepagebanners') }}" method="POST" id="changePasswordAdminForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="uniqueId" value="{{$interior->id}}">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Interior Designing Image 1</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image1" value="{{$interior->image1}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$interior->image1}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Interior Designing Image 2</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image2" value="{{$interior->image2}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$interior->image2}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Interior Designing Image 3</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image3" value="{{$interior->image3}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$interior->image3}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Interior Designing Image 4</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image4" value="{{$interior->image4}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$interior->image4}}" alt="" style="height:150px;">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane tabcontent" id="roadsideassistance">
                                <form class="form-horizontal" action="{{ route('admin.homepagebanners') }}" method="POST" id="changePasswordAdminForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="uniqueId" value="{{$rsa->id}}">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Road Side Assistance Image 1</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image1" value="{{$rsa->image1}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$rsa->image1}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Road Side Assistance Image 2</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image2" value="{{$rsa->image2}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$rsa->image2}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Road Side Assistance Image 3</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image3" value="{{$rsa->image3}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$rsa->image3}}" alt="" style="height:150px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Road Side Assistance Image 4</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="image4" value="{{$rsa->image4}}">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{$rsa->image4}}" alt="" style="height:150px;">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- /.tab-content -->
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

<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection