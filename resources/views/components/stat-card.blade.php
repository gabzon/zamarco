<div class="px-4 pb-3">
    <dt class="text-base font-normal text-gray-900 flex justify-between">
        {{ $title }}
        {{-- <div
            class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
            @include('icons.up-arrow')
            <span class="sr-only">
                Increased by
            </span>
            2.02%
        </div> --}}
    </dt>
    <dd class="mt-1 items-baseline md:block">
        <div class="items-baseline text-2xl font-semibold text-indigo-600">
            {{ $currency == 'usd' ? '$':'€' }} {{ number_format($total, 2, '.', '\'') }}
        </div>
        <div class="text-sm font-medium text-gray-500 inline-flex items-center">
            <span class="inline-flex text-green-500">@include('icons.up-arrow')
                {{ number_format($income, 2, '.', '\'') }}</span>
            <span class="ml-2 inline-flex text-red-500">@include('icons.down-arrow')
                {{ number_format($expenses, 2, '.', '\'') }}</span>
        </div>
    </dd>
</div>