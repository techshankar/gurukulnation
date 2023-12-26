@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Job Applied List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Job Applied List</h1>
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
                        <h3 class="card-title">Job Applied List</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>Job Title</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Exprience</th>
                                    <th>Mobile</th>
                                    <th>Current Location</th>
                                    <th>Reference</th>
                                    <th>Relocate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($jobappliendlist)==0)
                                <tr>
                                    <td>No data Found</td>
                                </tr>
                                @endif
                                @foreach($jobappliendlist as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->job_title}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->email}}</td>
                                    <td>{{$val->exprience}} Years</td>
                                    <td>{{$val->mobile}}</td>
                                    <td>{{$val->current_location}}</td>
                                    @if($val->referenced_by==6)
                                    <td>Friend</td>
                                    @elseif($val->referenced_by==5)
                                    <td>Affiliate</td>
                                    @elseif($val->referenced_by==4)
                                    <td>Website</td>
                                    @elseif($val->referenced_by==3)
                                    <td>Facebook</td>
                                    @elseif($val->referenced_by==2)
                                    <td>Instagram</td>
                                    @else
                                    <td>Other</td>
                                    @endif
                                    <td>{{$val->ready_to_relocate}}</td>
                                    <td><a href="{{ $val->resume }}" class="btn btn-success" download>Download</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $jobappliendlist->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection