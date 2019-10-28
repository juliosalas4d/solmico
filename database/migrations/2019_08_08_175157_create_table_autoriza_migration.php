<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAutorizaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autoriza', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cedaut')->primary()->comment('Cédula');
            $table->string('nombre', 100)->comment('Nombre y Apellido');
            $table->unsignedInteger('idpais')->index()->nullable()->default(229)->comment('País de origen');
            $table->string('ger', 100)->nullable()->comment('Gerencia');
            $table->string('cargo', 50)->nullable()->comment('Cargo');
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
        Schema::dropIfExists('autoriza');
    }
}
