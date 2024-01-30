@extends('layout.app')

@section('content')

    @include('components.home.header')
    @include('components.home.banner')
    @include('components.home.TopCategories')
    @include('components.home.exclusive')
    @include('components.home.smallBanner')
    @include('components.home.trending')
    @include('components.home.brandLogo')
    @include('components.home.footer')

    <script>
        (async () => {
            await banner()
            await category()
            await TopCategory()
            await productByRemark('arrival', 'arrivalItem')
            await productByRemark('sellers', 'sellersItem')
            await productByRemark('featured', 'featuredItem')
            await productByRemark('special', 'SpecialItem')


        })()

    </script>
@endsection
