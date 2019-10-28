<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVehiculosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('placas', 8)->primary()->comment('Placas');
            $table->string('descri', 50)->comment('Descripción');
            $table->unsignedInteger('idtiptra')->index()->comment('Tipo de Transporte');
            $table->unsignedInteger('idtransp')->index()->comment('Transportista');
            $table->string('clase', 50)->nullable()->comment('Clase');
            $table->string('marca', 50)->nullable()->comment('Marca');
            $table->string('ano', 4)->nullable()->comment('Año');
            $table->double('capacidad', 10, 2)->nullable()->comment('Capacidad');
            $table->unsignedInteger('idunidad')->index()->comment('Unidad');
            $table->string('color', 50)->nullable()->comment('Color');
            $table->string('modelo', 50)->nullable()->comment('Modelo');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idtiptra')->references('idtiptra')->on('tipotransp');
            $table->foreign('idtransp')->references('idtransp')->on('transportistas');
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
        Schema::dropIfExists('vehiculos');
    }
}
