<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md">
                    <div class="flex items-center">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 12h2v2h-2v-2zm0-8h2v6h-2V4zm10 14H0v-2h20v2zm-2-6H2V4h16v10z" />
                            </svg></div>
                        <div>
                            <p class="font-bold">{{ session('mensaje') }}</p>
                        </div>
                    </div>
                </div>
            @endif


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Mis Vacantes') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
