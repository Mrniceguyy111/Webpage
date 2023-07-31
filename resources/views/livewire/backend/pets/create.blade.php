<div class="form-pet">
    <section style=" width: 80%;">
        <article class="">
            <form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
                <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
                    <div class="space-y-2 col-span-full lg:col-span-1" bis_skin_checked="1">
                        <p class="font-medium">Cuentanos como es tu mascota</p>
                        <p class="text-xs">Queremos saber que tanto amas a tus mascotas, para nosotros es muy
                            importante.</p>
                    </div>
                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3" bis_skin_checked="1">
                        <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                            <label for="firstname" class="text-sm">Nombre:</label>
                            <input wire:model="name" autocomplete="off"="firstname" type="text" placeholder="Bathory"
                                class="textarea-label w-full rounded-md focus:ring focus:ri focus:ri">
                        </div>
                        <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                            <label for="age" class="text-sm">Edad</label>
                            <input wire:model="age" id="age" type="number" placeholder="12"
                                class=" textarea-label w-full rounded-md focus:ring focus:ri focus:ri">
                        </div>
                        <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                            <label for="email" class="text-sm">Peso (Kilos)</label>
                            <input wire:model="weight" id="email" type="number" placeholder="12"
                                class="textarea-label w-full rounded-md focus:ring focus:ri focus:ri">
                        </div>
                        <div class="col-span-full sm:col-span-3" wire:ignore wire:key='animal_id'>
                            <label for="animal_id" class="text-sm">¿Cual es tu mascota?</label>
                            <select id="animal_id" wire:model="animal_id"
                                class="textarea-label w-full rounded-md focus:ring focus:ri focus:ri">
                                <option value="">Seleccione tu mascota...</option>
                                @foreach ($animals as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('animal_id')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($this->animal_id != 0)
                        <div class="col-span-full sm:col-span-3" wire:ignore wire:key='race_id'>
                            <label for="race_id" class="text-sm">Raza</label>
                            <select id="race_id" wire:model="race_id"
                                class="textarea-label w-full rounded-md focus:ring focus:ri focus:ri">
                                <option value="">Seleccione la raza de tu mascota...</option>
                                @foreach ($races as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('race_id')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        @endif
                        <div class="col-span-full sm:col-span-3" wire:ignore wire:key='is_vaccinated'>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" wire:model="is_vaccinated" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-gray-700 text-sm font-bold">¿Tiene sus vacunas al día?</span>
                            </label>
                            </label>
                            @error('is_vaccinated')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
                    <div class="space-y-2 col-span-full lg:col-span-1" bis_skin_checked="1">
                        <p class="font-medium">Cuentanos que come tu mascota</p>
                        <p class="text-xs">Queremos saber que tanto amas a tus mascotas, para nosotros es muy
                            importante.</p>
                    </div>
                    <div class="grid grid-cols-6 gap-20 col-span-full lg:col-span-3" bis_skin_checked="1">
                        <div wire:model='peat_eats'
                            class="focus:outline-none focus:border-blue-300 focus:shadow-outline-blue mx-auto max-w-2xl lg:max-w-4xl cursor-pointer">
                            <figure class="mt-10">
                                <figcaption class="mt-10">
                                    <box-icon class="mx-auto h-10 w-10 rounded-full" name='bone'></box-icon>
                                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                        <div class="font-semibold text-gray-900">Seco</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div wire:model='peat_eats'
                            class="focus:outline-none focus:border-blue-300 focus:shadow-outline-blue mx-auto max-w-2xl lg:max-w-4xl cursor-pointer">
                            <figure class="mt-10">
                                <figcaption class="mt-10">
                                    <box-icon class="mx-auto h-10 w-10 rounded-full" name='bowl-rice'></box-icon>
                                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                        <div class="font-semibold text-gray-900">Mojado</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div wire:model='peat_eats'
                            class="focus:outline-none focus:border-blue-300 focus:shadow-outline-blue mx-auto max-w-2xl lg:max-w-4xl cursor-pointer">
                            <figure class="mt-10">
                                <figcaption class="mt-10">
                                    <box-icon class="mx-auto h-10 w-10 rounded-full" name='leaf'></box-icon>
                                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                        <div class="font-semibold text-gray-900">Natural</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
                    <!-- <div class="space-y-2 col-span-full lg:col-span-1" bis_skin_checked="1">
                        <p class="font-medium">Cuentanos los comportamientos de tu mascota</p>
                        <p class="text-xs">Elije 4 opciones que creas que representen a tu mascota</p>
                    </div>
                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3" bis_skin_checked="1">
                        <div class="flex flex-row col-span-full sm:col-span-3" bis_skin_checked="1">
                            <div class="">
                                <button id="typepet" value="Amorosa"
                         +           class="pet-button text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3  rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Amorosa</button>
                            </div>
                            <div class="">
                                <button value="Cariñosa"
                                    class="pet-button text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3  rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Cariñosa</button>
                            </div>
                            <div class="">
                                <button value="Valiente"
                                    class="pet-button text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3  rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Valiente</button>
                            </div>
                            <div class="">
                                <button value="Timido"
                                    class="pet-button text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3  rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Timido</button>
                            </div>
                        </div>
                    </div> -->
                    <div id="selectedValue"></div>
                    <div class="col-span-full" bis_skin_checked="1">
                        <label for="bio" class="text-sm">Imagen</label>
                        <div class="flex items-center space-x-2" bis_skin_checked="1">

                            <input type="file" wire:model.defer='imagename' name="imagename"
                                class="px-4 py-2 border rounded-md" id="">
                            @error('imagename')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                            <div wire:loading wire:target="imagename" class=""><img
                                    src="{{ asset('images/svg/Rolling-1s-200px.svg') }}" alt=""></div>

                            @if ($imagename)
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300"
                                    for="file_input">Previsualización:</label>
                                <img width="350" src="{{ $imagename->temporaryUrl() }}">
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="mb-2 flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-principal text-base leading-6 font-medium text-white shadow-sm hover:bg-amber-200 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Save
                            </button>
                        </span>

                        <span class="mb-2 flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="closeModal()" type="button" wire:loading.attr='disabled'
                                wire:target='store'
                                class="disabled:opacity-25  inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Cancel
                            </button>
                        </span>
                    </div>
</div>
</fieldset>
</form>
</article>
</section>
</div>