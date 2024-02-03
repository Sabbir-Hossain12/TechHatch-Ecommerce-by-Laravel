@extends('layout.app')


@section('content')

    @include('components.wishlist.breadcrumb')
    @include('components.wishlist.wishlist')
    @include('components.include.footer')

    <script>
        (async () => {
            await category()
            await wishList()

            $(".preloader").delay(50).fadeOut(60).addClass('loaded');
        })()
    </script>

@endsection
