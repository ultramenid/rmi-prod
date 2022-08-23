<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon" >
    <title>{{$title}}</title>

    @yield('meta')
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



    @livewireScripts
    <script src="{{ asset('js/app.js') }}"  defer data-turbolinks-suppress-warning></script>
    <script src="{{ asset('js/alpine.js')}} "></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>
<body>

    @yield('content')

    <div x-data="{ open: false }" @scroll.window="open = (window.pageYOffset > 50) ? true : false" >
        <div class="fixed z-40 sm:bottom-10 sm:right-12 bottom-6 right-4 cursor-pointer " x-show="open" x-transition x-cloak style="display: none !important" @click="window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          })">
            <div class="sm:px-4 px-2 sm:py-4 py-2 border border-white rounded-full bgrmi flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                  </svg>
            </div>
        </div>
    </div>

    @stack('scripts')
    <script src="{{ asset('js/data_geoJSON.js')}} "></script>
    <script src="{{ asset('js/initmap.js')}} "></script>
</body>
</html>
