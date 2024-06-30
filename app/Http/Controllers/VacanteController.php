<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VacanteController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vacantes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implementar lógica para almacenar una nueva vacante
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacante $vacante)
    {
        return view('vacantes.show', compact('vacante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacante $vacante)
    {
        try {
            $this->authorize('update', $vacante);
            return view('vacantes.edit', compact('vacante'));
        } catch (\Exception $e) {
            abort(403, 'No tienes permiso para editar esta vacante.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacante $vacante)
    {
        $this->authorize('update', $vacante);

        // Implementar lógica para actualizar la vacante
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacante $vacante)
    {
        $this->authorize('delete', $vacante);

        // Implementar lógica para eliminar la vacante
    }
}
