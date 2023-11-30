@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Why Gurkul Nation')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Why Gurkul Nation</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Why Gurkul Nation</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Why Gurkul Nation</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.why_gurukul_nation_update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->id }}@else @endif">
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title One</label>
                                            <input type="text" class="form-control" name="title1" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->title1 }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title Two</label>
                                            <input type="text" class="form-control" name="title2" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->title2 }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title Three</label>
                                            <input type="text" class="form-control" name="title3" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->title3 }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title Four</label>
                                            <input type="text" class="form-control" name="title4" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->title4 }}@else @endif">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Count One</label>
                                            <input type="text" class="form-control" name="count1" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->count1 }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Count Two</label>
                                            <input type="text" class="form-control" name="count2" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->count2 }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Count Three</label>
                                            <input type="text" class="form-control" name="count3" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->count3 }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Count Four</label>
                                            <input type="text" class="form-control" name="count4" required value="@if(!empty($whyGurukulNation->id)){{ $whyGurukulNation->count4 }}@else @endif">
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