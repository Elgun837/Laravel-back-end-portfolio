

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin-panel.index')}}">

        <div class="sidebar-brand-text mx-3"> Admin</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::segment(2) =="dashboard") active  @endif">
        <a class="nav-link" href="{{ route('admin-panel.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="about-us") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.about-us')}}">
        <i class="far fa-address-card"></i>
            <span>About us</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="contact-us") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.contact-us')}}">
        <i class="fas fa-phone-square-alt"></i>
            <span>Contact us</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="slide") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.slide.index')}}">
        <i class="far fa-images"></i>
            <span>Sliders</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="services") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.services.index')}}">
        <i class="fas fa-server"></i>
            <span>Services</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="information") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.information')}}">
        <i class="fas fa-question-circle"></i>
            <span>Information</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="team") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.team.index')}}">
        <i class="fas fa-users"></i>
            <span>Team</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->



    <!-- Nav Item - Tables -->
    <li class="nav-item @if(Request::segment(2) =="settings") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.settings')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Settings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
