<form class="md:w-1/2 space-y-5">


    <div>
        <x-input-label for="titulo" :value="__('Título')" />
        <x-text-input placeholder="Título de la Vacante" id="titulo" class="block mt-1 w-full" type="text"
            name="titulo" :value="old('titulo')" />
    </div>


    <div>
        <x-input-label for="salario" :value="__('Salario')" />
        <select name="salario" id="salario"
            class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option value="">--Seleccionar Salario--</option>
            @foreach ($Salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select name="categoria" id="categoria"
            class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option value="">--Seleccionar Categoría--</option>
            <option value="1">Desarrollador - Obtener Empleo</option>
            <option value="2">Reclutador - Publicar Empleo</option>
        </select>
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input placeholder="Nombre de la Empresa ej. Google" id="empresa" class="block mt-1 w-full"
            type="text" name="empresa" :value="old('empresa')" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />
        <textarea name="descripcion" id="descripcion" placeholder="Descripción general del puesto"
            class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" />
    </div>

    <x-secondary-button>
        Crear Vacante
    </x-secondary-button>

</form>
