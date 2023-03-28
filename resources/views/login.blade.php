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

<div class="title">
    <h1>Login</h1>
</div>


<form method="POST" action="/login-user">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required>
    </div>



    <div>
        <input type="submit" value="Anmelden">
    </div>
    <br>
    <br>
    @if(session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
    @endif

</form>