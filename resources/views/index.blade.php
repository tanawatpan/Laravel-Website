@extends('layouts.main')


@section('content')
    <style>
        .carousel-caption {
            position: absolute;
            top: 410px;
        }
    </style>

    <div class="container">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
             style="height: 550px; overflow-y: hidden;">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner col-md-12">

                <div class="carousel-item active">
                    <a href="/manga/{{$manga->mid}}">
                        <img class="d-block w-100" src="/{{$manga->logo}}" alt="First slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h4>{{ucfirst($manga->title)}}</h4>
                        <p>{{$manga->description}}</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <a href="/gallery/{{$gallery->gid}}">
                        <img class="d-block w-100" src="/{{$gallery->logo}}" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
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

    </div>

@endsection
