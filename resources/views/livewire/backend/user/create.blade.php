<div>
    <x-modal wire:model='modal' id="slider">
        <form>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="mb-4">
                    <h1 class="text-gray-900 text-2xl font-bold ">
                        @if ($editing)
                            Actualizar
                        @else
                            Crear
                        @endif usuario
                    </h1>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" wire:model.defer="name">
                    @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:ignore wire:key='description'>
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="description" wire:model.defer="email">
                    @error('description')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-4" wire:ignore wire:key='type'>
                    <label for="type" class="block text-gray-700 text-sm font-bold mb-2">HatchiCoins:</label>
                    <input type="text" readonly="readonly"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="type" wire:model.defer="hatchi_coins">
                    @error('type')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-4" wire:ignore wire:key='type'>
                    <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Verificado:</label>
                    <input type="text" readonly="readonly"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="type" wire:model.defer="is_verified">
                    @error('type')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-4" wire:ignore wire:key='url'>
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Ultima ip registrada:</label>
                    <input type="text" readonly=""
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="url" wire:model="last_login_ip">
                    @error('url')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-4" wire:ignore wire:key='url'>
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Ultima compra:</label>
                    <input type="text" readonly=""
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="url" wire:model="last_purchase">
                    @error('url')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:ignore wire:key='url'>
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Total de compras:</label>
                    <input type="text" readonly=""
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="url" wire:model="total_purchases">
                    @error('url')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:ignore wire:key='url'>
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Correo verificado el día:</label>
                    <input type="text" readonly=""
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="url" wire:model="email_verified_at">
                    @error('url')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:ignore wire:key='url'>
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Suscripción:</label>
                    <input type="text" readonly=""
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="url" wire:model="suscription_level">
                    @error('url')
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
                        <button wire:click="closeModal()" type="button" wire:loading.attr='disabled'
                            wire:target='store'
                            class="disabled:opacity-25  inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>

            </div>
        </form>
    </x-modal>
</div>
