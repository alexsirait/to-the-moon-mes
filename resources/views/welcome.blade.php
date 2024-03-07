<!DOCTYPE html>
<html lang="en">
<head>
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <section class="cointainer mt-5">
        <div class="card">
            <div class="card=-header">
                user create
            </div>
            <div class="card-body">
                <form action="{{ route('insert') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Namamu</label>
                        <input type="text" name="namamu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>hpmu</label>
                        <input type="text" name="hpmu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>idmu</label>
                        <input type="text" name="idmu" class="form-control">
                    </div>
                    <div>
                         <button type="submit" class="btn btn-primary">tets</button>
                    </div>
                </form>
            </div>
        </div>
    </section> --}}
    <form action="{{ route('insert') }}">
        <input type="text" name="namamu">
        <input type="text" name="hpmu">
        <input type="text" name="idmu">
        <button>123</button>
    </form>

    <div class="alexxx"></div>
</body>
<script>
    $.ajax({
        type: "GET",
        url: "{{route('show')}}",
        dataType: "JSON",
        success: function (response) {
            console.log(response);
            $('.alexxx').(response[0].name);
        }
    });
</script>
</html>
