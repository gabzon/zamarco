<div x-data="{ tab: 'usd' }">

    <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Reporte del mes
        </h3>
        <div class="mt-3 sm:mt-0 sm:ml-4">
            <div class="block max-w-xs">
                <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                    <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                    <button :class="{ 'active': tab === 'usd' }" @click="tab = 'usd'"
                        class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-2 px-3 text-sm font-medium text-center hover:bg-gray-50 focus:z-10"
                        aria-current="page">
                        <span>USD</span>
                        <span aria-hidden="true" :class="{ 'bg-indigo-500': tab === 'usd' }"
                            class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </button>

                    <button :class="{ 'active': tab === 'eur' }" @click="tab = 'eur'"
                        class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-2 px-3 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                        <span>EUR</span>
                        <span aria-hidden="true" :class="{ 'bg-indigo-500': tab === 'eur' }"
                            class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </button>

                </nav>
            </div>
        </div>
    </div>
    <br>
    <dl x-show="tab === 'usd'"
        class="mt-1 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 md:grid-cols-4 md:divide-y-0 md:divide-x">

        <x-stat-card title="30" porcentage="2.5" currency="usd" income="{{ $usd30In }}" expenses="{{ $usd30Out }}"
            total="{{ $usd30Total }}" />

        <x-stat-card title="15" porcentage="2.5" currency="usd" income="{{ $usd15In }}" expenses="{{ $usd15Out }}"
            total="{{ $usd15Total }}" />

        <x-stat-card title="7" porcentage="2.5" currency="usd" income="{{ $usd7In }}" expenses="{{ $usd7Out }}"
            total="{{ $usd7Total }}" />

        <x-stat-card title="1" porcentage="2.5" currency="usd" income="{{ $usd7In }}" expenses="{{ $usd7Out }}"
            total="{{ $usd7Total }}" />
    </dl>


    <dl x-show="tab === 'eur'"
        class="mt-1 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 md:grid-cols-4 md:divide-y-0 md:divide-x">

        <x-stat-card title="30" porcentage="2.5" currency="eur" income="{{ $eur30In }}" expenses="{{ $eur30Out }}"
            total="{{ $eur30Total }}" />

        <x-stat-card title="15" porcentage="2.5" currency="eur" income="{{ $eur15In }}" expenses="{{ $eur15Out }}"
            total="{{ $eur15Total }}" />

        <x-stat-card title="7" porcentage="2.5" currency="eur" income="{{ $eur7In }}" expenses="{{ $eur7Out }}"
            total="{{ $eur7Total }}" />

        <x-stat-card title="1" porcentage="2.5" currency="eur" income="{{ $eurTodayIn }}" expenses="{{ $eurTodayOut }}"
            total="{{ $eurTodayTotal }}" />
    </dl>


</div>