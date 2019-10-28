<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMonedasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monedas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idmoneda')->comment('Id Moneda');
            $table->string('moneda', 60)->comment('Moneda');
            $table->string('descri', 255)->comment('Descripción');
            $table->string('codiso', 3)->comment('Código ISO');
            $table->string('simbolo', 10)->nullable()->comment('Símbolo');
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
        Schema::dropIfExists('monedas');
    }
}
