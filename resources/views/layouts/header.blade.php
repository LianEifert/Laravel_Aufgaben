<?php

use Illuminate\Support\Facades\Auth;

?>

<style>
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

    .header .login-button,
    .header .logout-button {
        display: none;
    }

    /* Show login button if user is not logged in */
    <?php if (!Auth::check()) : ?>.header .login-button {
        display: block;
    }

    <?php endif; ?>

    /* Show logout button if user is logged in */
    <?php if (Auth::check()) : ?>.header .logout-button {
        display: block;
    }

    <?php endif; ?>

    /* Button styles */
    .header .login-button a,
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
</style>


<div class="header">
    <a href="/">My Website</a>
    <?php if (!Auth::check()) : ?>
        <div class="login-button">
            <a href="/login">Login</a>
        </div>
    <?php endif; ?>
    <?php if (Auth::check()) : ?>
        <div class="logout-button">
            <a href="/logout">Logout</a>
        </div>
    <?php endif; ?>
</div>