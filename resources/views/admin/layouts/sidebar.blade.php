<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-danger">new</div>
            </a>
        </li>          
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.users.index')}}">User List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.users.create')}}">User Create</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<!-- partial -->