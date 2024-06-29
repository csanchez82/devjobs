<form class="md:w-1/2 space-y-5" wire:submit.prevent="crearVacante">


    <div>
        <x-input-label for="titulo" :value="__('Título')" />
        <x-text-input placeholder="Título de la Vacante" id="titulo" class="block mt-1 w-full" type="text"
            wire:model="titulo" :value="old('titulo')" />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="salario" :value="__('Salario')" />
        <select wire:model="salario" id="salario"
            class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option value="">--Seleccionar Salario--</option>
            @foreach ($Salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select wire:model="categoria" id="categoria"
            class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option value="">--Seleccionar Categoría--</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input placeholder="Nombre de la Empresa ej. Google" id="empresa" class="block mt-1 w-full"
            type="text" wire:model="empresa" :value="old('empresa')" />
        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"
            :value="old('ultimo_dia')" />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />
        <textarea wire:model="descripcion" id="descripcion" placeholder="Descripción general del puesto"
            class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" accept="image/*" class="block mt-1 w-full" type="file" wire:model="imagen" />
        <div class="my-5 w-20">
            @if ($imagen)
                <img src="{{ $imagen->temporaryUrl() }}" alt="">
            @endif
        </div>
        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-secondary-button>
        Crear Vacante
    </x-secondary-button>

</form>
