@extends('layout.app')


@section('content')


    @include('components.cartlist.cartList')
    @include('components.include.footer')

    <script>
        (async () => {
            await category()
            await cartList()


            $(".preloader").delay(50).fadeOut(60).addClass('loaded');
        })()
    </script>

@endsection
