<div>



    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3 lg:grid-cols-4">
        <div class="relative bg-white pt-5 px-4 shadow rounded-lg overflow-hidden">
            <x-stat-card title="Total en efectivo" porcentage="" currency="usd" income="{{ $sumCashInUSD }}"
                expenses="{{ $sumCashOutUSD }}" total="{{ $totalCashUSD }}" />
        </div>

        <div class="relative bg-white pt-5 px-4 shadow rounded-lg overflow-hidden">
            <x-stat-card title="Total Zelle" porcentage="2.5" currency="usd" income="{{ $sumBankInUSD }}"
                expenses="{{ $sumBankOutUSD }}" total="{{ $totalBankUSD }}" />
        </div>

        <div class="relative bg-white pt-5 px-4 shadow rounded-lg overflow-hidden">
            <x-stat-card title="Total Euros" porcentage="2.5" currency="eur" income="{{ $sumInEur }}"
                expenses="{{ $sumOutEur }}" total="{{ $totalEur }}" />
        </div>

    </div>


    {{-- @include('livewire.monthlyTable') --}}

</div>