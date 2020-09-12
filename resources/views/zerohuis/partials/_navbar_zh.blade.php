@push('navbar-left')
    {{--    <li class="nav-item">--}}
    {{--        <a href="" class="nav-link">--}}
    {{--            <i class="fa fa-location-arrow"></i>--}}
    {{--            Menu--}}
    {{--        </a>--}}
    {{--    </li>--}}
@endpush

@push('navbar-right')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ strtoupper(__('locations')) }}</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach (\App\Domains\Zerohuis\Models\Location::all() as $location_nav)
                <a class="dropdown-item" href="{{ route('location.show',$location_nav) }}">{{ $location_nav->name }}</a>
            @endforeach
        </div>
    </li>
    <span class="navbar-text text-zero-brown d-none d-md-block">|</span>
    <li class="nav-item">
        <a href="https://www.zerohuis.be/realisaties" target="_blank" class="nav-link">
            REALISATIES
        </a>
    </li>
@endpush
