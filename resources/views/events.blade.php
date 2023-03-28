<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        max-width: 800px;
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


    /* Header */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
    }

    .header a {
        text-decoration: none;
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    .header .login-button {
        display: none;
    }

    /* Show login button if user is not logged in */
    <?php

    use Illuminate\Support\Facades\Auth;

    if (!Auth::check()) : ?>.header .login-button {
        display: block;
    }

    <?php endif; ?>

    /* Login button style */
    .header .login-button a {
        padding: 5px 10px;
        border: 1px solid #fff;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .header .login-button a:hover {
        background-color: #fff;
        color: #333;
    }
</style>


<body>

    <div class="header">
        <a href="/">My Website</a>
        <div class="login-button">
            <a href="/login">Login</a>
        </div>
    </div>


    <p>Events:</p>
    <ul>
        @foreach($events as $event)

        <li><a href="/event/{{$event-> id}}">{{ $event -> title }}</a> </li>

        @endforeach

    </ul>




</body>

</html>