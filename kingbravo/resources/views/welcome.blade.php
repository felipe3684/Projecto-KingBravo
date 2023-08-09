<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KingBravo</title>
    <link rel="shortcut icon" href="{{ asset('/img-app/logo.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="col-md-2 col-sm-3"><a href="{{ url('/') }}"><img src="{{ asset('/img-app/logo.jpg') }}"
                        alt="KingBravo-logo"></a>
            </div>
            <button id="nav-collapse" class="navbar-toggler toogle-md" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-md-10 col-lg-8 col-sm-2 justify-content-around" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Servicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 col-md-4 col-sm-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class=" focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 log-reg">Iniciar sesión
                        &nbsp;</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4log-reg focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 log-reg">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>





    <div
        class="relative sm:flex sm:justify-center sm:items-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    </div>

    <div class="container div-bg-grey ">
        <p>hola</p>
        <p>adios</p>
    </div>

</body>


</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('/js/funciones.js') }}"></script>
