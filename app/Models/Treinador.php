<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Treinador extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'treinadores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_completo',
        'email',
        'NIF',
        'telemovel',
        'endereco',
        'genero',
        'data_de_nascimento',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
