<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <title>Painel de Administração</title>
</head>
<body>
    <div class="container">
        <h1>Painel de Administração</h1>
        <h1>Olá Sr. {{$user->name}}  </h1>
        <a href=" {{route('admin.logout')}} " class="">Sair</a>
    </div>
</body>
</html>