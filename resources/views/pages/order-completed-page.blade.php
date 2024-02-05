@extends('layout.app')
@section('content')

    @include('components.orderCompleted.order-completed')
    @include('components.include.footer')

    <script>




        (async () => {

            await category()

            $(".preloader").delay(50).fadeOut(60).addClass('loaded');


        })()

    </script>

@endsection
