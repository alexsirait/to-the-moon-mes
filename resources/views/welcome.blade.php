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
    <div class="col-sm-12 mt-2 d-flex justify-content-between">
        <div class="d-flex gap-3">
            {{-- Search --}}
            <input id="txSearch" type="text" style="width: 250px;"
            class="form-control rounded-3" placeholder="Search">
        </div>
    </div>
    <form>
        <input type="text" name="id" id="idadd" placeholder="id">
        <input type="text" name="nama" id="nama" placeholder="nama">
        <input type="text" name="quantity" id="quantity" placeholder="quantity">
        <button type="button" id="createbtn">add</button>
    </form>
    <div id="container"></div>
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
    <script>
        const loadSpin =
        `<div class="d-flex justify-content-center align-items-center mt-5">
            <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
        </div> `;

        const show = () => {
            const search = $('#txSearch').val();
            $.ajax({
                url: `{{ route("show") }}`,
                method: 'GET',
                data: {search},
                beforeSend:function(){
                    $('#container').html(loadSpin)
                }
            }).done(res => {
                $('#container').html(res)
                $('#table').DataTable({
                    "ordering": true,
                    "bSort": true,
                    "aaSorting": [],
                    pageLength: 10,
                    "lengthChange": false,
                    responsive: true,
                    language: { search: "" },
                });
            })
        }

        show();
        let delayTimer;
        $('#txSearch').keyup(function(e){
            clearTimeout(delayTimer);
            delayTimer = setTimeout(function() {
                show();
            }, 500);
        });
    </script>
</html>
