@extends('layout.app')

@section('content')

    @include('components.product.productDetails')
    @include('components.home.topBrands')
    @include('components.include.footer')

    <script>
        (async () => {
                await category()
                await productDetails()
                await TopBrands()

            }
        )()

    </script>
@endsection
