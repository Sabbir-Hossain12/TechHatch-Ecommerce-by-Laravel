@extends('layout.app')

@section('content')

    @include('components.product.productDetails')
    @include('components.home.topBrands')
    @include('components.include.footer')

    <script>
        (async () => {
                await category()
                await productDetails()


                $(".preloader").delay(50).fadeOut(60).addClass('loaded');


                await TopBrands()

            }
        )()

    </script>
@endsection
