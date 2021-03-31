<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Agregar transaccion</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="{{ $action == 'add' ? 'add' : 'edit'}}">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">
                                    Tipo de transaccion
                                </label>
                                <fieldset>
                                    <div class="rounded-lg bg-white sm:grid sm:grid-cols-2 -space-x-py">
                                        <div
                                            class="relative flex border border-gray-100 p-2 rounded-l-md {{ $type == 'in' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-20' }} @error('type') border-red-600 bg-red-100 @enderror">
                                            <div class="flex items-center h-5">
                                                <input wire:model="type" type="radio" value="in"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 cursor-pointer border-gray-300">
                                            </div>
                                            <label for="settings-option-0" class="ml-3 flex flex-col cursor-pointer">
                                                <span
                                                    class="block text-sm font-medium {{ $type == 'in' ? 'text-indigo-900' : 'text-gray-900' }}">
                                                    Ingresos <strong class="text-xs">(in)</strong>
                                                </span>
                                            </label>
                                        </div>
                                        <div
                                            class="relative flex border border-gray-100 p-2 rounded-r-md {{ $type == 'out' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-200' }} @error('type') border-red-600 bg-red-100 @enderror">
                                            <div class="flex items-center h-5">
                                                <input wire:model="type" type="radio" value="out"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 cursor-pointer border-gray-300 ">
                                            </div>
                                            <label for="settings-option-1" class="ml-3 flex flex-col cursor-pointer">
                                                <span
                                                    class="text-sm font-medium {{ $type == 'in' ? 'text-gray-900' : 'text-indigo-900' }}">
                                                    Gastos
                                                    <strong class="text-xs">(out)</strong>
                                                </span>

                                            </label>
                                        </div>
                                    </div>
                                    @error('type')
                                    <span class="text-sm text-red-600"> {{$message }}</span>
                                    @enderror
                                </fieldset>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="date" class="block text-sm font-medium text-gray-700">Fecha</label>
                                <input type="date" wire:model="date"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('date') border-red-600 @enderror">
                                <p class="mt-1 text-sm text-gray-500">
                                    Formato aaaa-mm-dd
                                </p>
                                @error('date')
                                <span class="text-sm text-red-600"> {{$message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="amount" class="block text-sm font-medium text-gray-700">Monto</label>
                                <input type="number" wire:model="amount" step=".01"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('amount') border-red-600 @enderror">
                                @error('amount')
                                <span class="text-sm text-red-600"> {{$message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="exchange" class="block text-sm font-medium text-gray-700">
                                    Cambio
                                </label>

                                <input type="number" wire:model="exchange" step=".01"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('exchange') border-red-600 @enderror">
                                {{-- <p class="text-xs text-gray-400 mt-2">DolarToday de hoy {{ $dolarToday ?? '' }}</p>
                                --}}
                                @error('exchange')
                                <span class="text-sm text-red-600"> {{$message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="currency" class="block text-sm font-medium text-gray-700">
                                    Devisa
                                </label>
                                <select wire:model="currency"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('currency') border-red-600 @enderror">
                                    <option value="" disabled>Moneda</option>
                                    <option value="usd">USD (dolares)</option>
                                    <option value="eur">EUR (euros)</option>
                                    <option value="cop">COP (pesos colombianos)</option>
                                    <option value="brl">BRL (reales brasileros)</option>
                                </select>
                                @error('currency')
                                <span class="text-sm text-red-600"> {{$message }}</span>
                                @enderror
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="invoice" class="block text-sm font-medium text-gray-700">
                                    Numbero de la factura/Nota de entrega
                                </label>
                                <input type="text" wire:model="invoice"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="company" class="block text-sm font-medium text-gray-700">Empresa</label>
                                <select wire:model="company"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('company') border-red-600 @enderror">
                                    <option value="" disabled>Seleccionar empresa</option>
                                    @foreach (auth()->user()->worksAt as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                                @error('company')
                                <span class="text-sm text-red-600"> {{$message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Descripcion
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="description" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">
                                    Breve descripcion de la transaccion
                                </p>
                            </div>

                            <div class="col-span-6">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">
                                    Tipo de cliente
                                </label>
                                <fieldset>
                                    <div class="rounded-lg bg-white sm:grid sm:grid-cols-2 -space-x-py">
                                        <div
                                            class="relative flex border border-gray-100 p-2 rounded-l-md {{ $clientType == 'person' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-20' }} @error('clientType') border-red-600 bg-red-100 @enderror">
                                            <div class="flex items-center h-5">
                                                <input wire:model="clientType" type="radio" value="person"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 cursor-pointer border-gray-300">
                                            </div>
                                            <label for="settings-option-0" class="ml-3 flex flex-col cursor-pointer">
                                                <span
                                                    class="block text-sm font-medium {{ $clientType == 'person' ? 'text-indigo-900' : 'text-gray-900' }}">
                                                    Persona
                                                </span>
                                            </label>
                                        </div>
                                        <div
                                            class="relative flex border border-gray-100 p-2 rounded-r-md {{ $clientType == 'business' ? 'bg-indigo-50 border-indigo-200 z-10' : 'border-gray-200' }} @error('clientType') border-red-600 bg-red-100 @enderror">
                                            <div class="flex items-center h-5">
                                                <input wire:model="clientType" type="radio" value="business"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 cursor-pointer border-gray-300 ">
                                            </div>
                                            <label for="settings-option-1" class="ml-3 flex flex-col cursor-pointer">
                                                <span
                                                    class="text-sm font-medium {{ $clientType == 'person' ? 'text-gray-900' : 'text-indigo-900' }}">
                                                    Empresa
                                                </span>

                                            </label>
                                        </div>
                                    </div>
                                    @error('clientType')
                                    <span class="text-sm text-red-600"> {{$message }}</span>
                                    @enderror
                                </fieldset>
                            </div>



                            @isset($clientType)
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contact" class="block text-sm font-medium text-gray-700">
                                    {{ $clientType == 'person' ? 'Nombre del client': 'Nombre de la empresa' }}
                                </label>
                                <input type="text" wire:model="contact"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="client_id" class="block text-sm font-medium text-gray-700">
                                    {{ $clientType == 'person' ? 'ID del cliente': 'RIF' }}
                                </label>
                                <input type="text" wire:model="client_id"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @endisset


                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-jet-button class="ml-4">
                            {{ __('Guardar') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>






{{-- $table->string('client_id')->nullable();
$table->text('description')->nullable();
$table->double('amount')->nullable();
$table->double('exchange')->nullable();
$table->string('currency')->nullable();
$table->string('contact')->nullable();
$table->string('invoice')->nullable();
$table->enum('type',['in','out'])->nullable();
$table->enum('type_of_client',['person','business'])->nullable();
$table->foreignId('user_id')->constrained();
$table->foreignId('company_id')->constrained(); --}}