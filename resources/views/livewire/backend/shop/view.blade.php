<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if (session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message') }}</h4>
                    </div>
                </div>
            </div>
            @endif
            @if ($modal)
            @include('livewire.backend.shop.create')
            @endif
            <div class="p-12 overflow-x-auto w-full">
                <x-button wire:click="create">
                    Nuevo producto
                </x-button>
                <table class="text-center table-auto w-full my-2 max-w-full">
                    <thead>
                        <tr class="bg-principal text-white">
                            <th class="px-4 py-2">Id</th>
                            <th class="">Imagen</th>
                            <th class="">Nombre</th>
                            <th class="">Precio</th>
                            <th class="">Descuento</th>
                            <th class="">¿Activo?</th>
                            <th class="">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td class="border" NOWRAP>{{$item->id}}</td>
                            <td class="border"><img src="{{asset('images/juguetes.png')}}" width="120"></td>
                            <td class="border">{{$item->name}}</td>
                            <td class="border">${{$item->price}}</td>
                            <td class="border">{{$item->discount}}%</td>
                            <td class="border"><b>{{$item->checkActive()}}</b></td>
                            <td class="border px-2 py-2 text-center w-40">
                                <button title="Editar a {{$item->name}}" wire:click="edit({{$item->id}})"
                                    class="btn btn-red">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button title="Eliminar a {{$item->name}}" wire:click="delete({{$item->id}})"
                                    class="btn btn-red" onclick="return confirm('Desea eliminar?')">
                                    <i class=" fa-solid fa-trash-can"></i>
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>