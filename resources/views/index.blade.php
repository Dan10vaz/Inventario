<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    @include('landing-page.nav')

        <div class="p-10 bg-green-100">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-5">
                    <h1 class="text-center text-5xl font-bold mt-20 text-gray-500">Obten el sistema de Inventario que tu negocio merece.</h1>
                    <h2 class="text-center text-green-500 text-4xl font-bold mt-20">Nuestros especialistas te ayudaran en todo el proceso de migracion de datos.</h2>
                </div>
                <div>
                    <img class="rounded-2xl shadow-2xl" src="{{asset('img/in.jpg')}}" alt="">
                </div>
            </div>
        </div>

        @livewireScripts
</body>
</html>
