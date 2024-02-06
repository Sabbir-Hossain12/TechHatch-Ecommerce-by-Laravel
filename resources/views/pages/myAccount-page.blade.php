@extends('layout.app')
@section('content')

    @include('components.myAccount.myAccount')
    @include('components.include.footer')

    <script>

        (async () => {

                await category()
                await showProfileInfo()
                await  orderList()

                $(".preloader").delay(50).fadeOut(60).addClass('loaded');
            }


        )()


    </script>

@endsection
