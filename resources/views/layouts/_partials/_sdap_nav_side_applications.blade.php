@section('sidebar.applications')
    <div class="sidenav-menu-heading">Applications</div>
    @foreach(auth()->user()->applications as $application)
        <a class="nav-link" href="{{ route($application->route) }}">
            <div class="nav-link-icon">
                <i data-feather="user"></i>
            </div>
            {{ $application->name }}
        </a>
    @endforeach
@show
