@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Banner List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Banner Lists</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-success" style="float:right" href="{{ route('admin.banners')}}">Add Banners</a>
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
                        <h3 class="card-title">Banner Lists</h3>
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
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>Banner Image</th>
                                    <th>Banner Title</th>
                                    <!-- <th>Banner Content</th> -->
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($banners)==0)
                                <tr>
                                    <td>No data Found</td>
                                </tr>
                                @endif
                                @foreach($banners as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{$val->banner}}" alt="" style="height:150px;"></td>
                                    <td>{{ $val->title }}</td>
                                    <!-- <td>{{ $val->content }}</td> -->
                                    <td>
                                        @if($val->status == 1)
                                        <a class="btn btn-success" href="">Active</a>
                                        @else
                                        <a class="btn btn-danger" href="">In-Active</a>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <a class="btn btn-success" href="{{route('admin.banner_edit', ['id' => $val->id])}}">Edit</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $banners->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection