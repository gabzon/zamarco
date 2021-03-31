<x-app-layout>

    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    {{ __('Transaction') }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ route('transaction.edit', $transaction) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Editar
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 flex justify-between">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Transaccion ID: {{ $transaction->id }}
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Detalles de la transaccion.
                        </p>
                    </div>
                    <div class="text-2xl">
                        @if ($transaction->type == 'in')
                        <b class="text-green-700 inline-flex items-center">
                            @include('icons.in')
                            {{ $transaction->amount }}
                            <span class="uppercase ml-1">
                                @if ($transaction->currency == 'usd')
                                @include('icons.dollar')
                                @else
                                @include('icons.euro')
                                @endif
                            </span>
                        </b>
                        @else
                        <b class="text-red-700 inline-flex items-center">
                            @include('icons.out')
                            {{ $transaction->amount }}
                            <span class="ml-1">
                                @if ($transaction->currency == 'usd')
                                @include('icons.dollar')
                                @else
                                @include('icons.euro')
                                @endif
                            </span>
                        </b>
                        @endif
                    </div>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Fecha
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->date }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Tipo de transaccion
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->type == 'in' ? 'Ingreso (in)' : 'Gasto (out)' }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Servicio/Factura
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->service }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Cedula
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->cedula }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Empresa
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->company->name }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Agregado por
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->author->name }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Cambio
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->exchange }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Factura
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->invoice }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Monto en bolivares
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->amount * $transaction->exchange }} BsF
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                Description
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $transaction->description }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>