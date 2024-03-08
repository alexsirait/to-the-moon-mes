<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* Table */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    /* Table Header */
    .table th {
        background-color: #f2f2f2;
    }

    /* Table Rows */
    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Buttons */
    .btn {
        padding: 5px 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 3px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .btn i {
        margin-right: 5px;
    }
</style>
<body>
    <div>
        <a href="{{ url('create')}}" class="btn btn-sm">tambah</a>
    </div>
    <select class="form-select rounded-3" id="filterOrang" style="width: 250px;"></select>
    <table class="table" id="tabel">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>lokasi</th>
            </tr>
            <TBody>
                @foreach ($dataorang as $orang)
                    <tr>
                        <td>{{ $orang->id }}</td>
                        <td>{{ $orang->name }}</td>
                        <td>{{ $orang->lokasi }}</td>
                        <td>
                            <a href="/view/{{ $orang->id }}" title="view"><button class="btn btn-sm"><i  aria-hidden="true"></i>view</button></a>
                            <a href="/update/{{ $orang->id }}" title="edit"><button class="btn btn-sm"><i  aria-hidden="true"></i>edit</button></a>
                            <a href="/delete/{{ $orang->id }}" title="delete"><button class="btn btn-sm"><i  aria-hidden="true"></i>delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </TBody>
        </thead>
    </table>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: '{{ route('listOrang') }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    let select = $('#filterOrang');
                    select.empty();
                    select.append('<option value="" selected>Select Orang</option>');
                    $.each(data, function(key, value) {
                        select.append('<option value="' + value.name + '">' + value.name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
</html>
