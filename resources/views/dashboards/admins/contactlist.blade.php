@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Contact List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contact List</h1>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Simple Tables</li>
                </ol>
            </div> -->
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contact List</h3>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Query Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($contacts)==0)
                                <tr>
                                <td>No data Found</td>
                                </tr>
                                @endif
                                @foreach($contacts as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->email}}</td>
                                    @php $subscribedDate=strtotime($val->created_at); @endphp
                                    <td>{{date('F-m-Y',$subscribedDate)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $contacts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection