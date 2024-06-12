<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Form.css') }}">
    <title>Главная страница</title>
</head>
<body>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="10" height="1"><use xlink:href="#bootstrap"></use></svg>
        <span class="Logo"><img src="{{asset('/images/Logo.png')}}" width="200" height="70"></span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link active" aria-current="page">Вход</a></li>
        <li class="nav-item"><a href="{{route('found')}}" class="nav-link">Находки</a></li>
        <li class="nav-item"><a href="{{route('lost')}}" class="nav-link">Потеряшки</a></li>
        <li class="nav-item"><a href="/profile" class="nav-link">Ваш аккаунт</a></li>
        <li class="nav-item"><a href="{{route('aboutas')}}" class="nav-link">О нас</a></li>
    </ul>
</header>
@yield('main_content')
<footer class="main-footer">
    <div class="col mb-3">
        <h5>Poteryashka</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Вход</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Находки</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Потеряшки</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">О нас</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
        </ul>
    </div>
</footer>
</body>
</html>
