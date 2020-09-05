@extends('zerohuis.admin')

@section('c-sidebar-brand-full',asset('assets/brand/zerohuis_logo_invers.svg'))

@section('content')

    <div class="container">
        <div class="fade-in">

            <h1>{{ $location->name }}</h1>


            <a href="{{ route('admin.location.qrcode',$location) }}" class="btn btn-primary" target="_blank"><i class="cil-print"></i></a>

            <img src="{{ route('admin.location.qrcode',$location) }}" alt="{{ $location->name }}">

        </div>
    </div>
@endsection
