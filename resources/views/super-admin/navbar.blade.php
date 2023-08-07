<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
    <i class="align-middle" data-feather="settings"></i>
</a>

<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
    <img src="{{ asset('admin/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
</a>

<div class="dropdown-menu dropdown-menu-end">
    <a class="dropdown-item" href="{{ route('superadmin.profile') }}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
    <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings</a>
    <div class="dropdown-divider"></div>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="dropdown-item" type="submit">Log out</button>
    </form>
</div>
