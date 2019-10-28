<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChoferesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choferes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cedcho')->primary()->comment('Cédula');
            $table->string('nombre', 100)->comment('Nombres y Apellidos');
            $table->unsignedInteger('idpais')->index()->nullable()->default(229)->comment('País de origen');
            $table->string('tel', 50)->nullable()->comment('Teléfonos');
            $table->string('email', 50)->nullable()->comment('Email');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idpais')->references('idpais')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choferes');
    }
}
