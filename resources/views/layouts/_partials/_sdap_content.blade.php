<div id="layoutSidenav_content">
    <main>
        @section('messagebag')
            @include('layouts._partials._messagebag')
        @show
        @yield('content')
    </main>
    <footer class="footer mt-auto footer-light">
        @section('footer')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; L&L Stage Service /
                                                Demon {{ \Carbon\Carbon::today()->year }}</div>
                    <div class="col-md-6 text-md-right small">
                        <span>Php {{ phpversion() }}</span>
                        &middot;
                        <span>Laravel {{ app()->version() }}</span>
                        &middot;
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        @show
    </footer>
</div>
