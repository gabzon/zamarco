<div>

    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3 lg:grid-cols-4">
        <x-stat-card title="30" porcentage="2.5" currency="usd" income="{{ $usd30In }}" expenses="{{ $usd30Out }}"
            total="{{ $usd30Total }}" />

        <x-stat-card title="15" porcentage="2.5" currency="usd" income="{{ $usd15In }}" expenses="{{ $usd15Out }}"
            total="{{ $usd15Total }}" />

        <x-stat-card title="7" porcentage="2.5" currency="usd" income="{{ $usd7In }}" expenses="{{ $usd7Out }}"
            total="{{ $usd7Total }}" />

        <x-stat-card title="1" porcentage="2.5" currency="usd" income="{{ $usd7In }}" expenses="{{ $usd7Out }}"
            total="{{ $usd7Total }}" />

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