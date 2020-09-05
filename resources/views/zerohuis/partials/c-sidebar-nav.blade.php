@section('c-sidebar-nav')
    <li class="c-sidebar-nav-title">@lang('OpenZero')</li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('location.index') }}">
            <i class="c-sidebar-nav-icon cil-location-pin"></i>Locations
            <span class="badge badge-primary">{{ \App\Domains\Zerohuis\Models\Location::count() }}</span>
        </a>
    </li>
    <li class="c-sidebar-nav-title">@lang('Admin')</li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="#">
            <i class="c-sidebar-nav-icon cil-settings"></i>Settings
            <span class="badge badge-primary">{{ \Melit\Melbase\Models\Setting::count() }}</span>
        </a>
    </li>
@endsection
