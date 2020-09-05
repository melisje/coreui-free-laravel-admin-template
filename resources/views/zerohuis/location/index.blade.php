@extends('zerohuis.base')

@section('c-sidebar-brand-full',asset('assets/brand/zerohuis_logo_invers.svg'))
@section('c-sidebar-brand-full-alt','Zerohuis logo')

@section('c-sidebar-brand-minimized',asset('assets/brand/zh.svg'))
@section('c-sidebar-brand-minimized-alt','Zerohuis logo')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><i class="cil-qr-code"></i> Id</th>
                        <th><i class="cil-user"></i> Name</th>
                        <th><i class="cil-location-pin"></i> Street</th>
                        <th><i class="cil-location-pin"></i> Zipcode</th>
                        <th><i class="cil-location-pin"></i> Location</th>
                        <th><i class="cil-find-in-page"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $locations as $location)
                        <tr>
                            <td>
                                <a href="{{ route('admin.location.show',$location) }}" class="text-dark"><i
                                        class="cil-print"></i></a>
                            </td>
                            <td>{{ $location->id }}</td>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->street }}</td>
                            <td>{{ $location->zipcode }}</td>
                            <td>{{ $location->location }}</td>
                            <td>
                                <a href="{{ route('location.show',$location) }}" class="text-body" target="_blank">
                                    <i class="cil-find-in-page"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
