<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>


        <style>
            .page-holder {
                min-height: 110vh;
            }

            .bg-cover {
            background-size: cover !important;
            }
            
            .login {
                background-image: url('{{asset("/img/landing.png")}}');
                background-size: cover;
                font-family: 'Ubuntu', sans-serif;
                height: 100%; 
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="login page-holder bg-cover">
                <nav class="navbar navbar-light bg-light navbar-expand-lg" style="background :none !important ">
                    <ul class="navbar-nav px-3 justify-content-end ml-auto">
                        <li class="nav-item">
                            <button style="background-color: #3F3D56 !important; border-style: none !important; color:white !important; border-radius: 50px; padding-left: 20px; padding-right: 20px; padding-top: 3px; padding-bottom: 3px; margin-right: 7px; margin-top: 10px"> <a href="{{ route('register') }}" style="color: white !important" class="nav-link"><b>Register</b></a></button>
                        </li>
                        <li class="nav-item">
                            <button style="background-color: white !important; border-style: none !important; color:#3F3D56 !important; border-radius: 50px; padding-left: 20px; padding-right: 20px; padding-top: 3px; padding-bottom: 3px; margin-top: 10px"> <a href="{{ route('login') }}" style="color: #3F3D56 !important" class="nav-link"><b>Login</b></a> </button>
                        </li>
                    </ul>
                </nav>
                <div class="jumbotron d-flex align-items-center " style="background :none !important ">
                        <div class="container-fluid float-left col-12 h-100 pt-5 mt-5 mx-5 px-5">
                            <div class="row align-items-center">
                                <h1 class="text-left" style="font-size: 4vw"> <b>Manage all your <br> Todos with <br> ease</b></h1>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <button type="button" class="btn btn-primary" style="font-size: 2vw; background-color: #FF9985 !important; border-style: none !important; color:black !important; border-radius: 50px; padding-left: 50px; padding-right: 50px; padding-top: 10px; padding-bottom: 10px">
                                    <a href="{{ route('register') }}" style="color: black !important" class="nav-link"><b>Get Started</b> <i data-feather="chevron-right" style="width: 50px; height: 50px"></i></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        feather.replace()
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    </body>
</html>