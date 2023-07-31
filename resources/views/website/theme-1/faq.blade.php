@extends('template')
@section('title', 'FAQ')


@section('content')
<section class="flex justify-center items-center">
    <div class="container flex flex-col justify-center px-4 py-8 mx-auto md:p-8" bis_skin_checked="1">
        <h2 class="text-2xl font-semibold sm:text-4xl">Preguntas Frecuentes</h2>
        <p class="mt-4 mb-8 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur.</p>
        <div class="space-y-4" bis_skin_checked="1">
            <details class="w-full border rounded-lg">
                <summary class="px-4 py-6 focus:outline-none focus-visible:ri">Hatchi lovers</summary>
                <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Ipsum alias voluptatem, architecto laboriosam, iusto sit aperiam veniam ea
                    repudiandae nisi dolores itaque voluptatibus suscipit, sed fugiat exercitationem praesentium magnam
                    modi?
                    Veritatis beatae, provident commodi voluptatum tempora facilis reprehenderit deleniti esse nemo
                    optio eius quibusdam. Ad cum quaerat veritatis necessitatibus praesentium aperiam. Labore dicta
                    quisquam quibusdam vitae aliquam, nesciunt laudantium ea? </p>
            </details>
            <details class="w-full border rounded-lg">
                <summary class="px-4 py-6 focus:outline-none focus-visible:ri">Hatchi lovers</summary>
                <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Ipsum alias voluptatem, architecto laboriosam, iusto sit aperiam veniam ea
                    repudiandae nisi dolores itaque voluptatibus suscipit, sed fugiat exercitationem praesentium magnam
                    modi?
                    Veritatis beatae, provident commodi voluptatum tempora facilis reprehenderit deleniti esse nemo
                    optio eius quibusdam. Ad cum quaerat veritatis necessitatibus praesentium aperiam. Labore dicta
                    quisquam quibusdam vitae aliquam, nesciunt laudantium ea? </p>
            </details>
        </div>
    </div>
</section>
@endsection