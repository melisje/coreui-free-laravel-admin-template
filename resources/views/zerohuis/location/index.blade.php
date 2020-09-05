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
                        <th>id</th>
                        <th>name</th>
                        <th>street/th>
                        <th>zipcode</th>
                        <th>location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $locations as $location)
                        <tr>
                            <td>
                                <a href="{{ route('location.show',$location) }}" class="text-dark"><i class="cil-qr-code"></i></a>
                            </td>
                            <td>{{ $location->id }}</td>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->street }}</td>
                            <td>{{ $location->zipcode }}</td>
                            <td>{{ $location->location }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
