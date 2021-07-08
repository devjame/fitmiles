<?php

namespace App\Http\Controllers;

use App\Models\Treinador;
use Illuminate\Http\Request;

class TreinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treinadores = Treinador::all();
        // dd($treinadores);
        return view('treinadores.index', ['treinadores' => $treinadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinadores.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Treinador $treinador)
    {
        $validated = $request->validate([
            'nome' => ['required', 'max:255'],
            'email' => ['required', 'unique:email', 'max:255'],
            'telemovel' => 'required',
            'nif' => ['required', 'max:9'],
            'genero' => ['required'],
            'data_NS' => ['required', 'date']
        ]);

        $request->user()->treinadores()->create([
            'nome_completo' => $request->nome,
            'email' => $request->email,
            'NIF' => $request->nif,
            'telemovel' => $request->telemovel,
            'genero' => $request->genero,
            'data_de_nascimento' => $request->data_NS,
            'endereco' => $request->address
        ]);

        $treinador->refresh();
        return redirect()->route('treinadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Treinador $treinador
     * @return \Illuminate\Http\Response
     */
    public function edit(Treinador $treinador)
    {
        return view('treinadores.editar', compact('treinador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Treinador $treinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treinador $treinador)
    {
        $treinador->update($request->validated());
        $treinador->refresh();
        return redirect()->route('treinadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Treinador $treinador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treinador $treinador)
    {
        $treinador->delete();
        $treinador->refresh();
        return redirect()->route('treinadores.index');
    }
}
