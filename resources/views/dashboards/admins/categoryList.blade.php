@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Package List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Package</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-success" title="Add New Course Category" style="float:right" href="{{ route('admin.addcategory')}}">Add New</a>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Package List</h3>
                        <div class="card-tools">
                            <!-- <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div> -->
                        </div>
                    </div>
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
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>Package Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($category)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($category as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{route('admin.editcategory', ['id' => $val->id])}}" title="Edit Package"><i class="nav-icon fas fa-edit"></i></a>
                                        <a class="btn btn-danger" title="Delete Package" onclick="return alert('Are you sure want to delete this?');" href="{{route('admin.deletecategory', ['id' => $val->id])}}"><i class="nav-icon fas fa-trash"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $category->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection