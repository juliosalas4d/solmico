<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstadosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idestado')->comment('Id Estado');
            $table->string('estado', 255)->comment('Estado');
            $table->string('iso_3166-2', 4)->nullable()->comment('Código ISO');
            $table->unsignedInteger('idpais')->index()->default(229)->comment('País');
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
        Schema::dropIfExists('estados');
    }
}
