<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCiudadesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idciudad')->comment('Id');
            $table->unsignedInteger('idmunicipio')->index()->nullable()->comment('Municipio');
            $table->unsignedInteger('idestado')->index()->nullable()->comment('Estado');
            $table->string('ciudad', 255)->comment('Ciudad');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios');
            $table->foreign('idestado')->references('idestado')->on('estados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
