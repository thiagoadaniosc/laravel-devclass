<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.min.css'/>
</head>
<body>
    
    <div class="container">
        <div class="float-right">
            
            @if (Auth::check())
                Olá {{ auth()->user()->name }}, Bem vindo
                <a href="/login/destroy" class="btn btn-danger">Sair</a>
            @else
            Bem Vindo Visitante
            <a href="/login" class="btn btn-danger">Login</a>
            @endif
        </div>
        @yield('portal')
    </div>
</body>
</html>