@extends('admin.layouts.admin')
@section('page', 'Products')
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
                <strong class="card-title">List of Products</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Company</th>
                        <th>Price</th>
                        <th>Mark Complete</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->description }}</td>
                            <td>{{ DB::table('categories')->where('id', $order->category)->first()->category }}</td>
                            <td>{{ DB::table('companies')->where('id', $order->company)->first()->company }}</td>
                            <td>{{ $order->price }}</td>
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