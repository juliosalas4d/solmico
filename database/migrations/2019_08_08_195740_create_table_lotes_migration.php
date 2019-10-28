<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLotesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idlote')->comment('Id');
            $table->string('lote', 25)->comment('Lote');
            $table->date('fecha', 25)->comment('Fecha');
            $table->unsignedInteger('idproducto')->index()->comment('Producto');
            $table->unsignedInteger('idunidad')->index()->comment('Unidad');
            $table->double('cant', 12, 2)->comment('Cantidad');
            $table->unsignedInteger('idparam1')->index()->nullable()->comment('Parámetro 1');
            $table->double('valor1', 10, 2)->nullable()->comment('Valor Parámetro 1');
            $table->unsignedInteger('idparam2')->nullable()->nullable()->comment('Parámetro 2');
            $table->double('valor2', 10, 2)->nullable()->comment('Valor Parámetro 2');
            $table->unsignedInteger('idparam3')->index()->nullable()->comment('Parámetro 3');
            $table->double('valor3', 10, 2)->nullable()->comment('Valor Parámetro 3');
            $table->unsignedInteger('idparam4')->index()->nullable()->comment('Parámetro 4');
            $table->double('valor4', 10, 2)->nullable()->comment('Valor Parámetro 4');
            $table->unsignedInteger('idparam5')->index()->nullable()->comment('Parámetro 5');
            $table->double('valor5', 10, 2)->nullable()->comment('Valor Parámetro 5');
            $table->unsignedInteger('idparam6')->index()->nullable()->comment('Parámetro 6');
            $table->double('valor6', 10, 2)->nullable()->comment('Valor Parámetro 6');
            $table->unsignedInteger('idparam7')->index()->nullable()->comment('Parámetro 7');
            $table->double('valor7', 10, 2)->nullable()->comment('Valor Parámetro 7');
            $table->unsignedInteger('idparam8')->index()->nullable()->comment('Parámetro 8');
            $table->double('valor8', 10, 2)->nullable()->comment('Valor Parámetro 8');
            $table->unsignedInteger('idparam9')->index()->nullable()->comment('Parámetro 9');
            $table->double('valor9', 10, 2)->nullable()->comment('Valor Parámetro 9');
            $table->unsignedInteger('idparam10')->index()->nullable()->comment('Parámetro 10');
            $table->double('valor10', 10, 2)->nullable()->comment('Valor Parámetro 10');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->foreign('idunidad')->references('idunidad')->on('unidad');
            $table->foreign('idparam1')->references('idparam')->on('parametros');
            $table->foreign('idparam2')->references('idparam')->on('parametros');
            $table->foreign('idparam3')->references('idparam')->on('parametros');
            $table->foreign('idparam4')->references('idparam')->on('parametros');
            $table->foreign('idparam5')->references('idparam')->on('parametros');
            $table->foreign('idparam6')->references('idparam')->on('parametros');
            $table->foreign('idparam7')->references('idparam')->on('parametros');
            $table->foreign('idparam8')->references('idparam')->on('parametros');
            $table->foreign('idparam9')->references('idparam')->on('parametros');
            $table->foreign('idparam10')->references('idparam')->on('parametros');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes');
    }
}
