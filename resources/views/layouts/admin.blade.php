<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intergrami</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('admin') }}">
                      Intergrami
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sistema <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('adminRoles') }}">Roles</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('adminUsers') }}">Usuarios</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Tareas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('adminCountries') }}">Países</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminCities') }}">Estados</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminDistricts') }}">Ciudades</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminAddresses') }}">Direcciones</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminTypes') }}">Secciones</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminCategories') }}">Categorias</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mercado <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('adminShops') }}">Shops</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminShopImages') }}">ShopImages</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Shop Assignments</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminProducts') }}">Productos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('adminOrders') }}">Ordenes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('adminContacts') }}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contacto </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registro</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
