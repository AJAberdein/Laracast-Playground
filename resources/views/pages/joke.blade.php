@extends('layout')

@section('content')

<h1>Joke Page</h1>

<div class="container">
    <div class="content">
        <h1>Joke</h1>
        <p>{{ $joke}}</p>
    </div>
</div>

@stop