<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDespachosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('Id');
            $table->integer('iddesp')->unique()->comment('Nº de Despacho');
            $table->date('fechasal')->comment('Fecha de salida');
            $table->unsignedInteger('idproducto')->index()->comment('Producto');
            $table->unsignedInteger('idlote')->index()->comment('Lote');
            $table->string('idproyecto', 10)->index()->comment('Proyecto');
            $table->string('arearec_1', 50)->comment('Area de Recepción 1');
            $table->string('arearec_2', 50)->nullable()->comment('Area de Recepción 2');
            $table->string('arearec_3', 50)->nullable()->comment('Area de Recepción 3');
            $table->double('cant_des', 10,2)->comment('Cantidad despachada');
            $table->unsignedInteger('idunidad')->index()->comment('Unidad');
            $table->double('cant_ent', 10,2)->default(0)->comment('Cantidad entregada');
            $table->unsignedInteger('idtransp')->index()->comment('Transportista');
            $table->string('placach', 8)->index()->comment('Placa Chuto');
            $table->string('placare', 8)->index()->comment('Placa Remolque');
            $table->unsignedInteger('cedcho')->index()->comment('Chofer');
            $table->string('prescintos', 100)->nullable()->comment('Prescintos');
            $table->unsignedInteger('cedaut')->index()->comment('Despachador');
            $table->string('boleto', 15)->nullable()->comment('Nº del Boleto');
            $table->double('tara', 10,2)->default(0)->comment('Peso Tara');
            $table->double('bruto', 10,2)->default(0)->comment('Peso Bruto');
            $table->string('nde', 10)->nullable()->comment('Nota de entrega');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->foreign('idlote')->references('idlote')->on('lotes');
            $table->foreign('idproyecto')->references('idproyecto')->on('proyectos');
            $table->foreign('idunidad')->references('idunidad')->on('unidad');
            $table->foreign('idtransp')->references('idtransp')->on('transportistas');
            $table->foreign('cedcho')->references('cedcho')->on('choferes');
            $table->foreign('cedaut')->references('cedaut')->on('autoriza');
            $table->foreign('placach')->references('placas')->on('vehiculos');
            $table->foreign('placare')->references('placas')->on('vehiculos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despachos');
    }
}
