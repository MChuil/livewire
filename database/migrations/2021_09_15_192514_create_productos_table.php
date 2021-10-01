<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('barcode', 100);
            $table->string('descripcion', 255);
            $table->string('imagen', 255)->nullable();

            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->enum('unidad', ['Caja', 'Unidad', 'Kilo', 'Metro', 'Gramo', 'Pieza'])->default('Unidad');
            $table->decimal('existencia', 10,2)->default(0);
            $table->decimal('precioa', 10,2);
            $table->decimal('preciob', 10,2)->default(0);
            $table->decimal('precioc', 10,2)->default(0);
            $table->decimal('preciod', 10,2)->default(0);
            $table->decimal('costo', 10,2);

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            
            $table->string('ubicacion', 255)->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('actualizable')->default(1);
            $table->integer('alerta');
            $table->integer('estado')->default(1);
            $table->string('cve_unidad')->nullable();
            $table->string('cve_prod')->nullable();
            
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('productos');
    }
}
