@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Faqs List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Faqs List</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-success" style="float:right" href="{{ route('admin.addFaqs')}}">Add Faqs</a>
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
                        <h3 class="card-title">Faqs List</h3>
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
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($faqs)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($faqs as $key=> $val)

                                @php 
                                 $splitQs = str_split($val->question, 15);
                                 $question = $splitQs[0] . "..."; 
                                 
                                 $splitAns = str_split($val->answer, 15);
                                 $answer = $splitAns[0] . "..."; 
                                @endphp
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{!!$question!!}</td>
                                    <td>{!!$answer!!}</td>
                                    <td>
                                        <a class="btn btn-success" title="Edit Faqs" href="{{route('admin.editFaqs', ['id' => $val->id])}}"><i class="nav-icon fas fa-edit"></i></a>
                                        <a class="btn btn-danger" onclick="return alert('Are sure want to delete this?');" title="Delete Faqs" href="{{route('admin.deleteFaqs', ['id' => $val->id])}}"><i class="nav-icon fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $faqs->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection