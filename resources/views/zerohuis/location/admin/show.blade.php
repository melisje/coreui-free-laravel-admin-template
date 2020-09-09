@extends('zerohuis.admin')

@section('c-sidebar-brand-full',asset('assets/brand/zerohuis_logo_invers.svg'))

@section('content')

    <div class="container">
        <div class="fade-in">

            <div class="text-center">
            <h1>{{ $location->name }}</h1>

            <div class="row">
                <div class="col text-center">

                    <figure class="figure">
                        <img src="{{ route('admin.location.qrcode',$location) }}" alt="{{ $location->name }}" class="img-fluid">
                        <figcaption class="figure-caption"><a href="{{ $url }}" target="_blank" class="text-black">{{ $url }}</a></figcaption>
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.location.qrcode',$location) }}" class="btn btn-secondary btn-lg" target="_blank"><i
                            class="cil-print"></i> @lang('Print QR Code')</a>
                </div>
            </div>
            </div>





            <div>

            </div>

        </div>
    </div>
@endsection
