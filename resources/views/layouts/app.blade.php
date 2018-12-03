<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intergrami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
    body
{
  padding:0;margin:0;
}
a {
    color: #6195FF;
    text-decoration: none;
    -webkit-transition: 0.2s opacity;
    transition: 0.2s opacity;
}
a:hover, a:focus {
    text-decoration: none;
    outline: none;
    opacity: 0.8;
    color: #6195FF;
}
#footer {
    position: relative;
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #0F111A
}

.footer-logo {
    text-align: center;
    margin-bottom: 40px;
}

.footer-logo>a>img {
    max-height: 80px;
}
.footer-follow {
    text-align: center;
    margin-bottom: 20px;
}
.footer-follow li {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 13px;
}

.footer-follow li a {
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 3px;
  background-color: #337AB7;
  color:#FFF;
}

.footer-copyright p {
    text-align: center;
    font-size: 14px;
    text-transform: uppercase;
    margin: 0;
  color:#868F9B;
}


    </style>

</head>
<body class="app">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top m-x-auto">
            <div class="container" >
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Intergrami
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-seach">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('cartShow') }}"><span class="badge pull-right">{{ Cart::count() }}</span>
                        <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('usersDetail', 
                                        ['id' => Auth::user()->id]) }}">Administrar mi cuenta</a>
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
                        <li><a href="{{ route('registerShopCreate') }}"><button class="btn btn-danger btn-xs">Shop Register</button></a></li>
                    </ul>
                </div>
            </div>
            @if (!empty($types))
                <div class="bg-primary">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                @foreach ($types as $type)
                                    <li class="dropdown">
                                        <a href="{{ route('showProductByType', ['id' => $type->id] ) }}" style="color: white">{{ $type->name }}</a>
                                        <ul class="nav nav-pills nav-stacked">
                                            @foreach ($type->categories as $category)
                                                <li><a href="{{ route('showProductByCategory', ['id' => $category->id] ) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        </nav>
    </header>

    @yield('content')

<br>
    <footer id="footer">
  <div class="container">
    <!-- Row -->
			<div class="row">
        <div class="col-md-12">
           <!-- footer logo -->
					<div class="text-center">
                    <h4>Siguenos en nuestras redes sociales</h4>
					</div>
					<!-- /footer logo -->
					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->
					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>EL CAMPO SON LOS PIES QUE SOSTIENEN LA NACIÓN, NUESTRA NACIÓN</p>
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
