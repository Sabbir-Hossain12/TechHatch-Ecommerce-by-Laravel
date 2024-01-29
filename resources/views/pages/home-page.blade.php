@extends('layout.app')

@section('content')

    @include('components.home.header')
    @include('components.home.banner')
    @include('components.home.TopCategories')
    @include('components.home.exclusive')
    @include('components.home.smallBanner')
    @include('components.home.trending')
    @include('components.home.brandLogo')
    @include('components.home.footer')
@endsection
