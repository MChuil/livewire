<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('telefono')->nullable();
            $table->enum('perfil',['ADMINISTRADOR', 'SUPERVISOR', 'CAJERO'])->default('CAJERO');
            $table->integer('intentos')->default(0);
            $table->date('ultimo_intento')->nullable();
            $table->string('imagen', 255)->nullable();
            $table->integer('webmaster')->default(0);
            $table->enum('estado',['ACTIVO', 'BLOQUEADO', 'ELIMINADO'])->default('ACTIVO');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
