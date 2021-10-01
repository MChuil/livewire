<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->text('domicilio', 500);
            $table->string('ciudad', 100);
            $table->string('cp', 10);
            $table->string('telefono', 10)->nullable();
            $table->string('propietario', 100);
            $table->string('web', 100)->nullable();
            $table->string('logotipo', 150)->nullable();
            $table->string('rfc', 20)->nullable();
            $table->string('razonsocial', 25)->nullable();
            $table->string('regimen', 100)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
