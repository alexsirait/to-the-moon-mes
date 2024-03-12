<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($views as $a )
            <p><strong>id:</strong> {{$a->id}} </p>
            <p><strong>nama:</strong> {{$a->nama}} </p>
            <p><strong>Quantity:</strong> {{$a->quantity}} </p>
        @endforeach
    </div>
</body>
</html>
