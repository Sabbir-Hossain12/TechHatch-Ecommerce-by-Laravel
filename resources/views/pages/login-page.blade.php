@extends('layout.app')
@section('content')

    @include('components.auth.Login')
    @include('components.include.footer')

    <script>
        (async () => {
            await category()
            // await TopCategory()


        })()

        $(".preloader").delay(50).fadeOut(60).addClass('loaded');



    </script>

@endsection
