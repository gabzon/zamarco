<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('company.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="space-y-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre de la empresa</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                placeholder="Soteinca">
                        </div>
                    </div>

                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">Ciudad</label>
                        <div class="mt-1">
                            <input type="text" name="city" id="city"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                placeholder="Puerto Ordaz">
                        </div>
                    </div>

                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Guardar</button>

                </div>


            </form>
        </div>
    </div>
</x-app-layout>