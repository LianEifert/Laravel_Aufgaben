<style>
    body {

        margin: auto;
        padding: 20px;
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
    }

    p {
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 10px;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
        max-width: 800px;
    }

    li {
        font-size: 16px;
        line-height: 1.4;
        padding: 10px;
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
    @section('title', 'Anmeldungen')
    @section('content')


    <br>

    <p>Angemeldete Personen:</p>
    <ul>
        @foreach($applications as $application)

        <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>

        @endforeach

    </ul>

    <small>Anzahl der Personen die nicht kommen: {{$declinedApplications}}</small>

    @endsection