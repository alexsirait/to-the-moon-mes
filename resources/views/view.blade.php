<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        p strong {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($views as $a )
            <p><strong>id:</strong> {{$a->id}} </p>
            <p><strong>nama:</strong> {{$a->name}} </p>
            <p><strong>lokasi:</strong> {{$a->lokasi}} </p>
        @endforeach
    </div>
</body>
</html>
