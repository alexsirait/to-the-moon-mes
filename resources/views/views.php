<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/view/{{ $idasd }}">
        <input type="hidden" name="id" value="{{ $idasd }}">
        <input type="text" name="namamu">
        <input type="text" name="hpmu">
        <button>Submit</button>
    </form>
</body>
</html>
