<?php

namespace App\Http\Controllers;

use App\Models\Mensalidade;
use Illuminate\Http\Request;

class MensalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensalidades = Mensalidade::all();
        // dd($mensalidades);
        return view('mensalidades.index', ['mensalidades' => $mensalidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensalidades.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mensalidade $mensalidade)
    {
        $validated = $request->validate([
            'nome' => ['required', 'max:255'],
            'descricao' => ['required', 'max:255'],
            'duracao' => ['required'],
            'montante' => ['required', 'numeric'],
        ]);

        $request->user()->mensalidades()->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'montante' => $request->montante,
            'duracao' => $request->duracao,
        ]);

        $mensalidade->refresh();
        return redirect()->route('planos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Mensalidade $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function show(Mensalidade $mensalidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  mensalidade $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensalidade $mensalidade)
    {
        return view('mensalidades.editar', compact('mensalidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Mensalidade $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensalidade $mensalidade)
    {
        $mensalidade->update($request->validated());
        $mensalidade->refresh();
        return redirect()->route('planos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Mensalidade $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensalidade $mensalidade)
    {
        $mensalidade->delete();
        $mensalidade->refresh();
        return redirect()->route('planos.index');
    }
}
