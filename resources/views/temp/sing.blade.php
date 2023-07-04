<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body class="navbar-dark" data-base-url="/">
<div class="main-wrapper" id="app">


    <center>
        <div className=" p-5 m:fixed sm:top-0 sm:right-0 m-3 text-center mb-2 bg-light">


            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 text-right p-4">
                    @auth
                    <div class="text-start">
                        <a href="{{ url('/home') }}" class=" text-dark m-2 " style="text-decoration:none">Back Home</a>

                        
                    </div>

                    @else

                    <a href="{{ url('homes') }}" class=" text-dark m-2" style="text-decoration:none">ទំព័រដើម</a>
                    <a href="{{ url('subject') }}" class="text-dark m-2" style="text-decoration:none" >មុខវិជ្ជា</a>
                    <a href="{{ url('about') }}" class=" text-dark m-2" style="text-decoration:none">អំពីយើង</a>
                    <a href="{{ route('login') }}"class="text-dark m-2" style="text-decoration:none">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" text-dark m-2" style="text-decoration:none">Register</a>

                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </center>
    <!-- partial -->

    <div class="page-wrapper">
        <div class="page-content">

            @yield('content')

        </div>

        <!-- partial -->

    </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
