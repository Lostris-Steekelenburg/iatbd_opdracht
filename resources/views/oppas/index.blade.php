@extends('default')

@section('title')
    {{'Oppassen'}}
@endsection

@section('content')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($oppas as $oppas)
            @include('oppas.components.oppas--index')
        @endforeach
    </ul>
@endsection