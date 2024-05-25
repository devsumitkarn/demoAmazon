@extends('admin.layouts.main')
@section('title', 'User List')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User List</h4>
                <p class="card-description"></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ucfirst($user->name)}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection