<div class="profile-pet absolute z-30"
    style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; text-align: center;">
    <section class="bg-white" style="text-align: center;">
        <div wire:click='closePet' class="cursor-pointer flex text-center justify-end items-center">
            <box-icon name='exit'></box-icon>
        </div>
        <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12" bis_skin_checked="1">
            <img src="{{asset('storage/pets/'. $photo)}}" alt="" class="w-32 h-32 mx-auto rounded-full aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-700" bis_skin_checked="1">
                <div class="my-2 space-y-1" bis_skin_checked="1">
                    <h2 class="text-xl font-semibold sm:text-2xl"></h2>
                    <p class="px-5 text-xs sm:text-base ">{{$name}}</p>
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900">{{$animal_id}} - {{$race_id}}</div>
                    </div>
                </div>
                <div class="flex flex-col justify-center pt-2 space-x-4 align-center" bis_skin_checked="1">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <p class="px-5 text-xs sm:text-base ">Edad: {{$age}} (Años)</p>
                        <p class="px-5 text-xs sm:text-base ">Meses: {{$age*12}} (Meses)</p>
                        <p class="px-5 text-xs sm:text-base ">¿Esta vacunado? <b>{{$is_vaccinated}}</b></p>
                        <p class="px-5 text-xs sm:text-base "></p>
                        <p class="px-5 text-xs sm:text-base "></p>
                    </div>
                </div>
                <div class="flex flex-col justify-center pt-2 space-x-4 align-center" bis_skin_checked="1">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <button
                            class="text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-2 py-1  rounded-full outline-none focus:outline-none ease-linear transition-all duration-150"
                            type="button">Timido</button>
                        <button
                            class="text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-2 py-1  rounded-full outline-none focus:outline-none ease-linear transition-all duration-150"
                            type="button">Timido</button>
                        <button
                            class="text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-2 py-1  rounded-full outline-none focus:outline-none ease-linear transition-all duration-150"
                            type="button">Timido</button>
                        <button
                            class="text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase text-sm px-2 py-1  rounded-full outline-none focus:outline-none ease-linear transition-all duration-150"
                            type="button">Timido</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>