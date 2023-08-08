@extends('template')
@section('title', 'Trabaja con hatchi!')


@section('content')
<div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 "
    bis_skin_checked="1">
    <div class="flex flex-col justify-between" bis_skin_checked="1">
        <div class="space-y-2" bis_skin_checked="1">
            <h2 class="text-4xl font-bold leadi lg:text-5xl">Envianos tu propuesta</h2>
            <div class="dark:text-gray-400" bis_skin_checked="1">Estaremos feliz de responderte</div>
        </div>
        <img src="{{ asset('images/logo.png') }}" alt="" class="p-6 h-full md:h-full">
    </div>
    <form novalidate="" class="space-y-6">
        <div bis_skin_checked="1">
            <label for="name" class="text-sm">Nombre personal o de la empresa</label>
            <input id="name" type="text" placeholder="" class="border-gray-200 w-full p-3 rounded ">
        </div>
        <div bis_skin_checked="1">
            <label for="email" class="text-sm">Email</label>
            <input id="email" type="email" class="w-full p-3 rounded">
        </div>
        <div bis_skin_checked="1">
            <label for="message" class="text-sm">Tu mensaje y propuesta!</label>
            <textarea id="message" rows="3" class="w-full p-3 rounded"></textarea>
        </div>
        <button type="submit" class="w-full p-3 text-sm font-bold tracki uppercase rounded dark:bg-orange-400">Envia
            mensaje</button>
    </form>
</div>
@endsection