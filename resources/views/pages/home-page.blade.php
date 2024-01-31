@extends('layout.app')

@section('content')


    @include('components.home.banner')
    @include('components.home.TopCategories')
    @include('components.home.exclusive')
    @include('components.home.smallBanner')
    @include('components.home.trending')
    @include('components.home.brandLogo')
    @include('components.include.footer')

    <script>
        (async () => {
            await banner()
            await category()
            await TopCategory()
            $(".preloader").delay(50).fadeOut(60).addClass('loaded');

            await productByRemark('arrival', 'arrivalItem')
            await productByRemark('sellers', 'sellersItem')
            await productByRemark('featured', 'featuredItem')
            await productByRemark('special', 'SpecialItem')


        })()

    </script>
@endsection
