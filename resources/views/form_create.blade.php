<style>
    form {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="password"],
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 3px;
        background-color: #fff;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    form input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
    }

    form input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    .title {
        display: flex;
        justify-content: center;
    }
</style>


@extends('layouts.master')
@section('title', 'Event erstellen')
@section('content')



<div class="title">
    <h1>Erstellen</h1>
</div>


<form method="POST" action="/form_create">

    @csrf

    <div>
        <label for="date">Datum:</label>
        <input type="text" id="date" name="date" required>
    </div>

    <div>
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="description">Beschreibung:</label>
        <textarea type="text" id="description" name="description" required></textarea>
    </div>

    <div>
        <input type="submit" value="Erstellen">
    </div>
</form>

@endsection