<nav class="navbar navbar-expand-md navbar-dark bg-black  shadow-sm">
    <div class="container">
        <a class="navbar-brand pt-2" href="{{ url('/') }}">
            @section('brand')
                <img src="{{ asset('assets/img/zerohuis/zerohuis_logo_invers.svg') }}" alt="{{ config('app.name', 'Laravel') }}" class="img-fluid d-none d-sm-block ">
                <img src="{{ asset('assets/img/zerohuis/zh.svg') }}" alt="{{ config('app.name', 'Laravel') }}" class="img-fluid d-sm-none">
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
                @stack('navbar-right')
            </ul>
        </div>
    </div>
</nav>
