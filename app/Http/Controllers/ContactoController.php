<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; #manual
use App\Mail\MensajeRecibido; #manual

class ContactoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * llenar formulario contacto
     */
    
       public function store(Request $request)
    {

        $mensaje =request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu correo',
            'asunto.required' => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje',
        ]);

        // primer metodo $details = $request->only(['nombre', 'email', 'asunto', 'mensaje']);
        //segundo metodo mejorado
        Mail::to('t512700220@unitru.edu.pe')->queue(new MensajeRecibido($mensaje));
        // return view('mensaje.enviado', ['nombre' => $mensaje['nombre']]);
        return back()->with('nombre', $mensaje['nombre']);
        
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
