<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use App\Models\Treinador;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membros = Membro::all();
        // dd($membros);
        return view('membros.index', ['membros' => $membros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membros.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Membro $membro)
    {
        $validated = $request->validate([
            'nome' => ['required', 'max:255'],
            'email' => ['required', 'unique:email', 'max:255'],
            'telemovel' => ['required', 'numeric'],
            'nif' => ['required', 'max:9'],
            'genero' => ['required'],
            'data_NS' => ['required', 'date']
        ]);

        $request->user()->membros()->create([
            'nome_completo' => $request->nome,
            'email' => $request->email,
            'NIF' => $request->nif,
            'telemovel' => $request->telemovel,
            'genero' => $request->genero,
            'data_de_nascimento' => $request->data_NS,
            'endereco' => $request->address,
        ]);
        $membro->refresh();
        return redirect()->route('membros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Membro $membro
     * @return \Illuminate\Http\Response
     */
    public function show(Membro $membro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Membro $membro
     * @return \Illuminate\Http\Response
     */
    public function edit(Membro $membro)
    {
        return view('membros.editar', compact('membro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Membro $membro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membro $membro)
    {
        $membro->update($request->validated());
        $membro->refresh();
        return redirect()->route('membros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Membro $membro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membro $membro)
    {
        $membro->delete();
        $membro->refresh();
        return redirect()->route('membros.index');
    }
}
