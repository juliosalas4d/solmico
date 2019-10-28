<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransportistasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idtransp')->comment('Id');
            $table->string('transportista', 100)->comment('Transportista');
            $table->string('racda', 50)->default('-')->comment('Nº RACDA');
            $table->integer('cedrepre')->nullable()->comment('Cédula Rep. Legal');
            $table->string('repleg')->nullable()->comment('Representante Legal');
            $table->string('cargo')->nullable()->comment('Cargo Rep. Legal');
            $table->string('tel', 50)->nullable()->comment('Teléfonos');
            $table->string('email', 50)->nullable()->comment('Email');
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
        Schema::dropIfExists('transportistas');
    }
}
