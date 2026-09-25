<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body {
                    font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                    background-color: #0a0a0a;
                    color: #ededec;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh;
                    margin: 0;
                }
                .container {
                    text-align: center;
                    padding: 2rem;
                }
                h1 {
                    font-size: 2.5rem;
                    font-weight: 600;
                    margin-bottom: 0.5rem;
                }
                p {
                    color: #a1a1aa;
                    font-size: 1.1rem;
                }
            </style>
        @endif
    </head>
    <body>
        <div class="container">
            <h1>Laravel</h1>
            <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        </div>
    </body>
</html>