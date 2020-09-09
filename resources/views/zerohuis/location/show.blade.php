@extends('zerohuis.zerohuis')

@php($container = false)

@section('page-title','Zerohuis | ' . $location->name)
@include('zerohuis.partials._navbar_zh')

@section('content')
    @include('zerohuis.partials._covid19')
    @include('zerohuis.partials._pageintro',['text' => __('look inside')])

    @include('zerohuis.location.partials.location-info')
    @include('zerohuis.location.partials.location-photos')

    @include('zerohuis.partials.zh-contact-us')
    @include('zerohuis.partials.zh-footer')
@endsection

