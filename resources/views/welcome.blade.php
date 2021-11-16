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
</head>

<body class="h-screen font-sans leading-none bg-gray-100 anti aliased">
    <div class="flex flex-col">

    @if(session()->has('success'))
        <x-success success="{{ session('success') }}" />
    @endif
    @if(session()->has('error'))
        <x-error error="{{ session('error') }}" />
    @endif



        <section class="flex items-center justify-center min-h-screen text-center bg-blue-100"
            style="background-image: url('https://images.unsplash.com/photo-1563291074-2bf8677ac0e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=702&q=80'); background-size: cover">
            <div class="flex flex-col justify-around">


                <h1
                    class="mb-2 text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">
                    Welcome to Take A Loan</h1>

                <p class="mb-8 text-lg text-center text-gray-700 whitespace-pre ">
                    <strong class="font-mono">What are the benefits of borrowing money?</strong>
                    Successful borrowing can help you create a positive credit history
                    Succesfully borrowing and paying off your loans as agreed can help you establish a good credit
                    rating and make obtaining additional credit possible. Even if you do not typcially use credit often,
                    it is good to have the ability to do so in the event of an emergency.
                </p>

                <div class="flex justify-between space-y-2">
                    <img width="300" height="300"
                        src="https://ouch-cdn2.icons8.com/pw-JGgLgKOFEHkdlQP3mWM4SywdvMLKwkLEIRdStxo0/rs:fit:975:912/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvODQ0/LzFlMzlkYzkxLWU4/OWUtNGI3MS04YWQw/LTFhZmFmNWJkODQz/OC5wbmc.png"
                        alt="">
                    <a href="{{ route('display.loans') }}"
                        class="h-10 px-8 py-3 font-black text-yellow-600 transition duration-300 bg-yellow-400 rounded-lg hover:bg-yellow-300 hover:shadow-xl">Loans
                        Here</a>
                </div>
            </div>
        </section>

    </div>
</body>

</html>
