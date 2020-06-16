<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 * @package App\Models
 * @version June 11, 2020, 1:39 am UTC
 *
 * @property string nombre
 */
class Categoria extends Model
{
    use SoftDeletes;

    public $table = 'categorias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function almacen (){
     return $this-> hasMany('App\Models\Almacen','id');

    }

    
}
