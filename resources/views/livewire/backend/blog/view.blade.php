<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if ($modal)
        @include('livewire.backend.blog.create')
        @endif
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            @if (session()->has('message'))
            <div class="w-2/5 ml-12 bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message') }}</h4>
                    </div>
                </div>
            </div>
            @endif


            <div class="p-12 overflow-x-auto w-full">
                <x-button wire:click="create">
                    Crear un nuevo post
                </x-button>
                <table class="text-center table-auto w-full my-2 max-w-full">
                    <thead>
                        <tr class="bg-principal text-white">
                            <th class="px-4 py-2">Id</th>
                            <th class="">Titulo</th>
                            <th class="">Categoria</th>
                            <th class="">Descripcion</th>
                            <th class="">Ultima edicion</th>
                            <th class="">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)

                        <tr>
                            <td class="border" NOWRAP>{{$item->id}}</td>
                            <td class="border">{{$item->title}}</td>
                            <td class="border">{{$item->category_data->name}}</td>
                            <td class="border">{{$item->excerpt}}</td>
                            <td class="border">{{$item->refresh_at}}</td>
                            <td class="border px-2 py-2 text-center w-40">

                                <button title="Editar a {{$item->title}}" wire:click="edit({{$item->id}})"
                                    class="btn bg-green-600 hover:bg-green-800">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <button title="Eliminar a {{$item->title}}" wire:click="delete({{$item->id}})"
                                    class="btn bg-red-600 hover:bg-red-800" onclick="return confirm('Desea eliminar?')">
                                    <i class=" fa-solid fa-trash-can"></i>
                                </button>

                                <a target="_blank" class="btn bg-blue-600 hover:bg-blue-800 inline" href="{{route('post.show', [
                            'postCategory' => $item->category_data->slug, 
                            'post' => $item->slug
                            ])}}"><i class="fa-solid fa-file-arrow-up"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$posts->links()}}
        </div>
    </div>
</div>