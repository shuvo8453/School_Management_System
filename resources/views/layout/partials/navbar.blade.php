<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
                @if (auth()->user()->hasAnyRole('SUPER_ADMIN'))
                    @include('super-admin.navbar')
                @endif
                {{-- @if (auth()->user()->hasAnyRole('ADMIN'))
                    @include('admin.navbar')
                @endif --}}
            </li>
        </ul>
    </div>
</nav>
