<?php

use Illuminate\Support\Facades\Auth;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<style>
    
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

    .header .login-button,
    .header .logout-button {
        display: none;
    }

    .header .register-button,
    .header .register-button {
        display: none;
    }


    <?php if (!Auth::check()) : ?>.header .login-button {
        display: block;
    }

    <?php endif; ?><?php if (!Auth::check()) : ?>.header .register-button {
        display: block;
    }

    <?php endif; ?><?php if (Auth::check()) : ?>.header .logout-button {
        display: block;
    }

    <?php endif; ?>.header .login-button a,
    .header .logout-button a {

        padding: 5px 10px;
        border: 1px solid #fff;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .header .login-button a:hover,
    .header .logout-button a:hover {
        background-color: #fff;
        color: #333;
    }

    .header .register-button a,
    .header .register-button a {

        padding: 5px 10px;
        border: 1px solid #fff;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .header .register-button a:hover,
    .header .register-button a:hover {
        background-color: #fff;
        color: #333;
    }


    .login-register-container{
        display: flex;
    }

    .register-button{
        padding-left: 10px;
    }
</style>

<body>



    <div class="header">
        <a href="/">Mein Eventportal</a>



        <div class="events">
            <a href="/">Alle Events</a>
        </div>

        @guest

        <div class="login-register-container">
            <div class="login-button">
                <a href="/login">Login</a>
            </div>


            <div class="register-button">
                <a href="/register">Register</a>
            </div>
        </div>




        @endguest



       
        @auth


        <div class="">
            <a href="/form_create">Event erstellen</a>
        </div>

        <div class="logout-button">
            <a href="/logout">Logout</a>
        </div>
        @endauth

    </div>

    @yield('content')





</body>

</html>