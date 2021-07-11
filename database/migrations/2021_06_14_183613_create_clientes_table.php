<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono')->nullable(true);
            $table->string('zona')->nullable(true);
            $table->string('localidad')->nullable(true)->default('Arrecife');
            $table->string('forma_pago');
            $table->string('tipo_cliente');
            $table->string('dia_reparto')->nullable(true)->default('sin dia');
            $table->string('frequencia_reparto')->nullable(true)->default('otros');
            $table->string('condiciones')->nullable(true);
            $table->string('observaciones')->nullable(true);
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
        Schema::dropIfExists('clientes');
    }
}
