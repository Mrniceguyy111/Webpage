<div>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Lista de compras</h1>
            <form class="mt-12 lg:gri lg:items-start lg:gap-x-12 xl:gap-x-16">
                <span>Filtrar por:</span>
                <select id="quantity" name="quantity" wire:model="quantity"
                    class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                    <option value="Todas">Todas</option>
                    <option value="Hoy">Hoy</option>
                    <option value="semana">La ultima semana</option>
                    <option value="mes">El ultimo Mes</option>
                </select>


                <section aria-labelledby="cart-heading" class="lg:col-span-7">
                    <ul role="list" class="divide-y divide-gray-200 border-t border-b border-gray-200">
                        <li v-for="(product, productIdx) in products" class="flex py-6 sm:py-10">
                            <div class="flex-shrink-0">
                                <img src="{{asset('images/juguetes.png')}}" alt=""
                                    class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48" />
                            </div>

                            <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                                <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                    <div>
                                        <div class="mt-4 sm:mt-0 sm:pr-9">
                                            <p class="mt-4 flex space-x-2 text-sm text-gray-700 text-red-400">
                                                Especificaciones:
                                            </p>
                                        </div>
                                        <div class="flex justify-between">
                                            <h3 class="text-sm">
                                                <a class="font-medium text-gray-700 hover:text-gray-800">Escoba
                                                    magica</a>
                                            </h3>
                                        </div>
                                        <div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">Verde</p>
                                            <p v-if="product.size"
                                                class="ml-4 border-l border-gray-200 pl-4 text-gray-500">20kg</p>
                                        </div>
                                        <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                            Unidades: 2
                                        </p>
                                    </div>
                                    <div class="mt-4 sm:mt-0 sm:pr-9">
                                        <p class="mt-4 flex space-x-2 text-sm text-gray-700 text-red-400">
                                            Valor:
                                        </p>
                                        <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                            43563
                                        </p>
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
                    </ul>
                </section>
            </form>
        </div>
    </div>
</div>