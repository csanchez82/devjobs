<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        @forelse ($vacantes as $vacante)
            <div class="max-w-sm p-6 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <a href="#" class="block mb-2">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $vacante->titulo }}
                    </h5>
                </a>
                <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">{{ $vacante->descripcion }}</p>
                <div class="flex justify-between items-center mb-4">
                    <p class="text-sm font-bold text-gray-500 dark:text-gray-300">Empresa: {{ $vacante->empresa }}</p>
                    <p class="text-sm font-bold text-gray-500 dark:text-gray-300">
                        Fecha límite: {{ \Carbon\Carbon::parse($vacante->ultimo_dia)->format('d/m/Y') }}
                    </p>
                </div>
                <div class="flex space-x-4">
                    <a href="#"
                        class="flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Candidatos
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-lg hover:text-white hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Editar
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-lg hover:text-white hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Eliminar
                    </a>
                </div>
            </div>
        @empty
            <p>No hay vacantes</p>
        @endforelse
    </div>
    <div class="flex justify-center mt-10">
        {{ $vacantes->links() }}
    </div>
</div>
