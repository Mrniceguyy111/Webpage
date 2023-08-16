@section('title', "Carrito de compras")

<div>
    <section class="flex justify-center items-center">
        <div class="flex justify-center min-h-screen">
            <div class="w-full max-w-sm rounded-xl bg-layer-2 px-8 py-6">
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-heading">
                        @switch($this->transaction_state)
                        @case(4)
                        ¡Recibimos tu transaccion!
                        @break
                        @case(6)
                        Transacción rechazada
                        @break
                        @case(104)
                        Ocurrio un error, contacta a nuestro soporte
                        @break
                        @case(7)
                        Aun estamos a la espera (Pago pendiente)
                        @break
                        @default

                        @endswitch
                    </h3>
                    <p class="text-sm font-semibold text-heading text-red-400">Recuerda descargar tu comprobante</p>
                </div>
                <dl class="mt-4 space-y-4">
                    <div class="mt-2 flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">Valor de la compra:</dt>
                        <dd class="text-lg font-semibold text-heading">${{$new_value}}</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">
                            Numero de Referencia:
                        </dt>
                        <dd class="text-sm font-semibold text-heading">{{ $referenceCode }}</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-semibold text-text">
                            Cantidad de productos
                        </dt>
                        <dd class="text-sm font-semibold text-heading">12</dd>
                    </div>
                </dl>
                <div class="mt-2 flex items-center justify-between">
                    <dt class="text-sm font-semibold text-black">Productos:</dt>
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <p class="mt-2 text-sm font-semibold text-heading text-gray-400">BUM LLEGO LA HORA DE EXPLOTAR
                    </p>
                </div>
                <div class="mt-2 flex items-center justify-between">
                    <dt class="text-sm font-semibold text-black">Descripcion:</dt>
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <p class="mt-2 text-sm font-semibold text-heading text-gray-400">Descripcion Lorem ipsum dolor
                        sit
                        amet consectetur.</p>
                </div>
                <div class="mt-2 flex items-center justify-between">
                    <dt class="text-sm font-semibold text-black">Envio:</dt>
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <p class="mt-2 text-sm font-semibold text-heading text-gray-400">Descripcion Lorem ipsum dolor
                        sit
                        amet consectetur.</p>
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <p class="mt-2 text-sm font-semibold text-heading text-red-400">Recuerda guardar tu comprobante,
                        no
                        se sabe cuando sera necesario</p>
                    <p class="mt-2 text-sm font-semibold text-heading text-red-400">Comentanos en cualquier momento
                        si
                        notas algo extraÃ±o en tu proceso!</p>
                </div>
                <div class="mt-6 flex flex-col space-y-2">
                    <button type="button"
                        class="inline-flex cursor-pointer items-center justify-center rounded-xl border-2 border-critical bg-critical px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:border-critical-accent hover:bg-critical-accent focus:outline-none focus:ring-2 focus:ring-orange-400/80 focus:ring-offset-0 disabled:opacity-30 disabled:hover:border-critical disabled:hover:bg-critical disabled:hover:text-white dark:focus:ring-white/80">
                        Descargar comprobante
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>