<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('codcli', 15)->primary()->comment('Código');
            $table->string('nombre', 50)->comment('Razón Social');
            $table->string('cedula', 14)->nullable()->comment('Cédula');
            $table->string('rif', 10)->nullable()->comment('RIF');
            $table->string('direccion', 500)->nullable()->comment('Dirección');
            $table->unsignedInteger('idpais',)->index()->nullable()->default(229)->comment('País');
            $table->unsignedInteger('idestado',)->index()->nullable()->comment('Estado');
            $table->unsignedInteger('idmunicipio',)->index()->nullable()->comment('Municipio');
            $table->unsignedInteger('idparroquia',)->index()->nullable()->comment('País');
            $table->unsignedInteger('idciudad',)->index()->nullable()->comment('País');
            $table->string('tel', 30)->nullable()->comment('Teléfonos');
            $table->string('fax', 30)->nullable()->comment('Fax');
            $table->string('email', 50)->nullable()->comment('email');
            $table->string('www', 80)->nullable()->comment('Web');
            $table->string('contacto', 50)->nullable()->comment('Persona Contacto');
            $table->string('obs', 500)->nullable()->comment('Observaciones');
            $table->boolean('activo')->default(1)->comment('¿Activo?');
            $table->softDeletes();
            $table->timestamps();  

            /** Índices */
            $table->foreign('idpais')->references('idpais')->on('paises');
            $table->foreign('idestado')->references('idestado')->on('estados');
            $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios'); 
            $table->foreign('idparroquia')->references('idparroquia')->on('parroquias'); 
            $table->foreign('idciudad')->references('idciudad')->on('ciudades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
