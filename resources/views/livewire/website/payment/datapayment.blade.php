@section('title', 'Detalles de pago')
<div class="my-4">
    <section class="grid md:grid-cols-2 grid-cols-1 w-full">

        @if ($pageData)
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
            <button type="button" id="siguiente-informacion" wire:click="page('address')"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-black bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Siguiente
            </button>
        </div>
        @endif

        @if ($pageAddresses)
        <div class="ml-6" id="page-corre">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Correspondencia</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Selecciona el destino</p>
            </div>

            <div class="mt-6 border-t border-gray-100">
                @if ($hasAddreses)
                <div class="px-4 py-2 ">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Mis direcciones:</label>
                    <select id="address" wire:model='id_address'
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
            <button type="button" id="anterior-corre" wire:click="page('info')"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Anterior
            </button>
            @if ($id_address)
            <button type="button" id="siguiente-corre" wire:click="page('pay')"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Siguiente
            </button>
            @endif
        </div>
        @endif

        @if ($pagePay)
        <div class="page-page ml-6" id="page-pago">
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
            <button type="button" id="anterior-pago" wire:click="page('address')"
                class="my-2 block cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Anterior
            </button>

            <form class="inline" method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu">

                <input name="merchantId" type="hidden" value="{{env('PAYU_MERCHANT_ID')}}">
                <input name="accountId" type="hidden" value="{{env('PAYU_ACCOUNT_ID')}}">
                <input name="description" type="hidden" value="Test PAYU">
                <input name="referenceCode" type="hidden" value="{{$this->referenceCode}}">
                <input name="amount" type="hidden" value="{{$this->totalPrice}}">
                <input name="tax" type="hidden" value="{{$this->tax}}">
                <input name="taxReturnBase" type="hidden" value="{{$this->taxBase}}">
                <input name="currency" type="hidden" value="COP">
                <input name="extra1" type="hidden" value="{{ Cart::content()->count() }}">
                <input name="signature" type="hidden" value="{{$this->signature}}">
                <input name="test" type="hidden" value="0">
                <input name="buyerFullName" type="hidden" value="{{Auth::user()->name}}">
                <input name="buyerEmail" type="hidden" value="{{Auth::user()->email}}">
                <input name="mobilePhone" type="hidden" value="{{Auth::user()->phone}}">
                <input name="responseUrl" type="hidden" value="{{route('payment.response')}}">
                <input name="confirmationUrl" type="hidden" value="{{route('payment.confirmation')}}">

                <button type="submit" wire:click="buy"
                    class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-blue-400 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                    Pagar <box-icon name='wallet-alt'></box-icon>
                </button>
            </form>

            <button type="submit" wire:click="trokeraPayment"
                class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-principal px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                Pagar con Trokera <box-icon name='dollar'></box-icon>
            </button>

            @if ($this->select_payment)
            <select id="address" wire:model='pay_currency' wire:change='trokeraRequest'
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccione su cryptomoneda:</option>
                <option value="BTC"'>Bitcoin - BTC</option>
                <option value="USDT">Tether - USDT</option>
            </select>
            @endif



            @if ($this->pay_currency)
            <h3 class="text-base font-semibold leading-7 text-gray-900">Pago total en BTC: {{$this->btc_value}}</h3>

            <form class="inline" id="profileForm" action="https://trokera.com/api/apiRequestCheckout" method="post"
                autocomplete="off">
                <input type="hidden" name="api_key" value="{{env("TROKERA_API_KEY")}}"">
                    <input type="hidden" name="secret_key" value="{{env("TROKERA_SECRET_KEY")}}">
                    <input type="hidden" name="return_url_success" value="http://127.0.0.1:8000/request">
                    <input type="hidden" name="return_url_failed" value="http://127.0.0.1:8000/request">
                    <input type="hidden" name="request_id" value="{{$this->request_id}}">

                    <button
                        class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-principal px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80"
                        type="submit">Llevame a pagar!</button>
                    </form>
                    @endif

        </div>
        @endif

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
                        {{--
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">
                            Domicilio
                        </dt>
                        <dd class="text-sm font-semibold text-heading">$10.000</dd>
                    </div> --}}

                </dl>
                <div class="mt-2 flex items-center justify-between">
                    <dt class="text-sm font-semibold text-text">Total a pagar:</dt>
                    <dd class="text-lg font-semibold text-heading">${{Cart::total()}}</dd>
                </div>
                {{-- <div class="flex flex-wrap items-center justify-between">
                </div> --}}
                <div class="mt-6 flex flex-col space-y-2">
                    <button type="button" wire:click=' cancelCart'
                    class="my-2 inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-gray-200 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-gray-200-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-gray-200 disabled:hover:text-white dark:focus:ring-white/80">
                    Cancelar transferencia
                    </button>
        </div>
</div>
</div>
</section>
</div>