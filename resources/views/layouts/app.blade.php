<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
::-webkit-scrollbar {
  width: 7px;
  height: 7px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #001eff;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-thumb:hover {
  background: #6257ff;
}
::-webkit-scrollbar-thumb:active {
  background: #001eff;
}
::-webkit-scrollbar-track {
  background: #ffffff;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: #666666;
}
::-webkit-scrollbar-track:active {
  background: #4d4d4d;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>
    @livewireStyles
</head>

<body class="h-screen font-sans antialiased leading-none bg-gray-100">
    @auth()
        @livewire('nav.nav-bar')
    @else
        @livewire('nav.guest-nav-bar')
    @endauth


    <!-- Page Content -->
    <div>
        {{ $slot }}
    </div>
    <!-- End Page Content -->

    @livewireScripts()
    <script src="{{ asset('js/alpine/alpine3-4-2.min.js') }}"></script>

</body>

</html>
