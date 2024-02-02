@extends('layout.app')

@section('content')

    @include('components.product.breadcrumb')
    @include('components.product.productsByCategory')


    <script>
        (async () => {
                await category()
                await byCategory()
                $(".preloader").delay(50).fadeOut(60).addClass('loaded');
            }
        )()

    </script>

    @include('components.include.footer')
@endsection

