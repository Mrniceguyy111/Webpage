@extends('template')
@section('title', "Ayuda")

@section('content')
<section class="">
    <div class="container flex flex-col items-center p-4 mx-auto md:p-8" bis_skin_checked="1">
        <h1 class="text-3xl font-bold leadi text-center sm:text-4xl" style="color: #e7a242;">Sobre Hatchi</h1>
        <box-icon class="cursor-pointer" name='down-arrow-alt' id="down-1"></box-icon>
        <box-icon class="hidden cursor-pointer" name='up-arrow-alt' id="up-1"></box-icon>
        <div id="containt-1"
            class=" hidden mt-4 flex flex-col w-full divide-y sm:flex-row sm:divide-y-0 sm:divide-x sm:px-8 lg:px-12 xl:px-32 divide-gray-700"
            bis_skin_checked="1">
            <div class="flex flex-col w-full divide-y divide-gray-700" bis_skin_checked="1">
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">¿Acerca de Hatchi?</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Trabaja con Nosotros</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Nuestros Blogs</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Terminos y condiciones</a>
            </div>
        </div>
    </div>
    <div class="container flex flex-col items-center p-4 mx-auto md:p-8" bis_skin_checked="1">
        <h1 class="text-3xl font-bold leadi text-center sm:text-4xl" style="color: #e7a242;">Datos de interes</h1>
        <box-icon class="cursor-pointer" name='down-arrow-alt' id="down-2"></box-icon>
        <box-icon class="hidden cursor-pointer" name='up-arrow-alt' id="up-2"></box-icon>
        <div id="containt-2"
            class="hidden mt-4 flex flex-col w-full divide-y sm:flex-row sm:divide-y-0 sm:divide-x sm:px-8 lg:px-12 xl:px-32 divide-gray-700"
            bis_skin_checked="1">
            <div class="flex flex-col w-full divide-y divide-gray-700" bis_skin_checked="1">
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">¿Como comprar en Hatchi?</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Preguntas frecuentes</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Politicas de Entrega</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Politicas de Privacidad</a>
            </div>
        </div>
    </div>
    <div class="container flex flex-col items-center p-4 mx-auto md:p-8" bis_skin_checked="1">
        <h1 class="text-3xl font-bold leadi text-center sm:text-4xl" style="color: #e7a242;">Contactanos</h1>
        <box-icon class="cursor-pointer" name='down-arrow-alt' id="down-3"></box-icon>
        <box-icon name='up-arrow-alt' id="up-3" class="hidden cursor-pointer	"></box-icon>
        <div id="containt-3"
            class="hidden mt-4 flex flex-col w-full divide-y sm:flex-row sm:divide-y-0 sm:divide-x sm:px-8 lg:px-12 xl:px-32 divide-gray-700"
            bis_skin_checked="1">
            <div class="flex flex-col w-full divide-y divide-gray-700" bis_skin_checked="1">
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Comunicate en nuestra sede:
                    cr35353</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Comunicate por nuestro correo:
                    hatchicolombia@gmail.com</a>
                <a rel="noopener noreferrer" href="#"
                    class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Comunicate por nuestro telefono:
                    3232424242</a>
            </div>
        </div>
</section>
<script>
    const down1 = document.getElementById("down-1")
        const down2 = document.getElementById("down-2")
        const down3 = document.getElementById("down-3")
        const up1 = document.getElementById("up-1")
        const up2 = document.getElementById("up-2")
        const up3 = document.getElementById("up-3")
        const container1 = document.getElementById("containt-1")
        const container2 = document.getElementById("containt-2")
        const container3 = document.getElementById("containt-3")

        down1.addEventListener("click", function() {
            down1.classList.add("hidden")
            up1.classList.remove("hidden")
            container1.classList.remove("hidden")
        })
        up1.addEventListener("click", function() {
            down1.classList.remove("hidden")
            up1.classList.add("hidden")
            container1.classList.add("hidden")
        })
        down2.addEventListener("click", function() {
            down2.classList.add("hidden")
            up2.classList.remove("hidden")
            container2.classList.remove("hidden")
        })
        up2.addEventListener("click", function() {
            down2.classList.remove("hidden")
            up2.classList.add("hidden")
            container2.classList.add("hidden")
        })
        down3.addEventListener("click", function() {
            down3.classList.add("hidden")
            up3.classList.remove("hidden")
            container3.classList.remove("hidden")
        })
        up3.addEventListener("click", function() {
            down3.classList.remove("hidden")
            up3.classList.add("hidden")
            container3.classList.add("hidden")
        })
</script>
@endsection