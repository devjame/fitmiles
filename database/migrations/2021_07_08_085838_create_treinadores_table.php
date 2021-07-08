<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinadoresTable extends Migration
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'treinadores';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'treinador_id';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo', 128);
            $table->string('email', 128);
            $table->string('NIF', 128);
            $table->string('telemovel', 15);
            $table->text('endereco');
            $table->char('genero', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinadores');
    }
}
