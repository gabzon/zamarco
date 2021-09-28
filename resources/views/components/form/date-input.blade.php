<div x-data="{ picker: @entangle($name) }"
    x-init="new Pikaday({ field: $refs.datepicker, format: 'YYYY-MM-DD'}).toString('YYYY-MM-DD')"
    x-on:change="picker = $event.target.value">
    <label for="{{ $label }}" class="block text-sm font-medium text-gray-700 capitalize">
        {{ $label ?? $name }}
    </label>
    <div class="mt-1">
        <input x-bind:value="picker" x-ref="datepicker" name="{{ $name }}" id="datepicker" type="text"
            class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('date') border-red-600 @enderror @error($name) border-red-600 @enderror">
        @if ($description)
        <p class="mt-1 text-sm text-gray-500">
            {{ $description }}
        </p>
        @endif
    </div>
    <p class="mt-1 text-sm text-gray-500">
        Formato aaaa-mm-dd
    </p>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>