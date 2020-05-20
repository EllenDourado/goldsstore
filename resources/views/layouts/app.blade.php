<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golds Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">Golds Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @if(request()->is('/admin/stores')) active @endif">
                        <a class="nav-link" href="{{route('admin.stores.index')}}">Lojas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  @if(request()->is('/admin/products')) active @endif">
                        <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"></li>
                        <a class="nav-link" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>
                        <form action="{{route('logout')}}" class="logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        @endauth
    </nav>

    <div class="conteiner">
        @include('flash::message')
        @yield('content')
    </div>
</body>
</html>