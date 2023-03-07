<!doctype html>

<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" rel="stylesheet">
    <link href="{{ asset('assets/resources/css/bootstramp.min.css') }}">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .menu-item {
            position: absolute;
            top: -10px;
            right: 19px;
            position: absolute;
            bottom: 19px;
            right: -20px;
        }
    </style>

</head>

<body>
    <div id="app">
        @include('layouts.navbar')
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            </div>
            <br><br>
            <div class="menu-item">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            <main class="py-1">
                @yield('content')
            </main>
    </div>
    </div>
</body>

</html>
