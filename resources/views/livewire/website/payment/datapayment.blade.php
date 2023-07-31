@section('title', 'Detalles de pago')
<div class="my-4">
    <section class="grid md:grid-cols-2 grid-cols-1 w-full">
        <div class="ml-6" id="page-info">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Informacion Basica</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Datos personales</p>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">A continuación se encuentran tus datos
                    personales. Si lo deseas puedes actualizarlos, no olvides mantenerlos actualizados, esto permitirá
                    que sea más fácil la comunicación en caso de ser necesario.</p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nombres:</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{Auth::user()->name}}
                        </dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Tipo de documento:</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{Auth::user()->document_type}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Numero de documento:</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{Auth::user()->document}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Fecha de nacimiento:</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{Auth::user()->birthday_date}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Email:</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{Auth::user()->email}}
                        </dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Telefono: </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{Auth::user()->phone}}
                        </dd>
                    </div>
                </dl>
                <button type="button"
                    class="my-2 bg-gray-200 inline-flex cursor-pointer items-center justify-center rounded-xl border-6 bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none  focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:text-white dark:focus:ring-white/80">
                    <box-icon name='edit'></box-icon>Editar
                </button>
            </div>
            <button type="button" id="siguiente-informacion"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-black bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Siguiente
            </button>
        </div>
        <div class="ml-6 hidden" id="page-corre">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Correspondencia</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Selecciona el destino</p>
                <p class="mt-1 max-w-2xl font-bold text-2x1 leading-6 text-gray-500">Todas las compras se despachan por
                    servientrega desde Bogotá, LOS TIEMPOS DE ENTREGA dependen de la cuarentena establecida en cada zona
                </p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                @if ($hasAddreses)
                <div class="px-4 py-2 ">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Mis direcciones:</label>
                    <select id="address"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Seleccione su direccion:</option>
                        @foreach ($addreses as $item)
                        <option value="{{$item->id}}">{{$item->address}} - {{$item->city}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-2 ">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Ubicacion</label>
                        <select id="address" wire:model="address"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione ciudad y/o departamento</option>
                            @foreach ($departaments as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="px-4 py-2 ">
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Ingresa la dirección de destino
                            Para poder continuar con el proceso de pago, indica la dirección a donde quieres que te
                            lleguen los artículos. Dejando alguna observacion de ayuda, para que la entrega sea fácil y
                            rápida. (Ej: si es conjunto residencial indicar torre y apartamento)</p>
                        <div>
                            <label for="price"
                                class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 sm:text-sm">N:</span>
                                </div>
                                <input type="text" name="price" id="price"
                                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Cll ** AA">
                            </div>
                        </div>
                    </div>
                </dl>
                @endif


                <button type="button" wire:click='editAddress'
                    class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                    <box-icon name='edit'></box-icon>Editar
                </button>
            </div>
            <button type="button" id="anterior-corre"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Anterior
            </button>
            <button type="button" id="siguiente-corre"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Siguiente
            </button>
        </div>
        <div class="page-page ml-6 hidden" id="page-pago">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Pago</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Realiza el pago</p>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Ahora ya puedes realizar el pago. Cualquier
                    inquietud adicional no dudes enn comunicarte con el servicio.</p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                </dl>
            </div>
            <button type="button" id="anterior-pago"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Anterior
            </button>
            <button type="button"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-blue-400 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Pagar <box-icon name='wallet-alt'></box-icon>
            </button>
        </div>
        <div class="flex justify-center min-h-screen">
            <div class="w-full max-w-sm rounded-xl bg-layer-2 px-8 py-6">
                <h3 class="text-lg font-semibold text-heading">Resumen de pago</h3>
                <p class="text-sm font-semibold text-heading text-red-400">Tienes {{Cart::Count()}} articulo en tu
                    carrito</p>
                <dl class="mt-4 space-y-4">
                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">
                            Subtotal
                        </dt>
                        <dd class="text-sm font-semibold text-heading">${{Cart::subtotal()}}</dd>
                    </div>

                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">
                            IVA (19%)
                        </dt>
                        <dd class="text-sm font-semibold text-heading">${{Cart::tax()}}</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">
                            Domicilio
                        </dt>
                        <dd class="text-sm font-semibold text-heading">$10.000</dd>
                    </div>

                </dl>
                <div class="mt-2 flex items-center justify-between">
                    <dt class="text-sm font-semibold text-text">Total a pagar:</dt>
                    <dd class="text-lg font-semibold text-heading">${{Cart::total()}}</dd>
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <p class="mt-2 text-sm font-semibold text-heading text-gray-400">*Asegurar tu mercancía garantiza
                        que si ocurre un percance con la transportadora no perderás tu inversión. Esto en casos extremos
                        como desastres naturales y otros factores inevitables.</p>
                    <p class="mt-2 text-sm font-semibold text-heading text-gray-400">Los costos de envío pueden variar
                        de acuerdo a la cantidad o el tamaño de los artículos.</p>
                    <p class="mt-2 text-sm font-semibold text-heading text-red-400">Recuerda que una vez realizada tu
                        compra no se aceptan devoluciones de dinero.</p>
                </div>
                <div class="mt-6 flex flex-col space-y-2">
                    <button type="button" wire:click='cancelCart'
                        class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                        Cancelar transferencia
                    </button>
                </div>
            </div>
        </div>
    </section>


    <script>
        const sectionInformation = document.getElementById("page-info")
        const sectionCorre = document.getElementById("page-corre")
        const sectionPago = document.getElementById("page-pago")
        const siguienteInformacion = document.getElementById("siguiente-informacion")
        const anteriorCorre = document.getElementById("anterior-corre")
        const siguienteCorre = document.getElementById("siguiente-corre")
        const anteriorPago = document.getElementById("anterior-pago")


        siguienteInformacion.addEventListener("click", function() {
            sectionInformation.classList.add("hidden")
            sectionCorre.classList.remove("hidden")
        })
        anteriorCorre.addEventListener("click", function() {
            sectionInformation.classList.remove("hidden")
            sectionCorre.classList.add("hidden")
        })
        siguienteCorre.addEventListener("click", function() {
            sectionCorre.classList.add("hidden")
            sectionPago.classList.remove("hidden")
        })
        anteriorPago.addEventListener("click", function() {
            sectionPago.classList.add("hidden")
            sectionCorre.classList.remove("hidden")
        }) 
    </script>
</div>