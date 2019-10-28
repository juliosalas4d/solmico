<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transportistas extends Model
{   
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transportistas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idtransp';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['transportista', 'racda', 'cedrepre', 'repleg', 'cargo', 'tel', 'email', 'obs', 'activo'];


    /**
    En la variable $hidden podemos indicar los campos que no queremos que nos devuelvan
    en las consultas, por ejemplo, los campos created_at y updated_at, que el ORM Eloquent añade por defecto
    */
    protected $hidden = ['created_at','updated_at', 'deleted_at'];

}
