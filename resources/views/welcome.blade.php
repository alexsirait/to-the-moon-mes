<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ url('create')}}" class="btn btn-sm">tambah</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>jenis</th>
            </tr>
            <TBody>
                @foreach ($datahewan as $hewan)
                    <tr>
                        <td>{{ $hewan->id }}</td>
                        <td>{{ $hewan->nama }}</td>
                        <td>{{ $hewan->jenis }}</td>
                        <td>
                            <a href="/view/{{ $hewan->id }}" title="view"><button class="btn btn-sm"><i  aria-hidden="true"></i>view</button></a>
                            <a href="/update/{{ $hewan->id }}" title="edit"><button class="btn btn-sm"><i  aria-hidden="true"></i>edit</button></a>
                            <a href="/delete/{{ $hewan->id }}" title="delete"><button class="btn btn-sm"><i  aria-hidden="true"></i>delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </TBody>
        </thead>
    </table>
</body>
</html>
