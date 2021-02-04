<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("css/style.css")}}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> <span> Dodaj clanak <a class="btn btn-primary" href="{{ url("/logout") }}">LOGOUT</a></span></h1>  
                <div class="form-contact">
                    <form action="{{ route('clanak.store') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <p>
                                <input type="text"  name="naslov" id="naslov" placeholder="Naslov">
                            </p>
                            <p>
                                <textarea name="tekstClanka" rows="4" cols="25" placeholder="Tekst clanka"></textarea>
                            </p>
                            <div class="buttonC">
                                <input type="submit"  name="saljiClanak"  class="btn btn-primary" value="Dodaj">
                            </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('message'))
                                    <h2> {{ session('message') }}</h2>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        <div class="container">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>