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
    <div class="modal fade" id="Modaledit" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">hehe</h5>
                </div>
                <div class="modal-body" id="notif">
                    <form id="editForm">
                        <div class="row mb-2">
                            <input type="hidden" id="idEdit">
                            <div class="">
                                <label for="editid" class="form-label fw-bold"></label>
                                <input type="hidden" name="id" id="idtest" value="{{ $dataupdate->id }}">
                            </div>
                            <div class="">
                                <label for="editname" class="form-label fw-bold"></label>
                                <input type="text" name="nama" id="nama" placeholder="nama" value="{{ $dataupdate->nama }}">
                            </div>
                            <div class="">
                                <label for="editquan" class="form-label fw-bold"></label>
                                <input type="text" name="quantity" id="quantity" placeholder="quantity" value="{{ $dataupdate->quantity }}">
                            </div>
                            <div>
                                <button type="button" id="editbtn">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).on('click', '#editbtn', function (e) {
        e.preventDefault();
        var id = $("#idtest").val();
        var nama = $("#nama").val();
        var quantity = $("#quantity").val();
        $.ajax({
            type: "GET",
            url: "{{ route('edit') }}",
            data: {id, nama, quantity},
            dataType: "json",
            success: function (RES) {
                window.location.href = "http://127.0.0.1:8000/";
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Open Modal Add Role
        $(document).on('click', '.editbton', function (e) {
            e.preventDefault();
            $('#Modaledit').modal('show');

            const id = $(this).data('id');
            const name = $(this).data('name');
            const quan = $(this).data('quan');

            $("#editid").val(id);
            $("#editname").val(name);
            $("#editquan").val(quan);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#editbton").click(function() {
            $("#Modaledit").modal('show');
        });
    });
</script>
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
