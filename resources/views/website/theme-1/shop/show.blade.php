@extends('template')
@section('title', $product->name)
@section('content')

<section class="overflow-hidden bg-white py-11 font-poppins">
    @if (session()->has('message'))
    <div class="w-2/5 ml-12 bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
        <div class="flex">
            <div>
                <h4>{{ session('message') }}</h4>
            </div>
        </div>
    </div>
    @endif
    <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
        <div class="flex flex-wrap mx-4">
            <div class="w-full mb-8 md:w-1/2 md:mb-0">
                <div class="sticky top-0 z-50 overflow-hidden ">
                    <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                        <img src="{{$product->getFirstImage($product->id)}}" alt="{{$product->name}}"
                            class="object-cover w-full lg:h-full ">
                    </div>
                    <div class="flex-wrap hidden md:flex ">
                        @foreach ($product->getAllImages($product->id) as $item)
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a href="#" data-target="#large-image"
                                class="block border border-blue-300 hover:border-blue-300">
                                <img src="{{$item->url}}" alt="" class="object-cover w-full lg:h-20">
                            </a>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 ">
                <div class="lg:pl-20">
                    <div class="mb-8 ">
                        <h2 class="max-w-xl mb-6 text-2xl font-bold  md:text-4xl">
                            {{$product->name}}</h2>
                        <p class="inline-block mb-6 text-4xl font-bold text-gray-700  ">
                            @if ($product->discount == 0)
                            <span>${{$product->getCorrectPrice()}}</span>
                            @else
                            <span>${{$product->getPriceWithDiscount()}}</span>
                            <span
                                class="text-base font-normal text-gray-500 line-through ">${{$product->getCorrectPrice()}}</span>
                            @endif


                        </p>
                        <p class="max-w-md text-gray-700 ">
                            {!! $product->description !!}
                        </p>
                    </div>
                    <div class="w-32 mb-8 ">
                        <label for=""
                            class="w-full pb-1 text-xl font-semibold text-gray-700 border-b border-blue-300">Cantidad</label>
                        <div class="relative flex flex-row w-full h-10 mt-6 bg-transparent rounded-lg">
                            <input type="number"
                                class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none focus:outline-none text-md hover:text-black"
                                placeholder="1" value="1">
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="{{route('cart.add', $product->id)}}"
                            class="text-center w-full p-4 bg-blue-500 rounded-md lg:w-2/5 dark:text-gray-200 text-gray-50 hover:bg-blue-600 dark:bg-blue-500 dark:hover:bg-blue-700">
                            Add to cart</a>
                        <button
                            class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md lg:w-2/5 dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-500 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection