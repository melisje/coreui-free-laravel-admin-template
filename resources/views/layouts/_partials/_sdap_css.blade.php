{{--Load here the CSS files that are needed on every page--}}
<link href="{{ mix('css/sbadmin.css') }}" rel="stylesheet"/>

{{--Add some room for extra, page specific css files--}}
@stack('css')
