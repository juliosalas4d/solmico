<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParroquiasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idparroquia')->comment('Id');
            $table->unsignedInteger('idmunicipio')->index()->nullable()->comment('Municipio');
            $table->string('parroquia', 255)->comment('Parroquia');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquias');
    }
}
