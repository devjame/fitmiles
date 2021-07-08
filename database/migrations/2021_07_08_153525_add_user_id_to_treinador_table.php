<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToTreinadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treinadores', function (Blueprint $table) {
            $table->date('data_de_nascimento')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('treinadores', function (Blueprint $table) {
            $table->dropColumn(['data_de_nascimento', 'user_id']);
        });
    }
}
