@extends('layout')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>{{ $card -> title}}</h1>


            <ul>

                @foreach($card->notes as $note)

                    <li class="list-group-item">{{ $note->body }}</li>

                @endforeach

            </ul>

            <hr>

            <h3>Add a New Note</h3>

            <form method="POST" action="/cards/{{ $card->id }}/notes">

                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>

                <input type="hidden" value="{{ csrf_token() }}" name=" _token"/>

            </form>


        </div>

    </div>
@stop