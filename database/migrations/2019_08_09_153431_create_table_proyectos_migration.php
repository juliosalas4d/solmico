<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyectosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('idproyecto', 10)->Zprimary()->comment('Id Proyecto');
            $table->string('descri', 500)->comment('Descripción');
            $table->string('codcli', 15)->index()->comment('Cliente');
            $table->string('numcont', 50)->nullable()->comment('Nº de Contrato');
            $table->date('fechacont')->nullable()->comment('Fecha del Contrato');
            $table->integer('dur')->nullable()->comment('Duración (Días)');
            $table->double('montobol', 15,2)->default(0)->comment('Monto del Contrato (En Bolívares)');
            $table->double('montodiv', 15,2)->default(0)->comment('Monto del Contrato (En Divisa)');
            $table->boolean('impsino')->nullable()->comment('¿Impuesto?');
            $table->double('porimp', 10,2)->default(0)->comment('% Impuesto');
            $table->string('nomimp', 10)->nullable()->default('IVA')->comment('Nombre Impuesto');
            $table->unsignedInteger('idtipcont')->index()->comment('Tipo');
            $table->unsignedInteger('idpais',)->index()->nullable()->comment('País');
            $table->unsignedInteger('idestado',)->index()->nullable()->comment('Estado');
            $table->unsignedInteger('idmunicipio',)->index()->nullable()->comment('Municipio');
            $table->unsignedInteger('idparroquia',)->index()->nullable()->comment('País');
            $table->unsignedInteger('idciudad',)->index()->nullable()->comment('País');
            $table->string('direccion', 500)->nullable()->comment('Dirección');
            $table->unsignedInteger('idmoneda',)->index()->nullable()->comment('Divisa');
            $table->double('tasa', 15,6)->nullable()->comment('Tasa');
            $table->date('fechatasa')->nullable()->comment('Fecha Tasa');
            $table->integer('estatus')->default(0)->comment('Estatus');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();

            /** Índices */
            $table->foreign('codcli')->references('codcli')->on('clientes');
            $table->foreign('idtipcont')->references('idtipcont')->on('tipocontrato');
            $table->foreign('idpais')->references('idpais')->on('paises');
            $table->foreign('idestado')->references('idestado')->on('estados');
            $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios');
            $table->foreign('idparroquia')->references('idparroquia')->on('parroquias');
            $table->foreign('idciudad')->references('idciudad')->on('ciudades');
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
        Schema::dropIfExists('proyectos');
    }
}
