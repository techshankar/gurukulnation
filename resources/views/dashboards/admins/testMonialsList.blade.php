@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Testimonials List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Testimonials List</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-success" style="float:right" href="{{ route('admin.addTestmonials')}}">Add Testimonials</a>
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
                        <h3 class="card-title">Testimonials List</h3>
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
                                    <th>Avatar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($testimonials)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($testimonials as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->title}}</td>
                                    <td><img src="{{$val->image}}" alt="" style="height:50px; border-radius:50%;"></td>
                                    <td>
                                        <a class="btn btn-success" title="Edit Testimonials" href="{{route('admin.editTestimonials', ['slug' => $val->slug])}}"><i class="nav-icon fas fa-edit"></i></a>
                                        <a class="btn btn-danger" onclick="return alert('Are sure want to delete this?');" title="Delete Testimonials" href="{{route('admin.deleteTestimonials', ['id' => $val->id])}}"><i class="nav-icon fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $testimonials->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection