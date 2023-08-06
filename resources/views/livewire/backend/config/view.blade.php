<div class="py-12">


    @if ($modal)
    @include('livewire.backend.config.category.create')
    @endif

    <div class="overflow-hidden shadow-xl sm:rounded-lg">

        @if (session()->has('message'))
        <div class="w-2/5 ml-12 bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <h4>{{ session('message') }}</h4>
                </div>
            </div>
        </div>
        @endif

        <h1 class="text-4xl font-bold leadi text-center sm:text-5xl" style="color: #e7a242;">Status</h1>
        <div class="max-w-full mx-4 py-6 sm:mx-auto sm:px-6 lg:px-8">
            <div class="sm:flex sm:space-x-4">
                <div
                    class="inline-block align-bottom  rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium" style="color: #e7a242;">PayU</h3>
                                <p class="text-3xl font-bold text-black">{{$this->checkPayU()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium" style="color: #e7a242;">Database:</h3>
                                <p class="text-3xl font-bold text-black">Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium text-gray-400" style="color: #e7a242;">API</h3>
                                <p class="text-3xl font-bold text-black">Disable</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col mt-8">
                <h2 class="text-2xl font-semibold mb-3">Categorias
                    <box-icon name='down-arrow-alt' id="down-arrow-category" class="down-arrow cursor-pointer">
                    </box-icon>
                    <box-icon name='up-arrow-alt' id="up-arrow-category" class="up-arrow inactive cursor-pointer">
                    </box-icon>
                </h2>

                <div id="table-category"
                    class="table-category inactive py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Edit</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Delete</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @foreach ($animalsCategory as $item)


                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                                        <div class="">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$item->id}}
                                            </div>
                                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-500">{{$item->name}}</div>
                    </td>


                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        @if ($item->is_active == 1)
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Activo</span>
                        @else
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">Desactivado</span>
                        @endif

                    </td>

                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <svg wire:click="editCategory({{$item->id}})" xmlns="http://www.w3.org/2000/svg"
                            class="cursor-pointer w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" wire:click='deleteCategory({{$item->id}})'
                            class="cursor-pointer w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col mt-8">
                <h2 class="text-2xl font-semibold mb-3">Listado de animales
                    <box-icon class="cursor-pointer" id="down-arrow-animals" name='down-arrow-alt'></box-icon>
                    <box-icon class="inactive cursor-pointer" id="up-arrow-animals" name='up-arrow-alt'></box-icon>
                </h2>
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div id="table-animals"
                        class="inactive inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Edit</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Delete</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @foreach ($animals as $item)


                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                                        <div class="">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$item->id}}
                                            </div>
                                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-500">{{$item->name}}</div>
                    </td>


                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        @if ($item->is_active == 1)
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Activo</span>
                        @else
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">Desactivado</span>
                        @endif

                    </td>

                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <svg wire:click="editCategory({{$item->id}})" xmlns="http://www.w3.org/2000/svg"
                            class="cursor-pointer w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" wire:click='deleteCategory({{$item->id}})'
                            class="cursor-pointer w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            @if ($error)
            Contamos con un error
            @endif
        </div>
    </div>
</div>