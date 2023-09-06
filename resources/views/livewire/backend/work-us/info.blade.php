<div>
    <x-modal wire:model='modal' id="slider">
        <form>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="mb-4">
                    <h1 class="text-gray-900 text-2xl font-bold ">
                        Informacion de aplicante
                    </h1>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" readonly
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" wire:model.defer="name">
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4" wire:ignore wire:key='email'>
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                    <input type="text" readonly
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" wire:model.defer="email">
                    @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div bis_skin_checked="1" wire:key='message'>
                    <label for="message" class="text-sm">Mensaje / Propuesta</label>
                    <textarea readonly id="message" wire:model="message" rows="3" class="w-full p-3 rounded"></textarea>
                    @error('message')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>


                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="mb-2 flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="closeModal()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cerrar
                        </button>
                    </span>
                </div>

            </div>
        </form>
    </x-modal>
</div>