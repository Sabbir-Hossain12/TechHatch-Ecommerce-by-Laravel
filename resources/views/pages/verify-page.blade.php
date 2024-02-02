@extends('layout.app')
@section('content')

    @include('components.auth.Verify')
    @include('components.include.footer')


    <script>   $(".preloader").delay(50).fadeOut(60).addClass('loaded'); </script>
@endsection
