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
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }
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
    <form>
        <input type="text" name="id" id="idadd" placeholder="id">
        <input type="text" name="nama" id="nama" placeholder="nama">
        <input type="text" name="quantity" id="quantity" placeholder="quantity">
        <button type="button" id="createbtn">add</button>
    </form>
    <table class="table" id="tabel">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <TBody>
                @foreach ($databarang as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->quantity }}</td>
                        <td>
                            <a href="/view/{{ $barang->id }}" title="view"><button class="btn btn-sm"><i  aria-hidden="true"></i>view</button></a>
                            <a href="/update/{{ $barang->id }}" title="edit"><button class="btn btn-sm" id="editbtn" ><i  aria-hidden="true"></i>edit</button></a>
                            <a title="delete"> <button class="btn btn-sm" id="delbtn" data-id="{{ $barang->id }}">  <i  aria-hidden="true"></i>delete</button></a>
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
            $(document).on('click', '#delbtn', function (e) {
                var id = $(this).data('id');

                    $.ajax({
                        type: "GET",
                        url: "{{ route('delete') }}",
                        data: {id},
                        dataType: "json",
                        success: function (RES) {
                            window.location.reload()
                        }
                    });

                })
        });

        $(document).on('click', '#createbtn', function (e) {
        e.preventDefault()
        var id = $("#idadd").val();
        var nama = $("#nama").val();
        var quantity = $("#quantity").val();
        $.ajax({
                type: "GET",
                url: "{{ route('insert') }}",
                data: {id, nama, quantity},
                dataType: "json",
                success: function (RES) {
                    window.location.href = "http://127.0.0.1:8000/";
                }
            });
    })

    $(document).ready(function () {

/* When click show user */
 $('body').on('click', '#editbtn', function () {
   var userURL = $(this).data('id');
   $.get(userURL, function (data) {
       $('#ajaxModel').modal('show');
       $('#nama').text(nama);
       $('#quantity').text(quantity);
   })
});

});


    </script>
</html>
