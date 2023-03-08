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
</style>


<body>
<p>Angemeldete Personen:</p>
<ul>
@foreach($applications as $application)

    <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>

    @endforeach

</ul>

<small>Anzahl der Personen die nicht kommen: {{$declinedapplications}}</small>

    
</body>
</html>