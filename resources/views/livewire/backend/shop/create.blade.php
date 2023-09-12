<div>
    <x-modal wire:model='modal' id="slider">
        <form wire:submit.prevent='updateFiles'>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="mb-4">
                    <h1 class="text-gray-900 text-2xl font-bold ">
                        @if ($editing)
                        Actualizar
                        @else
                        Crear
                        @endif Producto
                    </h1>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" wire:model="name">
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:key='price'>
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                    <input type="number" placeholder="$"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="price" wire:model="price">
                    @error('price')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:key='quantity'>
                    <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                    <input type="number" placeholder="15"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="quantity" wire:model="quantity">
                    @error('quantity')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:key='discount'>
                    <label for="discount" class="block text-gray-700 text-sm font-bold mb-2">Descuento</label>
                    <input type="number" placeholder="%" value="0"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="discount" wire:model="discount">
                    @error('discount')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:ignore wire:key='description'>
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="description" wire:model.lazy='description'></textarea>
                    @error('description')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:key='animal'>
                    <label for="animal" class="block mb-2 text-sm font-medium text-gray-900">Animal</label>
                    <select id="animal" wire:model="animal"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Seleccione un animal...</option>
                        @foreach ($animals as $item)
                        <option value="{{ $item->id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('animal')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 space-y-2">
                    <label class="block text-gray-600">Sube tus archivos</label>
                    <input type="file" name="files" wire:model='files' wire:change='updateFiles'
                        class="file-upload border border-gray-300 p-2 w-full">
                </div>

                <div wire:loading wire:target="files">
                    <img src="{{asset('images/svg/Rolling-1s-200px.svg')}}" alt="">
                </div>


                @if(count($uploads) > 0)
                <div class="space-y-2">
                    <p class="text-lg font-semibold">Otras fotos:</p>
                    @foreach($uploads as $file)
                    <div class="flex items-center space-x-2" wire:key="{{ $file->getFilename() }}">
                        <img src="{{ $file->temporaryUrl() }}" alt="Archivo Previsualizado" class="h-16 w-auto">
                        <span>{{ $file->getClientOriginalName() }}</span>
                    </div>
                    @endforeach
                </div>
                @endif


                <div class="mb-4" wire:key='animal_category'>
                    <label for="animal_category" class="block mb-2 text-sm font-medium text-gray-900">Categoria:</label>
                    <select id="animal_category" wire:model="animal_category"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Seleccione el producto...</option>
                        @foreach ($category_animals as $item)
                        <option value="{{ $item->id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('animal_category')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:key='is_active'>
                    <label for="is_active" class="block text-gray-700 text-sm font-bold mb-2"></label>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" wire:model="is_active" class="sr-only peer" checked>
                        <div
                            class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                        <span class="ml-3 text-gray-700 text-sm font-bold">Activar</span>
                    </label>
                    @error('is_active')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:key='has_offer'>
                    <label for="has_offer" class="block text-gray-700 text-sm font-bold mb-2"></label>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" wire:model="has_offer" class="sr-only peer" checked>
                        <div
                            class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                        <span class="ml-3 text-gray-700 text-sm font-bold">¿Tiene oferta?</span>
                    </label>
                    @error('has_offer')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="mb-2 flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>

                    <span class="mb-2 flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="closeModal()" type="button" wire:loading.attr='disabled' wire:target='store'
                            class="disabled:opacity-25  inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>

            </div>
        </form>
    </x-modal>
</div>