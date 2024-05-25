<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.header')
    @section('title')
      Admin  Login 
    @endsection
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-start py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="{{ url('/assets/images/logo-dark.svg') }}" alt="logo">
                                </div>
                                <h6 class="fw-light">Sign in to continue.</h6>
                                <form class="pt-3" method="post" action="{{route('admin.auth.login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Useremail" value="{{old('email')}}">
                                        @error('email')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="Password" name="password" placeholder="Password" value="{{old('password')}}">
                                        @error('password')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3 d-grid gap-2">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                            </label>
                                        </div>
                                        <a href="#" class="auth-link text-black">Forgot password?</a>
                                    </div>
                                    <div class="text-center mt-4 fw-light">
                                        Don't have an account? <a href="#" class="text-primary">Create</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.script')
    </body>
</html>

