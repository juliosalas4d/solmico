<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lotes extends Model
{
	use SoftDeletes;

	// Nombre de la tabla de la base de datos que definimos (Database table name).
	protected $table='lotes';
 
	/**
    Por defecto Eloquent  asume que existe una clave primaria llamada id,
    si este no es nuesto caso lo tenemos que indicar en la variable $primaryKey
	*/
	protected $primaryKey = 'idlote';
 
	// Denimos los campos de la tabla directamente en la variable de tipo array $fillable
	protected $fillable =  array('lote', 'fecha', 'idproducto', 'idunidad', 'cant', 'idparam1', 'valor1', 'idparam2', 'valor2', 'idparam3', 'valor3','idparam4', 'valor4','idparam5', 'valor5','idparam6', 'valor6','idparam7', 'valor7','idparam8', 'valor8','idparam9', 'valor9','idparam10', 'valor10', 'obs', 'activo');
 
	/**
    En la variable $hidden podemos indicar los campos que no queremos que nos devuelvan
    en las consultas, por ejemplo, los campos created_at y updated_at, que el ORM Eloquent añade por defecto
    */
	protected $hidden = ['created_at','updated_at', 'deleted_at'];
}
