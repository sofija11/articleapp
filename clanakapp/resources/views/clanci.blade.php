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
                <div class="col-lg-9">
                    <h1 id="clanci"> CLANCI </h1> <span>   <a class="btn btn-primary" href="{{ url("/exportuj") }}">EXPORT CSV</a></span>
                    @foreach ($clanci as $clanak)
                        <h2 class="">{{ $clanak->naslov}}</h2>
                        <p>{{ $clanak->tekst}}</p>
                        AUTOR : <span>{{ $clanak->korisnickoIme}}   </span> DATUM : <span>{{ $clanak->datumObjave}}</span><hr/>
                    @endforeach
                </div>
                <div class="col-lg-3">
                <h1>Ulogujte se  </h1>
                <div class="form-contact">
                    <form action="{{ url('login')}}" method="POST" >
                        @csrf
                        <div class="row">
                            <p>
                                <input type="text"  name="usernameL" id="userL" placeholder="Vas username">
                            </p>
                            <p>
                                <input type="password"  name="passwordL" id="passL" placeholder="Vasa sifra">
                            </p>
                            <div class="buttonC">
                                <input type="submit" id="sendLogin"  name="sendL"  class="btn btn-primary" value="LOGIN">
                              
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