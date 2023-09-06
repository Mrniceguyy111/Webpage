@section('title', 'Trabaja con hatchi!')

<div>
    @if (session()->has('message'))
    <div class="w-2/5 ml-12 bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
        <div class="flex">
            <div>
                <h4>{{ session('message') }}</h4>
            </div>
        </div>
    </div>
    @endif
    <div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 "
        bis_skin_checked="1">
        <div class="flex flex-col justify-between" bis_skin_checked="1">
            <div class="space-y-2" bis_skin_checked="1">
                <h2 class="text-4xl font-bold leadi lg:text-5xl">Envianos tu propuesta</h2>
                <div class="dark:text-gray-400" bis_skin_checked="1">Estaremos feliz de responderte</div>
            </div>
            <img src="{{ asset('images/logo.png') }}" alt="" class="p-6 h-full md:h-full">
        </div>
        <form class="space-y-6" autocomplete="off">

            <div bis_skin_checked="1" wire:key='name'>
                <label for="name" class="text-sm">Nombre personal o de la empresa</label>
                <input id="name" wire:model="name" type="text" placeholder="Hatchi Colombia"
                    class="w-full p-3 rounded ">
                @error('name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div bis_skin_checked="1" wire:key='email'>
                <label for="email" class="text-sm">Email</label>
                <input id="email" wire:model="email" type="email" placeholder="julian@hatchi.com.co"
                    class="w-full p-3 rounded">
                @error('email')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div bis_skin_checked="1" wire:key='message'>
                <label for="message" class="text-sm">Tu mensaje y propuesta!</label>
                <textarea id="message" wire:model="message" rows="3" class="w-full p-3 rounded"></textarea>
                @error('message')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            {!! HCaptcha::display() !!}
            {{-- @error('h-captcha-response')
            <span class="text-red-600">{{ $message }}</span>
            @enderror --}}

            <button type="button" wire:click='store'
                class="w-full p-3 text-sm font-bold tracki uppercase rounded dark:bg-orange-400">Envia
                mensaje</button>
        </form>
    </div>

</div>