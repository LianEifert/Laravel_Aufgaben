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

    a {
        display: inline-block;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border-radius: 3px;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.2s ease;
    }

    a:hover {
        background-color: #3e8e41;
    }

    a:active {
        background-color: #1e461d;
    }

    .link-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>
<div class="title">
    <h1>Anmeldung</h1>
</div>


<form method="POST" action="">
    @csrf
    <div>
        <label for="answer">Dabei?</label>
        <input name="answer" value="yes" id="answer" type="radio"> Ja
        <input name="answer" value="No" id="answer" type="radio">Nein
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="lastname">Name:</label>
        <input type="text" id="lastname" name="lastname" required>
    </div>

    <div>
        <label for="firstname">Vorname:</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>





    <div>
        <input type="submit" value="Anmelden">
    </div>
</form>


<div class="link-container">
    <a href="/form_application/applications">Anmeldungen anzeigen</a>
</div>