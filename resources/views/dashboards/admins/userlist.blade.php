@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Users List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users List</h1>
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
                        <h3 class="card-title">Users List</h3>
                        <div class="card-tools">
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
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($users as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->phone}}</td>
                                    <td>{{$val->email}}</td>
                                    <td>
                                        <a class="btn btn-danger" onclick="return alert('Are sure want to block this?');" title="Block user" href="{{route('admin.blockUser', ['id' => $val->id])}}"><i class="nav-icon fas fa-user"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection