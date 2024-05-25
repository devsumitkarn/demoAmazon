<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.header')
    <body>
        <div class="container-scroller">
            @include('admin.layouts.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('admin.layouts.sidebar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    <!-- content-wrapper ends -->
                    @include('admin.layouts.footer')
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        @include('admin.layouts.script')
    </body>
</html>
