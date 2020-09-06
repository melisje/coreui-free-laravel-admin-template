@if(auth()->user())

    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">{{ __('apps',) }} <span class="caret"></span></a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @foreach(auth()->user()->applications as $application)
                <a class="dropdown-item" href="{{ route($application->route) }}">{{ __($application->id) }}</a>
            @endforeach
        </div>
    </li>


@endif
