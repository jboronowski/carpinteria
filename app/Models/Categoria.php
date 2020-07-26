<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 use OwenIt\Auditing\Contracts\Auditable;
/**
 * Class Categoria
 * @package App\Models
 * @version June 23, 2020, 9:07 pm UTC
 *
 * @property string categoria_nombre
 * @property string categoria_descripcion
 */
class Categoria extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $table = 'categorias';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'categoria_nombre',
        'categoria_descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categoria_nombre' => 'string',
        'categoria_descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'categoria_nombre' => 'required',
        'categoria_descripcion' => 'required'

    ];
    public function Item (){
     return $this-> hasMany('App\Models\Item');

    }
}
