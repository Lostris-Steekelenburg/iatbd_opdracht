<script src="/js/checkbox.js" defer></script>
@extends('default')

@section('title')
    {{'Huisdieren'}}
@endsection

@section('content')
@include('huisdier.components.checkbox--index')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($huisdier as $huisdier)
            @include('huisdier.components.huisdier--index')
        @endforeach
    </ul>
@endsection