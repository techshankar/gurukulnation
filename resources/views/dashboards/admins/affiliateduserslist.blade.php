@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Affiliated Users List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Affiliated Users List</h1>
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
                        <h3 class="card-title">Affiliated Users List</h3>
                        <div class="card-tools">
                            <a href="{{URL::to('admin/users/list')}}" class="btn btn-info">Back To Users List</a>
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
                                    <th>My Refferel Code</th>
                                    <th>Reffered By Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($affiliatedusers)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($affiliatedusers as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->phone}}</td>
                                    <td>{{$val->email}}</td>
                                    <td><a href="{{ URL::to('admin/affiliated-users-list',$val->my_refere_code) }}">{{$val->my_refere_code}}</a></td>
                                    <td>{{$val->referred_by_code}}</td>
                                    <td>
                                        <a class="btn btn-danger" onclick="return alert('Are sure want to block this?');" title="Block user" href="{{route('admin.blockUser', ['id' => $val->id])}}"><i class="nav-icon fas fa-user"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $affiliatedusers->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection