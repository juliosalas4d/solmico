<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParamxprodMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paramxprod', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpxp')->comment('Id');
            $table->unsignedInteger('idproducto')->index()->comment('Producto');
            $table->unsignedInteger('idparam')->index()->comment('Parámetro');
            $table->string('metodo', 50)->comment('Método de ensayo');
            $table->double('min', 10,3)->comment('Mínimo');
            $table->double('max', 10,3)->comment('Máximo');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->foreign('idparam')->references('idparam')->on('parametros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paramxprod');
    }
}
