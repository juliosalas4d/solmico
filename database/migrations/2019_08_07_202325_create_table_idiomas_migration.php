<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIdiomasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('ididioma', 6)->primary()->comment('Id Idioma');
            $table->string('idioma', 60)->comment('Nombres del Idioma');
            $table->string('codiso', 2)->nullable()->comment('Código ISO');
            $table->string('codpais', 2)->index()->nullable()->comment('Código País');
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
        Schema::dropIfExists('idioma');
    }
}
