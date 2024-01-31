@extends('layout.app')

@section('content')

    @include('components.product.breadcrumb')
    @include('components.product.productsByBrand')


    <script>
        (async () => {

                await category()
                await ByBrands()

            }
        )()

    </script>

    @include('components.include.footer')
@endsection

