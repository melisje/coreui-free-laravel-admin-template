@extends('zerohuis.zerohuis')

@php($container = false)

@section('page-title','Zerohuis | Locations')
@include('zerohuis.partials._navbar_zh')

@section('content')
{{--    @include('zerohuis.partials._covid19')--}}
    @include('zerohuis.partials._pageintro',['text' => __('welcome')])

    @include('zerohuis.location.partials.location-overwiew')

    @include('zerohuis.partials.zh-contact-us')
    @include('zerohuis.partials.zh-footer')

@endsection

