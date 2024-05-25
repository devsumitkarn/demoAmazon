@extends('admin.layouts.main')
@section('title', 'User Update')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Create</h4>
                <p class="card-description"></p>
                <form class="form-sample" method="post" action="{{route('admin.users.update', $user->id)}}" onsubmit="confirmUpdate(this,event)">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group" >
                        <label for="name">Name*</label> 
                        <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" placeholder="Enter Name">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email*</label> 
                        <input type="email" class="form-control" id="email" value="{{$user->email}}" name="email" placeholder="Enter Email">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection