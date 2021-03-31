<x-app-layout>

    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    {{ __('Tablero') }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                {{-- <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Edit
                    </button> --}}
                <a href="{{ route('transaction.create') }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Agregar transaccion
                </a>
            </div>
        </div>
    </x-slot>

    @if (auth()->user()->isAdmin())
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:stat-cards />
        </div>
    </div>
    @endif

    @if (auth()->user()->isAdmin() || auth()->user()->isManager())
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:transaction-datagrid />
        </div>
    </div>
    @endif

</x-app-layout>