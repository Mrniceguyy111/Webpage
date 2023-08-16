<section class="py-6">


    @if ($modal)
    @include('livewire.backend.pets.create')
    @endif

    @if ($profile)
    @include('livewire.backend.pets.profile-pet')
    @endif

    <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10" bis_skin_checked="1">
        <h1 class="text-4xl font-bold leadi text-center sm:text-5xl" style="color: #e7a242;">Tus mascotas</h1>
        <p class="max-w-2xl text-center dark:text-gray-400"><b>Hola, {{Auth::user()->name}}.</b> <br>Estamos felices de
            tenerte
            con
            nosotros en hatchi, por eso adjuntamos tus mascotas, para que sepas que los tenemos en nuestro corazon.</p>
        <div class="flex flex-row flex-wrap-reverse justify-center items-center	" bis_skin_checked="1">

            @foreach ($pets as $item)
            <div class="flex flex-col justify-center m-8 text-center cursor-pointer items-center"
                wire:click="viewPet({{$item->id}})" bis_skin_checked="1">
                <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full "
                    src="{{asset('storage/pets/'.$item->photo)}}">
                <p class="text-xl font-semibold leadi">{{$item->name}}</p>
                <p class="dark:text-gray-400">{{$item->animal->name}} - {{$item->getBreedAnimal->name}}</p>
            </div>
            @endforeach
            <div wire:click='create()' class=" hover:bg-sale-200 flex-col justify-center m-8 text-center"
                bis_skin_checked="1">
                <box-icon name='plus'
                    class="elf-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full cursor-pointer">
                </box-icon>
                <p class="text-xl font-semibold leadi">Agregar</p>
                <p class="dark:text-gray-400">Otra mascota</p>
            </div>
        </div>
    </div>
</section>
