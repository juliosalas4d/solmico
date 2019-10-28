<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTipotranspMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipotransp', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idtiptra')->comment('Id');
            $table->string('tipotra', 100)->comment('Tipo de Transporte');
            $table->boolean('esremolque')->nullable()->default(0)->comment('¿Es remolque?');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipotransp');
    }
}
