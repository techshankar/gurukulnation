@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Homepage Banners')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Home Page Our Story</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Home Page Our Story</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Our Story</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.our_story_and_mission_update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $homepageOurStoryAndMission->id }}">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title Our Story</label>
                                            <input type="text" class="form-control" name="title_our_story" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->title_our_story }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title Our Mission</label>
                                            <input type="text" class="form-control" name="title_our_mission" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->title_our_mission }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Description Our Story</label>
                                            <input type="text" class="form-control" name="desc_our_story" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->desc_our_story }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Founded Years</label>
                                            <input type="date" class="form-control" name="foundend_yrs" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->foundend_yrs }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Description Our Mission</label>
                                            <input type="text" class="form-control" name="disc_our_mission" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->disc_our_mission }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Bullets One Our Mission</label>
                                            <input type="text" class="form-control" name="bullets1_our_mission" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->bullets1_our_mission }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Bullets Two Our Mission</label>
                                            <input type="text" class="form-control" name="bullets2_our_mission" required value="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->bullets2_our_mission }}@else @endif">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Image<strong>👉</strong></label>
                                            <input type="file" class="form-control" name="image">
                                            <span class="text-danger error-text"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="@if(!empty($homepageOurStoryAndMission->id)){{ $homepageOurStoryAndMission->image }}@else @endif" alt="" style="height:210px; width: 508px;">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-6">
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