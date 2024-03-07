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
     <section>
        <div class="container">
            <div class="row" style="margin:20px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h2>LARAVEL</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('create')}}" class="btn btn-success btn-sa" title="add new data">
                                add new
                            </a>
                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>nama</th>
                                            <th>hp</th>
                                            <th>id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>alek</td>
                                            <td>0808080</td>
                                            <td>12</td>

                                            <td>
                                                <a href="" title="view"><button class="btn btn-sm"><i  aria-hidden="true"></i>view</button></a>
                                                <a href="" title="edit"><button class="btn btn-sm"><i  aria-hidden="true"></i>edit</button></a>
                                                <a href="" title="delete"><button class="btn btn-sm"><i  aria-hidden="true"></i>delete</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   {{-- <form action="{{ route('insert') }}">
        <input type="text" name="namamu">
        <input type="text" name="hpmu">
        <input type="text" name="idmu">
        <button>123</button>
    </form>

    <div class="alexxx"></div> --}}
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
