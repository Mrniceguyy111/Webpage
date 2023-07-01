<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <div class="p-5">
                <h2 class="text-4xl">Bienvenido {{Auth::user()->name}}!</h2> 
                <div class="grid grid-cols-3 mt-12 mx-5">
                    <div class="">
                        HatchiCoins: {{Auth::user()->hatchi_coins}}
                    </div>
                    <div class="">
                        Subscripcion: {{$subscription->name}}
                    </div>
                    <div class="">
                        Ultima compra: {{Auth::user()->last_purchase}}
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5">
                    <h2 class="text-3xl">Direcciones:</h2>
                </div>
                <div class="p-5 grid gap-3 grid-cols-3">
                    @foreach ($address as $item)
                        <div class="hover:bg-blue-100 w-full border border-radius">
                            <h5 class="text-lg font-bold">{{$item->address}}</h5>
                            <p>{{$item->city}} - {{$item->country}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
