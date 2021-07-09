<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mensalidade extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'mensalidades';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'descricao',
        'montante',
        'duracao',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function membro()
    {
        return $this->belongsTo(Membro::class);
    }
}
