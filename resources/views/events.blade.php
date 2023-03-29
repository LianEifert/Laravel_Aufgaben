

<style>
    body {
        margin: auto;
        background-color: #f5f5f5;
    
    }

    p {
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 10px;
        padding: 10px;
    }

    ul {
        display: flex;
        max-width: 800px;
        list-style: none;
        margin: 0;
        padding: 0;
        flex-direction: column;
    justify-content: center;
    }

    li {
        font-size: 16px;
        line-height: 1.4;
        padding: 10px;
        margin: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        margin-bottom: 10px;
    }

    small {
        font-size: 12px;
        color: #999;
    }
</style>


<body>

@extends('layouts.master')
@section('title', 'Events')
@section('content')

<br>
    <p>Events:</p>
    <ul>
        @foreach($events as $event)

        <li><a href="/event/{{$event-> id}}">{{ $event -> title }}</a> </li>

        @endforeach

    </ul>



    @endsection







