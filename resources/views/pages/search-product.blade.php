@extends('layout.app')

@section('content')

    @include('components.product.search-products')

    @include('components.include.footer')

    <script>
        (async () => {

            await category()
            await searchProductList()

            $(".preloader").delay(50).fadeOut(60).addClass('loaded');


        })()

    </script>
@endsection
