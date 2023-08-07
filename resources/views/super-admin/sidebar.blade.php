<li class="sidebar-item {{ request()->is('superadmin/dashboard') ? 'active' : '' }}">
    <a class="sidebar-link" href=" {{ route('superadmin.dashboard') }}  ">
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
    </a>
</li>

<li class="sidebar-item {{ request()->is('superadmin/admin') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('superadmin.admin') }}">
        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Admin</span>
    </a>
</li>
