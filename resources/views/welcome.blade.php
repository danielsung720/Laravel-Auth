<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel-Auth
                </div>

                <div class="links">
                    @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/home') }}">-Home-</a>
                        @else
                            <a href="{{ route('login') }}">登入 / 註冊</a>
                            <a href="{{ route('fb_login') }}">Facebook登入 / 註冊</a>
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
