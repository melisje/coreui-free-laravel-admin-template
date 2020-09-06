<nav class="navbar navbar-expand-md navbar-dark bg-black  shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            @section('brand')
                <img src="{{ asset('assets/brand/zh.png') }}" alt="{{ config('app.name', 'Laravel') }}" height="30">
            @show
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @stack('navbar-left')
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @isset($contact->id)
                    <li class="nav-item">
                        <a href="{{ route('contact.edit',$contact) }}" class="nav-link">
                            <i class="fa fa-group"></i>
                            Edit contact info
                        </a>
                    </li>
                @endisset
                @stack('navbar-right')
            </ul>
        </div>
    </div>
</nav>
