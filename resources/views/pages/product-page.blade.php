@extends('layout.app')

@section('content')

@include('components.product.topbar')

<script>
    ( async()=> {

            await category()
        }
     )()

    </script>
@endsection

