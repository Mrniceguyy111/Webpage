<x-app-layout>
    <div class="container flex flex-wrap items-center justify-center p-4 mx-auto space-y-8 sm:p-10"
        bis_skin_checked="1">
        <h1 class="text-4xl font-bold leadi text-center sm:text-5xl">Hola <span
                style="color: #e7a242;">{{Auth::user()->name
                }}!</span></h1>
        <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full"
            src="{{ Auth::user()->profile_photo_url }}">
    </div>
    <div class="max-w-full mx-4 py-6 sm:mx-auto sm:px-6 lg:px-8">
        <div class="sm:flex sm:space-x-4">
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div class="bg-white p-5">
                    <div class="sm:flex sm:items-start">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium" style="color: #e7a242;">HatchiCoins</h3>
                            <p class="text-3xl font-bold text-black">{{Auth::user()->hatchi_coins}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div class="bg-white p-5">
                    <div class="sm:flex sm:items-start">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium" style="color: #e7a242;">Suscripcion</h3>
                            <p class="text-3xl font-bold text-black">{{$subscription->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div class="bg-white p-5">
                    <div class="sm:flex sm:items-start">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium text-gray-400" style="color: #e7a242;">Ultima
                                compra</h3>
                            <p class="text-3xl font-bold text-black">{{Auth::user()->last_buy}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg">
                <div class="p-4 text-center">
                    <h2 class="text-3xl font-bold" style="color: #e7a242;">Direcciones</h2>
                </div>
                <div class="p-5 grid gap-3 md:grid-cols-3 sm:grid-cols-2  grid-cols-1">
                    @foreach ($address as $item)
                    <div
                        class="p-6 w-full border border-black border-radius rounded-2xl overflow-hidden shadow transform transition-all">
                        <h5 class="text-lg font-bold" style="color: #e7a242;">{{$item->address}}</h5>
                        <p>{{$item->city}} - {{$item->country}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>