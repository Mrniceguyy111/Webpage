@section('title', "Carrito de compras")

<div>
    <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
        @if (session()->has('message'))
        <div class="w-2/5 ml-12 bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <h4>{{ session('message') }}</h4>
                </div>
            </div>
        </div>
        @endif
        @if (Cart::content()->count() != 0)
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Carrito de compras</h1>
        <form class="mt-12 lg:gri lg:items-start lg:gap-x-12 xl:gap-x-16">
            <section aria-labelledby="cart-heading" class="lg:col-span-7">
                <ul role="list" class="divide-y divide-gray-200 border-t border-b border-gray-200">
                    @foreach (Cart::content() as $item)
                    <li class="flex py-6 sm:py-10">
                        <div class="flex-shrink-0">
                            <img src="{{$item->options['image']}}" alt=""
                                class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48" />
                        </div>

                        <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                            <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                <div>
                                    <div class="flex justify-between">
                                        <h3 class="text-sm">
                                            <a class="font-medium text-gray-700 hover:text-gray-800">{{$item->name}}</a>
                                        </h3>
                                    </div>
                                    <div class="mt-1 flex text-sm">
                                        <p class="text-gray-500">Caracterisiticas:</p>
                                    </div>
                                    <p class="mt-1 text-sm font-medium text-gray-900">{{$item->price}}</p>
                                </div>

                                <div class="mt-4 sm:mt-0 sm:pr-9">
                                    <label for="" class="sr-only">Quantity</label>
                                    <select id="quantity" name="quantity" wire:model="quantity"
                                        class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>

                                    <div class="absolute top-0 right-0">
                                        <button type="button" wire:click='remove("{{$item->rowId}}")'
                                            class=" -m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                                            <span class="">Remove</span>
                                            <XMarkIcon class="h-5 w-5" aria-hidden="true" />
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                <CheckIcon v-if="product.inStock" class="h-5 w-5 flex-shrink-0 text-green-500"
                                    aria-hidden="true" />
                                <ClockIcon v-else class="h-5 w-5 flex-shrink-0 text-gray-300" aria-hidden="true" />
                                <span></span>
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </section>
            <section aria-labelledby="summary-heading"
                class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
                <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Resumen del pedido</h2>

                <dl class="mt-6 space-y-4">
                    <div class="flex items-center justify-between">
                        <dt class="text-sm text-gray-600">Subtotal</dt>
                        <dd class="text-sm font-medium text-gray-900">${{Cart::subtotal()}}</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="flex items-center text-sm text-gray-600">
                            <span>Descuento por suscripcion: </span>
                            <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Learn more about how shipping is calculated</span>
                                <QuestionMarkCircleIcon class="h-5 w-5" aria-hidden="true" />
                            </a>
                        </dt>
                        <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="flex text-sm text-gray-600">
                            <span>IVA (19%)</span>
                            <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Learn more about how tax is calculated</span>
                                <QuestionMarkCircleIcon class="h-5 w-5" aria-hidden="true" />
                            </a>
                        </dt>
                        <dd class="text-sm font-medium text-gray-900">${{Cart::tax()}}</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="text-base font-medium text-gray-900">Total de la orden</dt>
                        <dd class="text-base font-medium text-gray-900">${{Cart::total()}}</dd>
                    </div>
                </dl>

                <div class="mt-6">
                    <a href="{{route('payment.view')}}"
                        class="text-center w-full rounded-md border border-transparent bg-principal py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</a>
                </div>
            </section>
        </form>
        @else
        <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">No hay nada en tu carrito
            🙁
        </h1>
        @endif

    </div>
</div>
