<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyectos extends Model
{
	use SoftDeletes;

	// Nombre de la tabla de la base de datos que definimos (Database table name).
	protected $table='proyectos';
 
	/**
    Por defecto Eloquent  asume que existe una clave primaria llamada id,
    si este no es nuesto caso lo tenemos que indicar en la variable $primaryKey
	*/
	protected $primaryKey = 'idproyecto';
	public $incrementing = false;
 
	// Denimos los campos de la tabla directamente en la variable de tipo array $fillable
	protected $fillable =  array('idproyecto', 'descri', 'codcli', 'numcont', 'fechacont', 'dur', 'montobol', 'montodiv', 'impsino', 'porimp', 'nomimp', 'idtipcont', 'idpais', 'idestado', 'idmunicipio', 'idparroquia', 'idciudad', 'direccion', 'idmoneda', 'tasa', 'fechatasa', 'estatus', 'obs', 'activo');
 
	/**
    En la variable $hidden podemos indicar los campos que no queremos que nos devuelvan
    en las consultas, por ejemplo, los campos created_at y updated_at, que el ORM Eloquent añade por defecto
    */
	protected $hidden = ['created_at','updated_at', 'deleted_at'];

}
