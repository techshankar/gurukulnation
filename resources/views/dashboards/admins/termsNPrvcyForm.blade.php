@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Terms and conditions')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Terms and Conditions and Privacy policy</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Terms and Conditions and Privacy policy</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Terms and Conditions and Privacy policy</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.termsncondandprvcypolicy_update') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="@if(!empty($trmsNCondNPrvcyPlcy->id)){{ $trmsNCondNPrvcyPlcy->id }}@else @endif">

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title (Terms & Conditions)</label>
                                            <input type="text" class="form-control" name="title_trms" required value="@if(!empty($trmsNCondNPrvcyPlcy->id)){{ $trmsNCondNPrvcyPlcy->title_trms }}@else @endif">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title (Privacy Policy)</label>
                                            <input type="text" class="form-control" name="title_prvcy" required value="@if(!empty($trmsNCondNPrvcyPlcy->id)){{ $trmsNCondNPrvcyPlcy->title_prvcy }}@else @endif">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Description (Terms & Conditions)</label>
                                            <textarea name="desc_trms" class="form-control">@if(!empty($trmsNCondNPrvcyPlcy->id)){{ $trmsNCondNPrvcyPlcy->desc_trms }}@else @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Description (Privacy Policy)</label>
                                            <textarea name="desc_prvcy" class="form-control">@if(!empty($trmsNCondNPrvcyPlcy->id)){{ $trmsNCondNPrvcyPlcy->desc_prvcy }}@else @endif</textarea>
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