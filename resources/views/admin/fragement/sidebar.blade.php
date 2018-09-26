<nav>
    @yield('sidebar')
</nav>
<div id="wrapper">

        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Setting Type</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Setting Item</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Promotion</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Product</span>
                </a>
            </li>
            @if(Auth::user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User management</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Static Page</span>
                </a>
            </li>
        </ul>
        <div id="content-wrapper">
        

<section>
    @yield('content1')
</section>
