<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use App\Models\Mensalidade;
use App\Models\Modalidade;
use App\Models\Treinador;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $treinadores = Treinador::all()->count();
        $membros = Membro::all()->count();
        $planos = Mensalidade::all()->count();
        $modalidades = Modalidade::all()->count();
        return view('dashboard', ['membros' => $membros, 'treinadores' => $treinadores, 'planos' => $planos, 'modalidades' => $modalidades]);
    }
}
