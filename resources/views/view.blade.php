<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* Form */
    form {
        margin-bottom: 20px;
    }

    input[type="text"] {
        width: 200px;
        padding: 5px;
        margin-bottom: 10px;
    }

    button {
        padding: 5px 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Displayed Data */
    p {
        margin-bottom: 5px;
    }
</style>
<body>
    @foreach ($views as $a )
        <p>id: {{$a->id}} </p>
        <p>nama: {{$a->name}} </p>
        <p>lokasi: {{$a->lokasi}} </p>
    @endforeach
</body>
</html>
