@extends('zerohuis.zerohuis')

@php($container = false)

@section('page-title','Zerohuis | ' . $location->name)
@include('zerohuis.partials._navbar_zh')

@section('content')
    @include('zerohuis.partials._covid19')
    @include('zerohuis.partials._pageintro',['text' => __('look inside')])

    @if(!$visited)
        @include('zerohuis.location.partials.contact-tracing')
    @else
        @include('zerohuis.location.partials.location-info')
        @include('zerohuis.location.partials.location-photos')
    @endif

    @include('zerohuis.partials.zh-contact-us')
    @include('zerohuis.partials.zh-footer')

@endsection

