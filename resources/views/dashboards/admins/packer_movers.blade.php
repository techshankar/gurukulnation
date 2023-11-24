@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Packers Movers Order List')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Packers Movers Order List</h1>
            </div>
            <!-- <div class="col-sm-6">
                <a class="btn btn-success" style="float:right" href="{{ route('admin.addItem')}}">Add Item</a>
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
                        <h3 class="card-title">Packers Movers Order List</h3>
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
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Shifting From</th>
                                    <th>Shifting To</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                    <!-- <th>Status</th>
                                    <th>Reason</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($orderData)==0)
                                <tr>
                                    <td>No data Found</td>

                                </tr>
                                @endif
                                @foreach($orderData as $key=> $val)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->phone}}</td>
                                    <td>{{$val->city}}</td>
                                    <td>{{$val->shifting_from}}</td>
                                    <td>{{$val->shifting_to}}</td>
                                    <td>{{$val->date_slot}}</td>
                                    <td>{{$val->time_slot}}</td>
                                    <td>
                                        @if($val->confirm_status == 1)
                                        <a class="btn btn-success" href="">Enquiry Received</a>
                                        @else
                                        <a class="btn btn-danger" href="">In-Active</a>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-success view_all" data-toggle="modal" data-target="#exampleModal" data-id="{{$val->id}}">Details</button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $orderData->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Item Qty</th>
                        </tr>
                    </thead>
                    <tbody class="popup_items">
                        <tr>
                            <td>Row 1, Cell 1</td>
                            <td>Row 1, Cell 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    $('.view_all').click(function() {
        var id = $(this).data("id")
        $.ajax({
                type: "GET",
                url: "{{url('admin/viewOrderDetails')}}",
                data:{'orderid': id},
                async: false,
                success: function(response) {
                    console.log(response);
                    $('.popup_items').html(response.order);
                    var count = 'Added items(' + response.count + ')';
                    $('.count').html(count);
                },
                error: function() {
                    alert('Error occured');
                }
            });
    })
</script>
@endsection