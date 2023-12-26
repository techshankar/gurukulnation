@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Contact Us')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contact Us</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Contact Us</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.contact.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="@if(!empty($contact->id)){{ $contact->id }}@else @endif">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Info Email</label>
                                            <input type="email" class="form-control" name="info_email" required value="@if(!empty($contact->id)){{ $contact->info_email }}@else @endif">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Support Email</label>
                                            <input type="email" class="form-control" name="support_email" required value="@if(!empty($contact->id)){{ $contact->support_email }}@else @endif">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Address</label>
                                            <textarea name="address" class="form-control">@if(!empty($contact->id)){{ $contact->address }}@else @endif</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-12">
                                            <a href="{{ route('admin.contact') }}" class="btn btn-primary">Back to Contact List</a>
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