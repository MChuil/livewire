<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->decimal('total', 10,2);
            $table->decimal('efectivo', 10,2);
            $table->decimal('cambio', 10,2);
            $table->enum('tipo', ['CONTADO', 'CREDITO'])->default('CONTADO');
            $table->enum('estado', ['PAGADO', 'PENDIENTE', 'CANCELADO'])->default('PAGADO');
            $table->enum('forma_pago', ['EFECTIVO', 'TARJETA'])->default('EFECTIVO');
            $table->string('referencia', 100)->nullable();
            $table->text('observaciones')->nullable();
            $table->string('factura', 100);

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
        Schema::dropIfExists('ventas');
    }
}
