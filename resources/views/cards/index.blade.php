@extends('layout')

@section('content')

    <h1>Cards!</h1>



    @foreach($cards as $card)

        <p>{{ $card->title }}</p>

    @endforeach


@stop