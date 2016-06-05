@extends('layout')

@section('content')

    <h1>Cards!</h1>



    @foreach($cards as $card)

        <p>
            <a href="{{ $card->path() }}">{{ $card->title }}</a>
        </p>
        <!--There are a few ways you can do this, probably the most common and best is calling: "/cards/{ {$cards->id} }" ,
            (not the { { blade syntax } } is modified for commenting purposes)
         but this method is in place to demonstrate how to hyperlink through function in the model   -->

    @endforeach


@stop