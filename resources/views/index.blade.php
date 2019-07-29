@extends('layouts.main')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
         style="height: 400px; overflow-y: hidden;">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner col-md-12">

            <div class="carousel-item active">
                <a href="/manga/{{$manga->mid}}">
                    <img class="d-block w-100" src="/{{$manga->logo}}" alt="First slide">
                </a>
                <div class="carousel-caption d-none d-md-block text-light">
                    <h4>{{ucfirst($manga->title)}}</h4>
                    <p>{{$manga->description}}</p>
                </div>
            </div>

            <div class="carousel-item">
                <a href="/gallery/{{$gallery->gid}}">
                    <img class="d-block w-100" src="/{{$gallery->logo}}" alt="Second slide">
                </a>
                <div class="carousel-caption d-none d-md-block text-light">
                    <h4>{{ucfirst($gallery->title)}}</h4>
                    <p>{{$gallery->description}}</p>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <article class="my-3">
        <div class="flex mt-0" style="justify-content: left;">

            <div class="category-card">
                <a href="/gallery" class="non-deco">
                    <div class="w-100 btn btn-red text-white">
                        <div class="text-center">
                            Gallery
                        </div>
                    </div>
                </a>
            </div>

            <div class="category-card mb-1">
                <a href="/manga" class="non-deco">
                    <div class="w-100 btn btn-blue text-white">
                        <div class="text-center">
                            Comic
                        </div>
                    </div>
                </a>
            </div>

            <div class="category-card">
                <a href="" class="non-deco">
                    <div class="w-100 btn btn-brown text-white">
                        <div class="text-center">
                            Animation
                        </div>
                    </div>
                </a>
            </div>


            <div class="category-card mb-1">
                <a href="" class="non-deco">
                    <div class="w-100 btn btn-cyan text-white">
                        <div class="text-center">
                            Game
                        </div>
                    </div>
                </a>
            </div>


            <div class="category-card">
                <a href="/info" class="non-deco">
                    <div class="w-100 btn btn-yellow text-white">
                        <div class="text-center">
                            Commission Info
                        </div>
                    </div>
                </a>
            </div>

            <div class="category-card mb-1">
                <a href="/about" class="non-deco">
                    <div class="w-100 btn btn-pink text-white">
                        <div class="text-center">
                            Contact
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </article>
    <div class="text-center">
        Hello. How are you?
    </div>
    <style>
        .carousel-caption {
            top: 275px;
            bottom: auto;
            text-shadow: 0px 0 black, 0 1px black, 1px 0 black, 0 0px black;
        }

        img {
            width: 100%;
            height: auto;
        }


        .flex {
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 10px -2px 0
        }

        .flex .category-card {
            width: 50%;
            padding: 2px;
            height: 64px
        }

        .flex .category-card .btn {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            border-radius: 0
        }

        @media (max-width: 425px) {
            .flex .category-card .btn {
                font-size: 22px
            }
        }

        @media (min-width: 768px) {
            .flex .category-card {
                width: 33.333%
            }
        }

        @media (max-width: 425px) {
            .flex .category-card {
                height: 52px
            }
        }

        .non-deco {
            text-decoration: none;
            color: inherit
        }

        .non-deco:hover {
            text-decoration: none;
            color: inherit
        }

        .non-deco:active, .non-deco:focus {
            text-decoration: none;
            color: inherit
        }

        .btn-pink {
            color: #111;
            background-color: #f17d94;
            border-color: #f17d94
        }

        .btn-pink:hover {
            color: #111;
            background-color: rgba(241, 129, 151, 0.9);
            border-color: rgba(241, 125, 148, 0.8)
        }

        .btn-pink:focus, .btn-pink.focus {
            box-shadow: 0 0 0 3px rgba(241, 125, 148, 0.5)
        }

        .btn-pink.disabled, .btn-pink:disabled {
            background-color: #f17d94;
            border-color: #f17d94
        }

        .btn-pink:active, .btn-pink.active, .show > .btn-pink.dropdown-toggle {
            background-color: rgba(241, 129, 151, 0.9);
            background-image: none;
            border-color: rgba(241, 125, 148, 0.8)
        }

        .btn-yellow {
            color: #111;
            background-color: #f3ce5f;
            border-color: #f3ce5f
        }

        .btn-yellow:hover {
            color: #111;
            background-color: rgba(243, 207, 99, 0.9);
            border-color: rgba(243, 206, 95, 0.8)
        }

        .btn-yellow:focus, .btn-yellow.focus {
            box-shadow: 0 0 0 3px rgba(243, 206, 95, 0.5)
        }

        .btn-yellow.disabled, .btn-yellow:disabled {
            background-color: #f3ce5f;
            border-color: #f3ce5f
        }

        .btn-yellow:active, .btn-yellow.active, .show > .btn-yellow.dropdown-toggle {
            background-color: rgba(243, 207, 99, 0.9);
            background-image: none;
            border-color: rgba(243, 206, 95, 0.8)
        }

        .btn-blue {
            color: #111;
            background-color: #a4c6e0;
            border-color: #a4c6e0
        }

        .btn-blue:hover {
            color: #111;
            background-color: rgba(167, 200, 225, 0.9);
            border-color: rgba(164, 198, 224, 0.8)
        }

        .btn-blue:focus, .btn-blue.focus {
            box-shadow: 0 0 0 3px rgba(164, 198, 224, 0.5)
        }

        .btn-blue.disabled, .btn-blue:disabled {
            background-color: #a4c6e0;
            border-color: #a4c6e0
        }

        .btn-blue:active, .btn-blue.active, .show > .btn-blue.dropdown-toggle {
            background-color: rgba(167, 200, 225, 0.9);
            background-image: none;
            border-color: rgba(164, 198, 224, 0.8)
        }

        .btn-brown {
            color: #111;
            background-color: #c48c8c;
            border-color: #c48c8c
        }

        .btn-brown:hover {
            color: #111;
            background-color: rgba(197, 143, 143, 0.9);
            border-color: rgba(196, 140, 140, 0.8)
        }

        .btn-brown:focus, .btn-brown.focus {
            box-shadow: 0 0 0 3px rgba(196, 140, 140, 0.5)
        }

        .btn-brown.disabled, .btn-brown:disabled {
            background-color: #c48c8c;
            border-color: #c48c8c
        }

        .btn-brown:active, .btn-brown.active, .show > .btn-brown.dropdown-toggle {
            background-color: rgba(197, 143, 143, 0.9);
            background-image: none;
            border-color: rgba(196, 140, 140, 0.8)
        }

        .btn-cyan {
            color: #111;
            background-color: #56b6c5;
            border-color: #56b6c5
        }

        .btn-cyan:hover {
            color: #111;
            background-color: rgba(89, 183, 198, 0.9);
            border-color: rgba(86, 182, 197, 0.8)
        }

        .btn-cyan:focus, .btn-cyan.focus {
            box-shadow: 0 0 0 3px rgba(86, 182, 197, 0.5)
        }

        .btn-cyan.disabled, .btn-cyan:disabled {
            background-color: #56b6c5;
            border-color: #56b6c5
        }

        .btn-cyan:active, .btn-cyan.active, .show > .btn-cyan.dropdown-toggle {
            background-color: rgba(89, 183, 198, 0.9);
            background-image: none;
            border-color: rgba(86, 182, 197, 0.8)
        }

        .btn-red {
            color: #fff;
            background-color: #ce1f44;
            border-color: #ce1f44
        }

        .btn-red:hover {
            color: #fff;
            background-color: rgba(210, 32, 69, 0.9);
            border-color: rgba(206, 31, 68, 0.8)
        }

        .btn-red:focus, .btn-red.focus {
            box-shadow: 0 0 0 3px rgba(206, 31, 68, 0.5)
        }

        .btn-red.disabled, .btn-red:disabled {
            background-color: #ce1f44;
            border-color: #ce1f44
        }

        .btn-red:active, .btn-red.active, .show > .btn-red.dropdown-toggle {
            background-color: rgba(210, 32, 69, 0.9);
            background-image: none;
            border-color: rgba(206, 31, 68, 0.8)
        }

        .btn-yellow, .btn-blue, .btn-brown, .btn-oneshot, .btn-tom, .btn-cyan, .btn-pink {
            color: #FFF
        }

        .btn-yellow:hover, .btn-yellow:active, .btn-yellow:focus, .btn-blue:hover, .btn-blue:active, .btn-blue:focus, .btn-brown:hover, .btn-brown:active, .btn-brown:focus, .btn-oneshot:hover, .btn-oneshot:active, .btn-oneshot:focus, .btn-tom:hover, .btn-tom:active, .btn-tom:focus, .btn-cyan:hover, .btn-cyan:active, .btn-cyan:focus, .btn-pink:hover, .btn-pink:active, .btn-pink:focus {
            color: #FFF
        }
    </style>

@endsection
