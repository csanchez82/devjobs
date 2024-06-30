<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string|min:5|max:50',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        //Almacenar imagen
        $imagen = $this->imagen->store('public/vacantes');
        $nombre_imagen = str_replace('public/vacantes/', '', $imagen);
        //dd($nombre_imagen);

        //Crear Vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $nombre_imagen,
            'user_id' => auth()->user()->id,
        ]);

        //Crear mensaje de éxito
        session()->flash('mensaje', 'Vacante creada con éxito');

        //Redireccionar
        return redirect()->route('vacantes.index');
    }
    public function render()
    {
        //Consultar Base de datos
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'Salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
