@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Add Career')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Career</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Career</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Career</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.saveCareer') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-12 col-form-label">Designation:</label>
                                            <input type="text" class="form-control" placeholder="Enter designation" name="designation">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Job Location:</label>
                                            <input type="text" id="tag-input1" class="form-control" name="job_location" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-12 col-form-label">Qualification:</label>
                                            <input type="text" class="form-control" placeholder="Enter Qualification" name="qualification">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Exprience:</label>
                                            <input type="text" class="form-control" name="exprience" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-12 col-form-label">Overview:</label>
                                            <textarea name="overview" class="form-control" id="editorHomePage"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-12 col-form-label">Roles Responsibilties:</label>
                                            <textarea name="roles_n_responsibilties" class="form-control" id="editorShortDesc"></textarea>
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
// for ck-editor 
ClassicEditor.create(document.querySelector("#editorHomePage")).catch((error) => {
  console.error(error);
});

ClassicEditor.create(document.querySelector("#editorShortDesc")).catch((error) => {
  console.error(error);
});
// for ck-editor
</script>
@endsection