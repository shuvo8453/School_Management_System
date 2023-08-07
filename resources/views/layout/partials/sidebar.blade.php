<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            @if (auth()->user()->hasAnyRole('SUPER_ADMIN'))
                @include('super-admin.sidebar')
            @endif
            {{-- @if (auth()->user()->hasAnyRole('ADMIN'))
                @include('admin.sidebar')
            @endif --}}
        </ul>
    </div>
</nav>
