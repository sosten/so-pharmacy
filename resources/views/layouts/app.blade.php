<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SO-Pharmacy | @yield('title')</title>
    <link rel="shortcut icon" href="/images/sopharmacy_icon.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="main_nav">
            <div class="container">
                <div class="logo">
                    <a href="{{ url('/') }}"><span>SO.</span>Pharmacy</a>
                </div>
                <div class="search">
                    <form>
                        <input type="text" placeholder="Search for products, brands and more">
                    </form>
                    <?php echo'<?xml version="1.0" encoding="iso-8859-1"?>';?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 183.792 183.792" style="enable-background:new 0 0 183.792 183.792;" xml:space="preserve">
                        <path d="M54.734,9.053C39.12,18.067,27.95,32.624,23.284,50.039c-4.667,17.415-2.271,35.606,6.743,51.22
                        c12.023,20.823,34.441,33.759,58.508,33.759c7.599,0,15.139-1.308,22.287-3.818l30.364,52.592l21.65-12.5l-30.359-52.583
                        c10.255-8.774,17.638-20.411,21.207-33.73c4.666-17.415,2.27-35.605-6.744-51.22C134.918,12.936,112.499,0,88.433,0
                        C76.645,0,64.992,3.13,54.734,9.053z M125.29,46.259c5.676,9.831,7.184,21.285,4.246,32.25c-2.938,10.965-9.971,20.13-19.802,25.806
                        c-6.462,3.731-13.793,5.703-21.199,5.703c-15.163,0-29.286-8.146-36.857-21.259c-5.676-9.831-7.184-21.284-4.245-32.25
                        c2.938-10.965,9.971-20.13,19.802-25.807C73.696,26.972,81.027,25,88.433,25C103.597,25,117.719,33.146,125.29,46.259z"/>
                    </svg>
                </div>
                <div class="user_account">
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a>{{ Auth::user()->name }}</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
                <div class="shopping_cart">
                    <a href="#">
                        <?php echo'<?xml version="1.0" encoding="iso-8859-1"?>';?>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 486.569 486.569" style="enable-background:new 0 0 486.569 486.569;" xml:space="preserve">
                            <g>
                                <path d="M146.069,320.369h268.1c30.4,0,55.2-24.8,55.2-55.2v-112.8c0-0.1,0-0.3,0-0.4c0-0.3,0-0.5,0-0.8c0-0.2,0-0.4-0.1-0.6
                                    c0-0.2-0.1-0.5-0.1-0.7s-0.1-0.4-0.1-0.6c-0.1-0.2-0.1-0.4-0.2-0.7c-0.1-0.2-0.1-0.4-0.2-0.6c-0.1-0.2-0.1-0.4-0.2-0.6
                                    c-0.1-0.2-0.2-0.4-0.3-0.7c-0.1-0.2-0.2-0.4-0.3-0.5c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.3-0.4-0.4-0.6
                                    c-0.1-0.2-0.2-0.3-0.4-0.5c-0.1-0.2-0.3-0.3-0.4-0.5s-0.3-0.3-0.4-0.5s-0.3-0.3-0.4-0.4c-0.2-0.2-0.3-0.3-0.5-0.5
                                    c-0.2-0.1-0.3-0.3-0.5-0.4c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.1-0.3-0.2-0.5-0.3s-0.4-0.2-0.6-0.4c-0.2-0.1-0.4-0.2-0.6-0.3
                                    s-0.4-0.2-0.6-0.3s-0.4-0.2-0.6-0.3s-0.4-0.1-0.6-0.2c-0.2-0.1-0.5-0.2-0.7-0.2s-0.4-0.1-0.5-0.1c-0.3-0.1-0.5-0.1-0.8-0.1
                                    c-0.1,0-0.2-0.1-0.4-0.1l-339.8-46.9v-47.4c0-0.5,0-1-0.1-1.4c0-0.1,0-0.2-0.1-0.4c0-0.3-0.1-0.6-0.1-0.9c-0.1-0.3-0.1-0.5-0.2-0.8
                                    c0-0.2-0.1-0.3-0.1-0.5c-0.1-0.3-0.2-0.6-0.3-0.9c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.4-0.8c-0.1-0.1-0.1-0.3-0.2-0.4
                                    c-0.1-0.2-0.2-0.4-0.4-0.6c-0.1-0.2-0.2-0.3-0.3-0.5s-0.2-0.3-0.3-0.5s-0.3-0.4-0.4-0.6c-0.1-0.1-0.2-0.2-0.3-0.3
                                    c-0.2-0.2-0.4-0.4-0.6-0.6c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.2-0.4-0.4-0.7-0.6c-0.1-0.1-0.3-0.2-0.4-0.3c-0.2-0.2-0.4-0.3-0.6-0.5
                                    c-0.3-0.2-0.6-0.4-0.8-0.5c-0.1-0.1-0.2-0.1-0.3-0.2c-0.4-0.2-0.9-0.4-1.3-0.6l-73.7-31c-6.9-2.9-14.8,0.3-17.7,7.2
                                    s0.3,14.8,7.2,17.7l65.4,27.6v61.2v9.7v74.4v66.5v84c0,28,21,51.2,48.1,54.7c-4.9,8.2-7.8,17.8-7.8,28c0,30.1,24.5,54.5,54.5,54.5
                                    s54.5-24.5,54.5-54.5c0-10-2.7-19.5-7.5-27.5h121.4c-4.8,8.1-7.5,17.5-7.5,27.5c0,30.1,24.5,54.5,54.5,54.5s54.5-24.5,54.5-54.5
                                    s-24.5-54.5-54.5-54.5h-255c-15.6,0-28.2-12.7-28.2-28.2v-36.6C126.069,317.569,135.769,320.369,146.069,320.369z M213.269,431.969
                                    c0,15.2-12.4,27.5-27.5,27.5s-27.5-12.4-27.5-27.5s12.4-27.5,27.5-27.5S213.269,416.769,213.269,431.969z M428.669,431.969
                                    c0,15.2-12.4,27.5-27.5,27.5s-27.5-12.4-27.5-27.5s12.4-27.5,27.5-27.5S428.669,416.769,428.669,431.969z M414.169,293.369h-268.1
                                    c-15.6,0-28.2-12.7-28.2-28.2v-66.5v-74.4v-5l324.5,44.7v101.1C442.369,280.769,429.669,293.369,414.169,293.369z"/>
                            </g>
                        </svg>
                        <span>Cart</span>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="bottom_nav">
                <div><a href="#">Hair Care</a></div>
                <div><a href="#">Skin Care</a></div>
                <div><a href="#">Baby Oil & Bath</a></div>
                <div><a href="#">For Women</a></div>
                <div><a href="#">For Men</a></div>
                <div><a href="#">Health</a></div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
