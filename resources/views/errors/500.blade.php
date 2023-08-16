<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500 | Error interno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="grid min-h-full place-items-center bg-white px-6 py-6 sm:py-6 lg:px-8">
        <div class="text-center flex justify-center items-center flex-col">
            <p class="text-3xl font-semibold text-indigo-600">500</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Error interno del servidor</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Lo sentimos, nuestros servidores perdieron el rumbo
                <br>intenta mas tarde
            </p>
            <img src="{{ asset('images/logo.png') }}" style="width: 70%;" alt="">
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('home') }}"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar!</a>
                <a href="https://wa.link/hatchi" class="text-sm font-semibold text-gray-900">Contactar soporte <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </main>
</body>

</html>