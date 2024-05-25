<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>User Login</title>
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-start py-5 px-4 px-sm-5">
                                <h4 class="fw-light">Sing in account</h4>
                                <form class="pt-3" method="post" action="{{route('user.auth.login')}}">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Useremail" value="{{old('email')}}">
                                        @error('email')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-4">
                                        <input type="password" class="form-control form-control-lg" id="Password" name="password" placeholder="Password" value="{{old('password')}}">
                                        @error('password')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3 d-grid gap-2">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
                                    </div>
                                    <div class="text-center mt-4 fw-light">
                                      Don't have an account? <a href="{{route('user.register')}}" class="text-primary">Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>