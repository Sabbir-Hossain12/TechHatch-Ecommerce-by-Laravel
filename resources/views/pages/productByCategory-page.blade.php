@extends('layout.app')

@section('content')

    @include('components.product.breadcrumb')
    @include('components.product.productsByCategory')


    <script>
        (async () => {
                await category()
                 await  byCategory()

            }
        )()

    </script>

    @include('components.include.footer')
@endsection

