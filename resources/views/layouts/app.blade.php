<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dc comics</title>

    @Vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="header-top bg-primary">
            <div class="container-comics">
                <div class="row">
                    <div class="col-12 text-end me-5 fs-11">
                        <span class="text-uppercase text-white me-5">dc power visa®</span>
                        <span class="text-uppercase text-white me-5">additional dc site <i class="fa-solid fa-caret-down"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-comics">
            <div class="row">
                <div class="col-4">
                    <div class="text-center">
                        <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="dc-comics">
                    </div>
                </div>
                <div class="col-8">
                    <ul class="list-unstyled h-100 text-uppercase d-flex align-items-center">
                        <li><a href="">Characters</a></li>
                        <li><a href="{{ route('comics')}}">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Tv</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Collectibles</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Fans</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Shop</a><i class="fa-solid fa-caret-down text-primary"></i></li>
                        <li><input type="search" name="search" placeholder="search" id="search"><i class="fa-solid fa-xl fa-magnifying-glass"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>