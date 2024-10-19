<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name');}}</title>
    @vite('resources/css/app.css')

</head>
<body>
    <header class="p-4 dark:bg-black dark:text-white w-full fixed top-0 left-0 z-50">
        <div class="container flex flex-row items-center justify-between h-16 mx-auto">
            <h1 class="self-center px-8 py-3 rounded border border-amber-400 font-semibold hover:border-white text-white dark:border-black text-xl transition duration-200 ease-in-out"><a href="{{ route('welcome') }}" >{{ config('app.name') }}</a></h1>

            <div class="items-center flex-shrink-0 lg:flex gap-4">
                <a href="{{ route('home') }}" class="self-center px-8 py-3 rounded border border-amber-400 font-semibold hover:border-white hover:text-white text-amber-400 dark:border-amber-400 transition duration-200 ease-in-out">Entrar</a>
                <a href="{{ route('register') }}" class="self-center px-8 py-3 font-bold rounded dark:bg-amber-400 hover:dark:bg-white dark:text-black transition duration-200 ease-in-out">Registrar-se</a>
            </div>
        </div>
    </header>


    <section class="relative bg-cover bg-center min-h-screen pt-20 overflow-x-hidden flex flex-col items-center justify-center" style="background-image: url('{{ asset('images/barber.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-20 text-center w-11/12 lg:w-2/4 ">
            <h1 class="text-white text-4xl font-bold mb-16">Seu próximo corte está a um clique de distância!</h1>
            <a href="{{ route('home') }}" class="self-center px-8 py-3 font-bold rounded dark:bg-amber-400 hover:dark:bg-white dark:text-black transition duration-200 ease-in-out">Agendar agora!</a>
        </div>
    </section>

</body>

</html>
