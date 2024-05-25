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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ucfirst($user->name)}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <a href="{{route('admin.users.show',$user->id)}}" class="badge badge-warning">Show</a>
                                        </div>

                                        <div class="col-3">
                                            <a href="{{route('admin.users.edit',$user->id)}}" class="badge badge-primary">Update</a>
                                        </div>

                                        <div class="col-3">
                                            <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="badge badge-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection