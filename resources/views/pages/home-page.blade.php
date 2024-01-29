@extends('layout.app')

@section('content')

    @include('components.home.header')
    @include('components.home.banner')
    @include('components.home.smallBanner')
    @include('components.home.topCategories')
    @include('components.home.exclusive')
    @include('components.home.trending')

    @include('components.home.footer')
@endsection
