@extends('admin.layouts.main')
@section('title', 'User Create')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Create</h4>
                <p class="card-description"></p>
                <form class="form-sample" method="post" action="{{route('admin.users.store')}}">
                    @csrf
                    <div class="form-group" >
                        <label for="name">Name*</label> 
                        <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Name">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email*</label> 
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="Enter Email">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password*</label> 
                        <input type="password" class="form-control" id="password" value="{{old('password')}}" name="password" placeholder="Enter password">
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection