@section('messagebag','')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-filter">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                </div>
                <span>@yield('page-header-title','section page-header-title')</span>
            </h1>
            <div class="page-header-subtitle">@yield('page-header-subtitle','section page-header-subtitle')</div>
        </div>
    </div>
</div>
<div class="container-fluid mt-n15">
    @include('layouts._partials._messagebag')
    @section('page-content')
        <div class="card">
            <div class="card-body">

                <div class="alert alert-info"><h3>enter your content in the 'page-content' section</h3></div>
                {!! file_get_contents('https://loripsum.net/api/5/medium/ol/headers/ol/ul/link/bq/quote/code')  !!}


            </div>
        </div>
    @show
</div>
