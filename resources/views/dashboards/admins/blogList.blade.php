@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Blog List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blog List</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-success" style="float:right" href="{{ route('admin.addBlog')}}">Add Blog</a>
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
                        <h3 class="card-title">Blog List</h3>
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
                                    <th>Blog Name</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($blogs)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($blogs as $key=> $val)

                                @php $split = str_split($val->title, 8);
                                 $final = $split[0] . "..."; 
                                @endphp
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$final}}</td>
                                    <td>{{$val->name}}</td>
                                    <td> <img src="{{$val->image}}" alt="" style="height:80px;"></td>
                                    <td>
                                        <a class="btn btn-success" title="Edit Blog" href="{{route('admin.editBlog', ['id' => $val->id])}}"><i class="nav-icon fas fa-edit"></i></a>
                                        <a class="btn btn-danger" onclick="return alert('Are sure want to delete this?');" title="Delete Blog" href="{{route('admin.deleteBlog', ['id' => $val->id])}}"><i class="nav-icon fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $blogs->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection