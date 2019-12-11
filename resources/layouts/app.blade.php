<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <title>Blog Post  - Start Bootstrap Template</title>

	  <!-- Bootstrap core CSS -->
	  <link href="/css/bootstrap.min.css" rel="stylesheet">

	  <!-- Custom styles for this template -->
	  <link href="/css/blog-post.css'" rel="stylesheet">
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Gestion Proyectos
            </div>
            <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
                <a class="navbar-brand" href="{{route('Emp')}}">
                    <img src="{{asset('assets/img/logo.png')}}" alt="Logo" style="width:50px;">

                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('Emp')}}">Empleados</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('proyectos.index')}}">Proyectos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('Dep')}}">Departamentos</a>
                    </li>
                </ul>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
