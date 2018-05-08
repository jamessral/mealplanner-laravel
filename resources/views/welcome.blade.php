<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="md:container mx-auto bg-grey-lightest px-4" id="welcome">
            @if (Route::has('login'))
                <nav class="pt-6 px-6 flex align-center justify-between">
                    <div class="flex-1">
                        <div class="px-6 pt-6">
                            {{ config('app.name') }}
                        </div>
                    </div>
                    <div class="flex align-center justify-end">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                        <button class="text-center flex align-center justify-center px-4 mr-2 py-2 border-2 border-blue bg-transparent text-blue rounded hover:bg-blue-dark">
                            <a href="{{ route('login') }}">Login</a>
                        </button>
                        <button class="text-center flex align-center justify-center px-4 ml-2 py-2 border-2 border-blue bg-transparent text-blue rounded hover:bg-blue-dark">
                            <a href="{{ route('register') }}">Register</a>
                        </button>
                        @endauth
                    </div>
                </nav>
            @endif
        </div>
    </body>
</html>
