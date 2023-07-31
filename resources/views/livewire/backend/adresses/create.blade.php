<div>
    <section class="p-6 dark:bg-gray-800 dark:text-gray-50">
        <form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                <div class="space-y-2 col-span-full lg:col-span-1" bis_skin_checked="1">
                    <p class="font-medium">Informacion de usuario</p>
                    <p class="text-xs">Adjunta aqui tu info:</p>
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3" bis_skin_checked="1">
                    <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                        <label for="username" class="text-sm">Nombres</label>
                        <input id="username" type="text" placeholder="Angelo"
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                        <label for="username" class="text-sm">Apellidos</label>
                        <input id="username" type="text" placeholder="Acevedo"
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                        <label for="username" class="text-sm">Numero de Telefono</label>
                        <input id="username" type="number" placeholder="302350****"
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                        <label for="username" class="text-sm">Tipo de identificacion</label>
                        <select id="quantity" name="quantity" wire:model="quantity"
                            class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="Todas">Elija una opcion</option>
                            <option value="Hoy">CC</option>
                            <option value="semana">TI</option>
                        </select>
                    </div>
                    <div class="col-span-full sm:col-span-3" bis_skin_checked="1">
                        <label for="username" class="text-sm">Numero de documento:</label>
                        <input id="username" type="number" placeholder="10001****"
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                </div>
            </fieldset>
            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                <div class="space-y-2 col-span-full lg:col-span-1" bis_skin_checked="1">
                    <p class="font-medium">Informacion de Entrega</p>
                    <p class="text-xs">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3" bis_skin_checked="1">
                    <div class="col-span-full" bis_skin_checked="1">
                        <label for="address" class="text-sm">Direccion</label>
                        <input id="address" type="text" placeholder=""
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full sm:col-span-2" bis_skin_checked="1">
                        <label for="city" class="text-sm">Ciudad</label>
                        <input id="city" type="text" placeholder=""
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full sm:col-span-2" bis_skin_checked="1">
                        <label for="state" class="text-sm">Departamento</label>
                        <input id="state" type="text" placeholder=""
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full sm:col-span-2" bis_skin_checked="1">
                        <label for="zip" class="text-sm">Codigo postal</label>
                        <input id="zip" type="text" placeholder=""
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
                    </div>
                    <div class="col-span-full" bis_skin_checked="1">
                        <label for="bio" class="text-sm">Informacion Extra (Edificio,Casa, Apartamento)</label>
                        <textarea id="bio" placeholder=""
                            class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900"></textarea>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</div>