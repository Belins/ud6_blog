<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <title>UD6</title>

	  <!-- Bootstrap core CSS -->
	  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


</head>
<body>
    <div class="flex-center">
        <div class="content">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand" href="">
                    <img src="{{asset('assets/img/foto.png')}}" alt="Logo" style="width:50px;">

                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="">David Belinchon</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('posts.index') }}">{{ __('Posts') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                <!--<ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('login')}}">Login</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('register')}}">Registro</a>
                    </li>
                </ul>-->

            </nav>
            <hr><br><br>
            <div style="width: 95%" class="op" >
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="py-5 bg-dark">
	    <div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Desarrollo web en entorno 			servidor 2020</p>
	    </div>
	    <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
