@extends('admin.layouts.admin')
@section('page', 'Returns')
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
                <strong class="card-title">List of Return Requests</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Order</th>
                        <th>Agent</th>
                        <th>Reason</th>
                        <th>Mark Complete</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($returns as $return)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ $return->order }}</td>
                            <td>{{ DB::table('users')->where('id', $return->user)->first()->name }}</td>
                            <td>{{ $return->reason }}</td>
                            <td><a class="btn btn-success" href="/markReturn/{{ $return->id }}" role="button"></a></td>
                            <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/deleteOrder/{{ $return->id }}" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection