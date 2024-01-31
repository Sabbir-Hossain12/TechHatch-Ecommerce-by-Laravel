@extends('layout.app')

@section('content')

    @include('components.product.productDetails')
    @include('components.home.topBrands')
    @include('components.include.footer')

    <script>
        (async () => {
            await category()
                await TopBrands()

            }
        )()

    </script>
@endsection
