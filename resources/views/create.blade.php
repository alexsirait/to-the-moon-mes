<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- <div class="card" style="margin:20px;">
    <div class="card-header">new data</div>
    </div class="class-body">

    <form action="{{ route('insert') }}" method="post">
        {!! csrf_field() !!}
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>hp</label></br>
        <input type="text" name="hp" id="hp" class="form-control"></br>
        <label>id</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form> --}}

       <form action="{{ route('insert') }}">
        <input type="text" name="namamu">
        <input type="text" name="hpmu">
        <input type="text" name="idmu">
        <button>123</button>
    </form>

    <div class="alexxx"></div>
</body>
</html>
