<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenominacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denominacions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['BILLETE', 'MONEDA', 'OTRO'])->default('BILLETE');
            $table->string('valor', 255);
            $table->string('imagen', 100)->nullable();
            $table->timestamps();
            // 'tipo', 'valor', 'imagen'];
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denominacions');
    }
}
