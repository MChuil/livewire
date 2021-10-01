<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('empresa', 250)->unique();
            $table->text('domicilio');
            $table->string('telefono', 10);
            $table->string('telefono_dos', 10)->nullable();
            $table->string('ciudad', 50);
            $table->integer('codigo_postal');
            $table->string('rfc', 30);
            $table->string('email', 100);
            $table->string('cta_primaria', 30)->nullable();
            $table->string('sucursal_prim', 50)->nullable();
            $table->string('cta_secundaria', 30)->nullable();
            $table->string('sucursal_sec', 50)->nullable();
            $table->text('observaciones')->nullable();
            $table->string('contacto', 100);
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
        Schema::dropIfExists('proveedores');
    }
}
