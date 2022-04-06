@extends('default')

@section('title')
    {{"All Sushi"}}
@endsection

@section('content')
@include('sushi.components.checkbox--index')
<ul class="u-grid-12 u-grid-gap-3">
    @foreach($sushi as $sushi)
        @include('sushi.components.sushiCard--index')
    @endforeach
</ul>
@endsection
