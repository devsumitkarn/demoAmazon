<!-- partial:../../partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex justify-content-center">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
      <a class="navbar-brand brand-logo" href=""><img src="{{ url('/assets/images/logo.svg') }}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href=""><img src="{{ url('/assets/images/logo-mini.svg') }}" alt="logo"/></a>
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div> 
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <ul class="navbar-nav me-lg-2">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="{{('/admin/assets/images/faces/face5.jpg') }}" alt="profile"/>
          <span class="nav-profile-name">{{auth()->user()->name}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="typcn typcn-cog-outline text-primary"></i>
            Settings
          </a>
          <a class="dropdown-item">
            <i class="typcn typcn-eject text-primary"></i>
            <form action="{{route('admin.auth.logout')}}" method="post">
              @csrf
              <button type="submit" class="btn btn-sm">Logout</button>
            </form>
          </a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-date dropdown">
        <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
          <h6 class="date mb-0">Today : Mar 23</h6>
          <i class="typcn typcn-calendar"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
</nav>
<!-- partial -->