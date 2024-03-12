<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

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
    </style>
<body>
    <form>
        <input type="hidden" name="id" id="idtest" value="{{ $dataupdate }}">
        <input type="text" name="name" id="namamuuu">
        <input type="text" name="lokasi" id="lokasimuuu">
        <button type="button" id="updatebtn">submit</button>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

            $(document).on('click', '#updatebtn', function (e) {
                e.preventDefault()
                var id = $("#idtest").val();
                var namamuuu = $("#namamuuu").val();
                var lokasimuuu = $("#lokasimuuu").val();
                alert(id)
                $.ajax({
                        type: "GET",
                        url: "{{ route('edit') }}",
                        data: {id, namamuuu, lokasimuuu},
                        dataType: "json",
                        success: function (RES) {
                            alert('seeep');
                            window.location.href = "http://127.0.0.1:8000/";
                        }
                    });
            })
</script>
</html>
