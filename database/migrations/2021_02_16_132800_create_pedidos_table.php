<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('cliente_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mesa_id')->nullable()->constrained()->cascadeOnDelete();
            $table->uuid('uuid');
            $table->double('valor', 10, 2)->nullable();
            $table->string('comentario')->nullable();
            $table->enum('status', ["ABERTO","FECHADO","FAZENDO","REJEITADO","CANCELADO","ENTREGA"]);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
