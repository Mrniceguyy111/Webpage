@extends('template')
@section('title', 'FAQ')


@section('content')
<section class="flex justify-center items-center">
    <div class="container flex flex-col justify-center px-4 py-8 mx-auto md:p-8" bis_skin_checked="1">
        <h2 class="text-2xl font-semibold sm:text-4xl">Preguntas Frecuentes</h2>
        <!-- <p class="mt-4 mb-8 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur.</p> -->
        <div class="space-y-4" bis_skin_checked="1">
            <details class="w-full border rounded-lg">
                <summary class="px-4 py-6 focus:outline-none focus-visible:ri">¿Puedo ir a comprar o recoger mi pedido
                    en algun Lugar ?</summary>
                <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-400">Si Y Tambien Somos La Mejor Tienda Online ,
                    Eliges Tu dirección para recibir tu pedido y Hatchi te lo lleva el mismo día o el día que hayas
                    elegido recibirlo.</p>
            </details>
        </div>
        <div class="space-y-4" bis_skin_checked="1">
            <details class="w-full border rounded-lg">
                <summary class="px-4 py-6 focus:outline-none focus-visible:ri">¿Puedo programar Mis pedidos?
                </summary>
                <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-400">Sí, tenemos la opción de Entregas El mismo
                    Día,Autoship,Envío el mismo día En La Franja Horaria Que desees o Lo puedes programarlo para
                    cualquier día que Elijas.
                </p>
            </details>
        </div>
        <div class="space-y-4" bis_skin_checked="1">
            <details class="w-full border rounded-lg">
                <summary class="px-4 py-6 focus:outline-none focus-visible:ri">¿Cuánto Tarda en llegar mi pedido?
                </summary>
                <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-400">Tenemos Varias rutas en el día y Express en la
                    franja que elijas te llegará tu pedido, o también puedes programarlo para otro día.
                </p>
            </details>
        </div>
        <div class="space-y-4" bis_skin_checked="1">
            <details class="w-full border rounded-lg">
                <summary class="px-4 py-6 focus:outline-none focus-visible:ri">¿Qué Marcas Y Productos Manejan?
                </summary>
                <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-400">Tenemos La Mayoria de marcas del
                    mercado,concentrados, dietas naturales, snacks, medicinas, accesorios, Ropa,desparasitantes, higie…
                </p>
            </details>
        </div>
    </div>
</section>
@endsection