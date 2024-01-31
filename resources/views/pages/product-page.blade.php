@extends('layout.app')

@section('content')

    @include('components.product.breadcrumb')
    @include('components.product.shop')
    @include('components.include.footer')

    <script>
        (async () => {

                await category()
              await ByCategory()
            }
        )()

    </script>
@endsection

