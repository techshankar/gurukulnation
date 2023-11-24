@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Sub Categories List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sub Categories List</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-success" style="float:right" href="{{ route('admin.addSubCategory')}}">Add Sub Categories</a>
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
                        <h3 class="card-title">Sub Categories List</h3>
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

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>Sub Category Name</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <!-- <th>Status</th>
                                    <th>Reason</th> -->
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
                                    <td>{{$val->sub_cat_name}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>
                                        @if($val->status == 1)
                                        <a class="btn btn-success" href="">Active</a>
                                        @else
                                        <a class="btn btn-danger" href="">In-Active</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{route('admin.editSubCategory', ['id' => $val->id])}}">Edit</a>

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