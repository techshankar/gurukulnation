@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

<div class="container p-5">
    <div class="row text-center text-secondary">
        <div class="col-lg-3">
        <div class="card" style="width: 15.5rem;">
        <div class="card-body">
            <h5>Total Job Seekers</h5>
            <p><h3 class="text-info"><strong>{{ $jobSeekerCount }}</strong></h3></p>
            
        </div>
    </div>
        </div>
        <div class="col-lg-3">
        <div class="card" style="width: 15.5rem;">
        <div class="card-body">
            <h5>Total Courses</h5>
            <p><h3 class="text-success"><strong>{{$courseCount}}</strong></h3></p>
            
        </div>
    </div>
        </div>
        <div class="col-lg-3">
        <div class="card" style="width: 15.5rem;">
        <div class="card-body">
            <h5>Contact Queries</h5>
            <p><h3 class="text-danger"><strong>{{$contactsCount}}</strong></h3></p>
            
        </div>
    </div>
        </div>
        <div class="col-lg-3">
        <div class="card" style="width: 15.5rem;">
        <div class="card-body">
            <h5>Total Users</h5>
            <p><h3 class="text-warning"><strong>{{ $usersCount }}</strong></h3></p>
            
        </div>
    </div>
        </div>
    </div>
</div>

@endsection