<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nome')->unique();
            $table->string('url')->nullable();
            $table->double('valor', 10, 2)->nullable();
            $table->text('descricao')->nullable();
            $table->enum('status', ["ATIVO","DESATIVADO","BLOQUEADO"]);
            $table->softDeletes();
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
        Schema::dropIfExists('planos');
    }
}
