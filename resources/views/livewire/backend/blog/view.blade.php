
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="grid gap-2 grid-cols-3 m-5">
                    @foreach ($posts as $item)
                    
                        <div class="bg-white-300 hover:bg-blue-100 border rounded w-full p-3 text-left">  
                            <a href="{{ route('post.show', $item->slug)}}">    
                                <h6 class="font-bold mb-0 text-lg mb-4">{{$item->title}}</h6>
                                <p class="">{{$item->excerpt}}</p>
                                <p class="text-xs text-right mt-2">Subido hace: {{$item->published_at}}</p>
                                <a href="{{route('post.delete', $item->id)}}"><i class="fa-solid fa-trash" style="color: #db0000;"></i></a>
                                <a href="{{route('post.edit', $item->id)}}"><i class="fa-solid fa-pen-to-square" style="color: #00e658;"></i></a>
                            </a>
                         </div>
                    
                    @endforeach
                </div>
                {{$posts->links()}}
                
            </div>
        </div>
    </div>
