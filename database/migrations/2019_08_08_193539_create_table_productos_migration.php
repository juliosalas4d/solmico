<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idproducto')->comment('Id');
            $table->string('producto', 255)->comment('Producto');
            $table->unsignedInteger('idunidad')->index()->comment('Unidad');
            $table->unsignedInteger('idedofisico')->index()->comment('Estado Físico');
            //$table->enum('edofisico', ['Sólido','Semi sólido','Líquido','Gaseoso','Polvo','Otro'])->comment('Estado Físico');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /**
             * Índices
             */
            $table->foreign('idunidad')->references('idunidad')->on('unidad');            
            $table->foreign('idedofisico')->references('idedofisico')->on('edofisico'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
