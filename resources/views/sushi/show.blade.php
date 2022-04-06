@extends('default')
@section('title')
   {{$sushi->kind}}
@endsection
@section('content')
   @include('sushi.components.sushiCard--show')
@endsection
