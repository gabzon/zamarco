<div>
    <button type="button" wire:click="resetPassword"
        class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Reiniciar la contraseña del usuario
    </button>
    @if (session()->has('success'))
    <span class="text-green-600 text-xs">{{ session()->get('success') }}</span>
    @endif
</div>