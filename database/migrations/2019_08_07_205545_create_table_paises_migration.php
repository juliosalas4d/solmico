<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaisesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpais')->comment('Id');
            $table->string('pais', 100)->comment('País');
            $table->string('descri', 255)->comment('Descripción');
            $table->string('codpais',2)->comment('Código ISO País');
            $table->string('codtel', 20)->nullable()->comment('Código Teléfono');
            $table->decimal('ibandigitos', 10, 0)->nullable()->default(2)->comment('Nº digitos IBAN');
            $table->string('ibanpais', 50)->nullable()->comment('Nº de Cuenta Bancaria Internacional (International Bank Account Number)');
            $table->string('ididioma', 6)->index()->nullable()->comment('Idioma');
            $table->unsignedInteger('idmoneda')->index()->nullable()->comment('Moneda');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /** Índices */
            $table->foreign('ididioma')->references('ididioma')->on('idiomas');
            $table->foreign('idmoneda')->references('idmoneda')->on('monedas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paises');
    }
}
