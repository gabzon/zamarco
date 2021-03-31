<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" x-data="{show:true}" x-show="show">
    <div class="rounded-md bg-green-100 p-4 shadow-lg">
        <div class="flex">
            <div class="flex-shrink-0">
                @include('icons.success')
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Exito
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        {{ session()->get('success') }}
                    </p>
                </div>
                <div class="mt-4">
                    <div class="-mx-2 -my-1.5 flex">
                        <button @click="show = false"
                            class="px-2 py-1.5 rounded-md text-sm font-semibold text-green-800 hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>