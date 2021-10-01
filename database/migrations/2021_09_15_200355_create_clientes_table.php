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
            $table->id();
            $table->string('nombre', 250)->unique();
            $table->text('domicilio')->nullable();
            $table->integer('telefono');
            $table->string('ciudad', 255);
            $table->string('rfc', 30)->nullable();
            $table->string('email', 100)->unique();
            $table->integer('codigo_postal')->nullable();
            $table->decimal('saldo', 10,2)->default(0);
            $table->integer('estado')->default(1);
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
