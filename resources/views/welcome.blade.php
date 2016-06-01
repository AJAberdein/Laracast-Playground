@extends('layout')

@section(header)
    <!--Code for header section-->
@stop



@section('content')

<div class="container">
    <div class="content">

        <h1>Welcome Page</h1>

        @if (empty($pokemon))

            <p>There are no pokemon</p>

        @elseif

            <p>There are pokemon</p>

        @endif

    <!--  ! Not true or !if -->
        @unless (empty($pokemon))

            <p>Yes, There are indeed pokemon!</p>

        @endunless

        @foreach ($pokemon as $pokes)

            <li>{{ $pokes }}</li>

        @endforeach


    </div>

</div>

@stop

@section('footer')
    <!--Not sure this will work, can sections be nested?????-->
    <script>alert('This is the footer for the welcome page only')</script>
    <p>This is the footer...</p>
@stop