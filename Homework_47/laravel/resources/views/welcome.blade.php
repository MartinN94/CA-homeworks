<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title>BootsApp | Home</title>
    <style>
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
        <a class="navbar-brand" href="{{ url('/home') }}">LOGO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            @if (Route::has('login'))
                    <ul class="nav navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="#">User: <b>{{ Auth::user()->name }}</b></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <div class="header-content mt-5">
                <h2 class="display-2">Welcome Page</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut unde quaerat consequatur?</p>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-white pb-4 fixed-bottom">
        <div class="row p-4">

            <div class="col  text-center">
                Follow us on
                <ul class="list-unstyled list-inline social-icons mt-1">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-facebook-square"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-google"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-twitter-square"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-instagram"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium fa-2x"></i></a></li>
                </ul>
            </div>

        </div>

</body>

</html>