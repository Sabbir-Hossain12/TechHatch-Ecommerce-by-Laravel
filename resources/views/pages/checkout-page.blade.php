@extends('layout.app')
@section('content')

    @include('components.checkout.checkout')
    @include('components.include.footer')

    <script>




        (async () => {

            await category()
            await showProfileOnCheckout()
            await cartListOnCheckout()
            $(".preloader").delay(50).fadeOut(60).addClass('loaded');


        })()

    </script>

@endsection
