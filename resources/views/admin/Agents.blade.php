@extends('admin.layouts.admin')
@section('page', 'Agents')
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
                <strong class="card-title">List of Agents</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Referral</th>
                        <th>Verification</th>
                        <th>Birth</th>
                        <th>DP</th>
                        <th>Joined on</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($agents as $agent)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ $agent->name }}</td>
                            <td>{{ $agent->email }}</td>
                            <td>{{ $agent->phone }}</td>
                            <td>{{ $agent->referral_number }}</td>
                            <td><a href="{{ Storage::url($agent->verification_id) }}">Click Here</a> </td>
                            <td>{{ $agent->birth }}</td>
                            <td><img src="{{ Storage::url($agent->dp) }}" height="40px" width="50px"></td>
                            <td>{{ $agent->created_at }}</td>
                            <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/admin/deleteAgent/{{ $agent->id }}" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection