<div class="relative flex justify-end items-center" x-data="{ showActions: false }">
    <button id="project-options-menu-0" aria-has-popup="true" type="button" @click="showActions = true"
        class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition ease-in-out duration-150">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
        </svg>
    </button>
    <!-- Dropdown panel, show/hide based on dropdown state.-->
    <!-- Entering: "transition ease-out duration-100" From: "transform opacity-0 scale-95" To: "transform opacity-100 scale-100"-->
    <!--  Leaving: "transition ease-in duration-75" From: "transform opacity-100 scale-100" To: "transform opacity-0 scale-95" -->

    <div class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10" x-show="showActions"
        @click.away="showActions =  false">
        <div class="z-10 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
            aria-labelledby="project-options-menu-0">
            <div class="py-1">
                <a href="{{ route('transaction.show', $transaction) }}"
                    class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                    role="menuitem">
                    @include('icons.view', ['style'=>'mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500
                    group-focus:text-gray-500'])
                    Ver
                </a>

                <a href="{{ route('transaction.edit', $transaction) }}"
                    class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                    role="menuitem">
                    @include('icons.edit',['style'=>'mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500
                    group-focus:text-gray-500'])
                    Editar
                </a>
                <button wire:click="delete({{ $transaction->id }})" type="submit"
                    class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                    onclick="confirm('Are you sure you want to delete this course?') || event.stopImmediatePropagation()">
                    @include('icons.garbage', ['style'=>'mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500
                    group-focus:text-gray-500'])
                    Eliminar
                </button>
            </div>
        </div>
    </div>
</div>