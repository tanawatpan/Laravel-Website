@extends('layouts.main')


@section('content')

    <section class="hero">
        <div id="main-highlight" class="highlight-box">
            <div class="swiper-container swiper-container-horizontal swiper-container-wp8-horizontal">
                <div class="swiper-wrapper"
                     style="transform: translate3d(-3420px, 0px, 0px); transition-duration: 0ms;">

                    <div class="swiper-slide" data-swiper-slide-index="0" style="width: 1140px;">
                        <article class="highlight-item">
                            <div class="highlight-item__stat">
                            </div>
                            <div class="highlight-item__thumbnail">
                                <a href="/manga/{{$manga->mid}}" target="_blank"
                                   title={{ucfirst($manga->title)}} data-event-tracker="HOME"
                                   data-event-tracker-name="HIGHLIGHT-#1">
                                    <picture>
                                        <source srcset="/{{$manga->logo}}"
                                                media="(min-width: 400px)">
                                        <img class="lazy-img loading"
                                             srcset="/{{$manga->logo}}"
                                             alt={{ucfirst($manga->title)}}
                                                 data-was-processed="true"
                                             style="height: 554px; object-fit: cover;">
                                    </picture>
                                </a>
                            </div>

                            <div class="highlight-item__body">
                                <h3 class="highlight-item__title">
                                    <a href="/manga/{{$manga->mid}}" target="_blank"
                                       data-event-tracker="HOME"
                                       data-event-tracker-name="HIGHLIGHT-#1">{{ucfirst($manga->title)}}</a>
                                </h3>
                                <p class="highlight-item__desc"><a
                                        href="https://www.online-station.net/mobile-game/view/140611" target="_blank"
                                        data-event-tracker="HOME"
                                        data-event-tracker-name="HIGHLIGHT-#3-SPONSOR">{{ucfirst($manga->description)}}</a>
                                </p>
                                <div class="highlight-item__viewmore">
                                    <a href="/manga/{{$manga->mid}}"
                                       class="btn btn-sm btn-primary" target="_blank" data-event-tracker="HOME"
                                       data-event-tracker-name="HIGHLIGHT-#1">&nbsp;View&nbsp;
                                        <svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" aria-hidden="true"
                                             data-prefix="fas" data-icon="angle-right" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg><!-- <i class="fas fa-angle-right ml-1"></i> -->
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="width: 1140px;">
                        <article class="highlight-item">
                            <div class="highlight-item__stat">
                            </div>
                            <div class="highlight-item__thumbnail">
                                <a href="/gallery/{{$gallery->gid}}" target="_blank"
                                   title={{ucfirst($gallery->title)}}
                                       data-event-tracker="HOME" data-event-tracker-name="HIGHLIGHT-#3-SPONSOR">
                                    <picture>
                                        <source srcset="/{{$gallery->logo}}"
                                                media="(min-width: 400px)">
                                        <img class="lazy-img loading"
                                             srcset="/{{$gallery->logo}}"
                                             alt={{ucfirst($gallery->title)}}
                                                 data-was-processed="true"
                                             style="height: 554px; object-fit: cover;">
                                    </picture>
                                </a>
                            </div>

                            <div class="highlight-item__body">
                                <h3 class="highlight-item__title">
                                    <a href="/gallery/{{$gallery->gid}}" target="_blank"
                                       data-event-tracker="HOME"
                                       data-event-tracker-name="HIGHLIGHT-#3-SPONSOR">{{ucfirst($gallery->title)}}</a>
                                </h3>
                                <p class="highlight-item__desc"><a
                                        href="https://www.online-station.net/mobile-game/view/140611" target="_blank"
                                        data-event-tracker="HOME"
                                        data-event-tracker-name="HIGHLIGHT-#3-SPONSOR">{{ucfirst($gallery->description)}}</a>
                                </p>
                                <div class="highlight-item__viewmore">
                                    <a href="/gallery/{{$gallery->gid}}"
                                       class="btn btn-sm btn-primary" target="_blank" data-event-tracker="HOME"
                                       data-event-tracker-name="HIGHLIGHT-#3-SPONSOR">&nbsp;View&nbsp;
                                        <svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" aria-hidden="true"
                                             data-prefix="fas" data-icon="angle-right" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg><!-- <i class="fas fa-angle-right ml-1"></i> -->
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            </div>

            <div class="swiper-button-prev">
                <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" data-prefix="fas"
                     data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                     data-fa-i2svg="">
                    <path fill="currentColor"
                          d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                </svg><!-- <i class="fas fa-angle-left"></i> -->
            </div>
            <div class="swiper-button-next">
                <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fas"
                     data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                     data-fa-i2svg="">
                    <path fill="currentColor"
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                </svg><!-- <i class="fas fa-angle-right"></i> -->
            </div>
        </div>

    </section>

    <article class="my-4">
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
                            Commission
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
        Hello there.
    </div>
    
    <div class = 'col-md-2'></div>
    <div class="col-md-8 col-md-offset-5">
        <img src="/storage/escape1and2 chibi.jpg" class="img-fluid img-thumbnail" alt="Responsive image"
                style="width: 100%;height: auto;">
    </div>
    <div class = 'col-md-2'></div>

    <style>
        /*Online Station*/
        *, ::after, ::before {
            box-sizing: border-box
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        a {
            color: #343a40;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        a:not([href]):not([tabindex]), a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        a.btn.disabled, fieldset:disabled a.btn {
            pointer-events: none
        }

        .btn-group-vertical > .btn, .btn-group > .btn {
            position: relative;
            flex: 0 1 auto
        }

        .btn-group-toggle > .btn input[type=checkbox], .btn-group-toggle > .btn input[type=radio], .btn-group-toggle > .btn-group > .btn input[type=checkbox], .btn-group-toggle > .btn-group > .btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group-append .btn, .input-group-prepend .btn {
            position: relative;
            z-index: 2
        }

        .back2top-box .btn {
            width: 50px !important;
            height: 50px !important
        }

        .btn-group-sm > .btn, .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0
        }

        .btn-primary.focus, .btn-primary:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgb(9, 0, 255)
        }

        .btn-primary {
            color: #fff;
            background-color: #5455f3;
            border-color: #5455f3
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #5b8ef3;
            border-color: #5b8ef3
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #fff;
            background-color: #5455f3;
            border-color: #5455f3
        }

        .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #5b8ef3;
            border-color: #5b8ef3
        }

        .hero {
            position: relative;
            z-index: 5;
            margin: auto
        }

        @media (min-width: 576px) {
            .hero {
                max-width: 540px
            }
        }

        @media (min-width: 768px) {
            .hero {
                max-width: 720px
            }
        }

        @media (min-width: 1200px) {
            .hero {
                max-width: 980px
            }
        }

        @media (max-width: 767.98px) {
            .hero {
                padding-left: 1rem;
                padding-right: 1rem;
                padding-bottom: 1rem
            }
        }

        .hero__header h1 {
            color: #fff;
            margin-bottom: 0
        }

        .highlight-box {
            position: relative;
            background: #fff;
            margin-bottom: 0
        }

        .highlight-item {
            position: relative;
            display: flex;
            padding-bottom: 0
        }

        .highlight-item__thumbnail {
            width: 100%
        }

        @media (min-width: 1200px) {
            .highlight-item__thumbnail {
                width: 700px;
                min-width: 700px
            }
        }

        @media (min-width: 1600px) {
            .hero {
                max-width: 1140px
            }

            .highlight-item__thumbnail {
                width: 840px;
                min-width: 840px
            }
        }

        .highlight-item__thumbnail a {
            display: block;
            width: 100%
        }

        .highlight-item__stat {
            position: absolute;
            top: 0;
            right: 0;
            width: 25px;
            height: 25px
        }

        .highlight-item__body {
            position: absolute;
            bottom: 0;
            z-index: 1;
            color: #fff;
            width: 100%;
            padding: 1rem
        }

        .highlight-item__title {
            font-size: 1.125rem;
            line-height: 1.5rem;
            text-align: center;
            margin-bottom: 0
        }

        .highlight-item__title a {
            color: #fff
        }

        .highlight-item__title a:focus, .highlight-item__title a:hover {
            color: #5b8ef3;
            text-decoration: none
        }

        @media (min-width: 768px) {
            .highlight-item__title {
                font-size: 1.5rem;
                line-height: 2rem
            }
        }

        @media (min-width: 1200px) {
            .highlight-item__body {
                background-color: #34393d;
                position: relative;
                padding: 1.5rem
            }

            .highlight-item__title {
                text-align: left;
                margin-bottom: .75rem
            }
        }

        .highlight-item__desc {
            display: none;
            font-weight: 500;
            margin-bottom: 0
        }

        .highlight-item__desc a {
            color: #adb5bd
        }

        .highlight-item__desc a:focus, .highlight-item__desc a:hover {
            color: #adb5bd;
            text-decoration: none
        }

        .highlight-item__desc a, .highlight-item__desc p, .highlight-item__title a {
            display: block;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical
        }

        .highlight-item__title a {
            max-height: 100px;
            -webkit-line-clamp: 3
        }

        .highlight-item__desc a, .highlight-item__desc p {
            max-height: 120px;
            -webkit-line-clamp: 5
        }

        @media (min-width: 1200px) {
            .highlight-item__desc {
                display: inline-block
            }
        }

        .highlight-item__viewmore {
            display: none
        }

        @media (min-width: 1200px) {
            .highlight-item__viewmore {
                display: block;
                position: absolute;
                bottom: 55px;
                right: 1.5rem
            }
        }

        .swiper-container, .swiper-slide, .swiper-wrapper {
            position: relative
        }

        .swiper-container {
            margin: 0 auto;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left
        }

        .swiper-container-vertical > .swiper-wrapper {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .swiper-wrapper {
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        .swiper-container-android .swiper-slide, .swiper-wrapper {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .swiper-container-multirow > .swiper-wrapper {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .swiper-container-free-mode > .swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto
        }

        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            -webkit-transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .swiper-container-autoheight .swiper-wrapper {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-transition-property: height, -webkit-transform;
            -o-transition-property: transform, height;
            transition-property: transform, height;
            transition-property: transform, height, -webkit-transform
        }

        .swiper-container-wp8-horizontal, .swiper-container-wp8-horizontal > .swiper-wrapper {
            -ms-touch-action: pan-y;
            touch-action: pan-y
        }

        .swiper-button-next, .swiper-button-prev {
            position: absolute;
            top: 50%;
            width: 27px;
            height: 44px;
            margin-top: -22px;
            z-index: 10;
            cursor: pointer;
            background-size: 27px 44px;
            background-position: center;
            background-repeat: no-repeat
        }

        .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
            left: 10px;
            right: auto
        }

        .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
            right: 10px;
            left: auto
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: .3s opacity;
            -o-transition: .3s opacity;
            transition: .3s opacity;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 10
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transform: scale(.33);
            -ms-transform: scale(.33);
            transform: scale(.33);
            position: relative
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1)
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #ccc
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #5455f3
        }

        .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            -webkit-transition: .2s top, .2s -webkit-transform;
            -o-transition: .2s transform, .2s top;
            transition: .2s transform, .2s top;
            transition: .2s transform, .2s top, .2s -webkit-transform
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 3px
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: .2s left, .2s -webkit-transform;
            -o-transition: .2s transform, .2s left;
            transition: .2s transform, .2s left;
            transition: .2s transform, .2s left, .2s -webkit-transform
        }

        .swiper-container-horizontal.swiper-container-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: .2s right, .2s -webkit-transform;
            -o-transition: .2s transform, .2s right;
            transition: .2s transform, .2s right;
            transition: .2s transform, .2s right, .2s -webkit-transform
        }


        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #fff
        }

        .swiper-zoom-container > canvas, .swiper-zoom-container > img, .swiper-zoom-container > svg {
            max-width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain
        }

        @-webkit-keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            -webkit-transition-property: opacity;
            -o-transition-property: opacity;
            transition-property: opacity
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 100%;
            height: 100%
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            -webkit-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            transform-origin: 100% 0
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-container-coverflow .swiper-wrapper {
            -ms-perspective: 1200px
        }

        .swiper--auto-height .swiper-slide {
            display: flex;
            min-height: 100%
        }

        .swiper--pagination .swiper-pagination {
            display: block
        }

        .swiper--pagination .swiper-pagination + .swiper-wrapper {
            padding-bottom: 30px
        }

        .swiper--pagination-hidden .swiper-pagination {
            display: none
        }

        .swiper--pagination-hidden .swiper-pagination + .swiper-wrapper {
            padding-bottom: 0
        }

        .swiper--navigation .swiper-button-prev {
            left: -60px;
            right: auto
        }

        .swiper--navigation .swiper-button-next {
            right: -60px;
            left: auto
        }

        .swiper--navigation .swiper-button-next, .swiper--navigation .swiper-button-prev {
            display: none;
            position: absolute;
            font-size: 40px;
            color: #f36b21;
            width: 40px;
            height: 40px;
            margin-top: -20px
        }

        .swiper--navigation .swiper-button-next .svg-inline--fa, .swiper--navigation .swiper-button-prev .svg-inline--fa {
            vertical-align: 0
        }

        @media (min-width: 1200px) {
            .swiper--navigation .swiper-button-next, .swiper--navigation .swiper-button-prev {
                display: block
            }
        }

        .highlight-box .swiper-button-next, .highlight-box .swiper-button-prev {
            display: none;
            font-size: 50px;
            color: #fff;
            height: 50px;
            margin-top: -25px
        }

        .highlight-box .swiper-button-next .svg-inline--fa, .highlight-box .swiper-button-prev .svg-inline--fa {
            vertical-align: 0
        }

        .player-overlay .svg-inline--fa {
            vertical-align: top
        }


        @media (min-width: 1200px) {
            .highlight-box:hover .swiper-button-next, .highlight-box:hover .swiper-button-prev {
                display: block
            }

            .highlight-box .swiper-pagination {
                bottom: 15px;
                left: auto;
                right: 15px;
                text-align: right;
                width: auto
            }
        }

        .entry__thumb img, .highlight-item__thumbnail img {
            max-width: 100%;
            height: auto
        }

        svg:not(:root).svg-inline--fa {
            overflow: visible
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -.125em
        }

        .svg-inline--fa.fa-w-8 {
            width: .5em
        }

        .ml-1 {
            margin-left: .25rem !important
        }

    </style>

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

    <script>
        var HighlightBox = new Swiper("#main-highlight .swiper-container", {
            slidesPerView: 1,
            autoplay: {delay: 4500, disableOnInteraction: !1},
            loop: !0,
            pagination: {el: "#main-highlight .swiper-pagination", clickable: !0},
            navigation: {nextEl: "#main-highlight .swiper-button-next", prevEl: "#main-highlight .swiper-button-prev"}
        });
    </script>

@endsection
