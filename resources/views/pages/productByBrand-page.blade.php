@extends('layout.app')

@section('content')

    @include('components.product.breadcrumb')
    @include('components.product.productsByBrand')


    <script>
        (async () => {

                await category()
                await ByBrands()
                $(".preloader").delay(50).fadeOut(60).addClass('loaded');
            }
        )()

    </script>

    @include('components.include.footer')
@endsection

