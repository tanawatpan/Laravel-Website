<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="{{ url('/') }}">
                Escape
            </a>


            <ul class="navbar-nav mr-auto">

                <!-- Dropdown -->
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">--}}
{{--                        Categories--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <a class="dropdown-item" href="/gallery">Gallery</a>--}}
{{--                        <a class="dropdown-item" href="/manga">Manga</a>--}}
{{--                        <a class="dropdown-item" href="/animation">Animation</a>--}}
{{--                        <a class="dropdown-item" href="/game">Game</a>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/manga">Comics<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/animation">Animation<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/game">Game<span class="sr-only"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/info">Commission<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Contact<span class="sr-only"></span></a>
                </li>

            </ul>

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/gallery/create">Gallery</a>
                            <a class="dropdown-item" href="/manga/create">Manga</a>
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

        </div>

    </div>

</nav>
