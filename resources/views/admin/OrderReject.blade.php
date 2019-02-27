@extends('admin.layouts.admin')
@section('page', 'Completed')
@section('content')
    @if(session('update'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('update') }}</strong>
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('delete') }}</strong>
        </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Orders</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Order</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Customer</th>
                        <th>Agent</th>
                        <th>Address</th>
                        <th>Price</th>
                        <th>Mark Complete</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ $order->order }}</td>
                            <td>{{ DB::table('products')->where('id', $order->product)->first()->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ DB::table('customers')->where('id', $order->customer)->first()->name }}</td>
                            <td>{{ DB::table('users')->where('id', $order->user)->first()->name }}</td>
                            <td>{{ DB::table('customers')->where('id', $order->customer)->first()->address }}</td>
                            <td>{{ DB::table('products')->where('id', $order->product)->first()->price }}</td>
                            <td><a class="btn btn-success" href="/mark/{{ $order->id }}" role="button"></a></td>
                            <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/deleteOrder/{{ $order->id }}" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection