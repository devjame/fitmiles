<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalidades = Modalidade::all();
        // dd($modalidades);
        return view('modalidades.index', ['modalidades' => $modalidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modalidades.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Modalidade $modalidade)
    {
        $validated = $request->validate([
            'nome' => ['required', 'max:255'],
            'descricao' => ['required', 'max:255'],
            'status' => ['required'],
        ]);

        $modalidade->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        $modalidade->refresh();
        return redirect()->route('modalidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Modalidade $modalidade
     * @return \Illuminate\Http\Response
     */
    public function show(Modalidade $modalidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Modalidade $modalidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Modalidade $modalidade)
    {
        return view('modalidades.editar', compact('modalidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modalidade $modalidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modalidade $modalidade)
    {
        $modalidade->update($request->validated());
        $modalidade->refresh();
        return redirect()->route('modalidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Modalidade $modalidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modalidade $modalidade)
    {
        $modalidade->delete();
        $modalidade->refresh();
        return redirect()->route('modalidades.index');
    }
}
