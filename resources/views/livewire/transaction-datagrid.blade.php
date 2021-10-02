<section id="transaction-datagrid">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Fecha
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Monto
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Servicio
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Descripcion
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Empresa
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Autor
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($transactions as $t)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $t->date->format('Y-m-d') }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ route('transaction.show', $t) }}">
                                            @if ($t->type == 'in')
                                            <div
                                                class="text-green-700 font-semibold inline-flex hover:text-green-500 hover:underline">
                                                @include('icons.up-arrow', ['style' => 'h-5 w-5'])
                                                <span class="">
                                                    {{ $t->currencySymbol }} {{ number_format($t->credit,2) }}
                                                </span>
                                            </div>
                                            @else
                                            <div
                                                class="text-red-700 inline-flex font-semibold hover:text-red-500 hover:underline">
                                                @include('icons.down-arrow')
                                                <span class="">
                                                    {{ $t->currencySymbol }}
                                                    {{ number_format($t->debit,2) }}
                                                </span>
                                            </div>
                                            @endif
                                        </a>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        @if ($t->source == 'bank')
                                        @include('icons.bank')
                                        @else
                                        @include('icons.caja')
                                        @endif
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $t->invoice }}
                                    </td>
                                    <td class="px-6 py-2 text-sm text-gray-500">
                                        {{ $t->description }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $t->company->name }}
                                    </td>
                                    <td class="px-6 py-2 text-sm text-gray-500">
                                        {{ $t->author->name }}
                                    </td>
                                    <td
                                        class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium inline-flex items-center">
                                        <div class="flex justify-end">
                                            {{-- <x-transaction-actions :t="$t" /> --}}
                                            @if (auth()->user()->isAdmin() || auth()->user()->isManager())
                                            <a href="{{ route('transaction.edit', $t) }}"
                                                class="text-gray-400 hover:text-gray-600">
                                                @include('icons.edit')
                                            </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        {{ $transactions->links()}}
    </div>
</section>