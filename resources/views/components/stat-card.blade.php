<div>
    <div class="px-4 py-5 sm:p-6">
        <dt class="text-base font-normal text-gray-900 flex justify-between">
            {{ $title }}
            <div
                class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
                @include('icons.up-arrow')
                <span class="sr-only">
                    Increased by
                </span>
                2.02%
            </div>
        </dt>
        <dd class="mt-1 items-baseline md:block">
            <div class="items-baseline text-2xl font-semibold text-indigo-600">
                {{ $currency == 'usd' ? '$':'€' }} {{ number_format($total, 2, '.', '\'') }}
            </div>
            <span class="text-sm font-medium text-gray-500 inline-flex items-center">
                @include('icons.up-arrow') {{ number_format($income, 2, '.', '\'') }} <span
                    class="ml-2 inline-flex">@include('icons.down-arrow')
                    {{ number_format($expenses, 2, '.', '\'') }}</span>
            </span>
        </dd>
    </div>
</div>



{{-- <div class="flex flex-col bg-white overflow-hidden shadow rounded-lg">
    <div class="flex-grow px-4 py-4 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900 pb-3 flex justify-between">
            {{ $title }}
<div
    class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
    <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"
        aria-hidden="true">
        <path fill-rule="evenodd"
            d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
            clip-rule="evenodd" />
    </svg>
    <span class="sr-only">
        Increased by
    </span>
    12%
</div>
</h3>
<div class="flex items-start">
    <div class="flex-shrink-0 {{ $currency == 'usd' ? 'bg-green-600':'bg-blue-700' }} rounded-md py-1 px-2">
        @if ($currency == 'usd')
        <span class="material-icons mt-2 text-white">
            attach_money
        </span>
        @endif
        @if ($currency == 'eur')
        <span class="material-icons text-white mt-2">
            euro
        </span>
        @endif
    </div>
    <div class="ml-5 w-0 flex-1">

        <dt class="text-sm font-medium text-gray-500 truncate">
            Ingresos
        </dt>
        <dd class="flex items-baseline">
            <div class="text-md font-normal text-gray-600">
                + {{ number_format($income, 2, '.', '\'') }}
            </div>
        </dd>

        <dt class="text-sm font-medium text-gray-500 truncate">
            Gastos
        </dt>
        <dd class="flex items-baseline">
            <div class="text-md font-normal text-red-600">
                - {{ number_format($expenses, 2, '.', '\'') }}
            </div>
        </dd>
    </div>
</div>
</div>
<div class="bg-gray-50 px-4 py-3 sm:px-6">
    <div class="flex justify-between items-center">
        <div class="text-sm font-medium text-gray-500 truncate uppercase">
            Total
        </div>
        <div class="flex items-baseline justify-between">
            <div class="text-xl font-bold {{ $currency == 'usd' ? 'text-green-600':'text-blue-700'}}">
                {{ $currency == 'usd' ? '$':'€' }} {{ number_format($total, 2, '.', '\'') }}
            </div>
        </div>
    </div>
</div>
</div> --}}