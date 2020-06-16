<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Almacen
 * @package App\Models
 * @version June 11, 2020, 1:53 am UTC
 *
 * @property string producto
 * @property string materiaprima
 * @property integer patrimonio
 * @property string desc
 * @property string actual
 * @property string minimo
 * @property integer categoria_id
 */
class Almacen extends Model
{
    use SoftDeletes;

    public $table = 'almacens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'producto',
        'materiaprima',
        'patrimonio',
        'desc',
        'actual',
        'minimo',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'producto' => 'string',
        'materiaprima' => 'string',
        'patrimonio' => 'integer',
        'desc' => 'string',
        'actual' => 'string',
        'minimo' => 'string',
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function categoria (){
        return $this-> hasOne('App\Models\Categoria','id');
    }
}
