<!DOCTYPE html>
<html lang="en">
    @include('user.layouts.head')
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                @if (Auth::check())
                <form method="POST" action="{{route('user.auth.logout')}}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-primary">Logout</button>
                </form>
                @else
                <a class="btn btn-primary" href="#signup">Sign Up</a>
                @endif
                
            </div>
        </nav>
        @include('user.layouts.header')
        <!-- Icons Grid-->
        @yield('content')
        @include('user.layouts.footer')
        @include('user.layouts.script')
    </body>
</html>
