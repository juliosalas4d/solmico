<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParametrosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idparam')->comment('Id');
            $table->string('parametro', 50)->comment('Parámetro');
            $table->unsignedInteger('idunidad')->index()->comment('Unidad');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idunidad')->references('idunidad')->on('unidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
