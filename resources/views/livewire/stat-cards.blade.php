<div>
    {{-- <x-stat-card title="30" porcentage="2.5" currency="usd" income="{{ $totalCashUSD }}"
    expenses="{{ $usd30Out }}"
    total="{{ $usd30Total }}" /> --}}
    <dl x-show="tab === 'usd'"
        class="mt-1 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 md:grid-cols-4 md:divide-y-0 md:divide-x">



        {{-- <x-stat-card title="15" porcentage="2.5" currency="usd" income="{{ $usd15In }}" expenses="{{ $usd15Out }}"
        total="{{ $usd15Total }}" />

        <x-stat-card title="7" porcentage="2.5" currency="usd" income="{{ $usd7In }}" expenses="{{ $usd7Out }}"
            total="{{ $usd7Total }}" />

        <x-stat-card title="1" porcentage="2.5" currency="usd" income="{{ $usd7In }}" expenses="{{ $usd7Out }}"
            total="{{ $usd7Total }}" /> --}}
    </dl>


    <dl x-show="tab === 'eur'"
        class="mt-1 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 md:grid-cols-4 md:divide-y-0 md:divide-x">

        {{-- <x-stat-card title="30" porcentage="2.5" currency="eur" income="{{ $eur30In }}" expenses="{{ $eur30Out }}"
        total="{{ $eur30Total }}" />

        <x-stat-card title="15" porcentage="2.5" currency="eur" income="{{ $eur15In }}" expenses="{{ $eur15Out }}"
            total="{{ $eur15Total }}" />

        <x-stat-card title="7" porcentage="2.5" currency="eur" income="{{ $eur7In }}" expenses="{{ $eur7Out }}"
            total="{{ $eur7Total }}" />

        <x-stat-card title="1" porcentage="2.5" currency="eur" income="{{ $eurTodayIn }}" expenses="{{ $eurTodayOut }}"
            total="{{ $eurTodayTotal }}" /> --}}
    </dl>
    {{ $totalCashUSD }}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        @foreach ($transactionsByMonths as $item => $key)
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($loop->first)
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Year
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Enero
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Febrero
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Marzo
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Abril
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mayo
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Junio
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Julio
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Agosto
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Septiembre
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Octobre
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Noviembre
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Diciembre
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            @endif
                            <tr>
                                <td
                                    class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ $item }}
                                </td>
                                @php
                                $table = $key->toArray();
                                @endphp
                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('1', $table))
                                    {{ $key['1'][0] - $key['1'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('2',$table) )
                                    {{ $key['2'][0] - $key['2'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('3',$table) )
                                    {{ $key['3'][0] - $key['3'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('4',$table) )
                                    {{ $key['4'][0] - $key['4'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('5',$table) )
                                    {{ $key['5'][0] - $key['5'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('6',$table) )
                                    {{ $key['6'][0] - $key['6'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('7',$table) )
                                    {{ $key['7'][0] - $key['7'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('8',$table) )
                                    {{ $key['8'][0] - $key['8'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('9',$table) )
                                    {{ $key['9'][0] - $key['9'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('10',$table) )
                                    {{ $key['10'][0] - $key['10'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('11',$table) )
                                    {{ $key['11'][0] - $key['11'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">
                                    @if (array_key_exists('12',$table) )
                                    {{ $key['12'][0] - $key['12'][1] }}
                                    @endif
                                </td>

                                <td class="p-2 whitespace-nowrap text-xs text-gray-500">

                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- {{ DateTime::createFromFormat('!m', $month)->format('F') }} --}}

{{-- {{   }} --}}