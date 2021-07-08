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
        return view('treinadores', ['treinadores' => $treinadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('component.dialog');
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
            'nome_completo' => 'required',
            'email' => 'required|unique:email'
        ]);

        $request()->user()->treinadores()->create([
            'nome_completo' => $request('nome_completo'),
            'email' => $request('email'),
            'NIF' => $request('nif'),
            'telemovel' => $request('telemovel'),
            'genero' => $request('genero'),
            'endereco' => $request('address')
        ]);
        return back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('treinadores');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
