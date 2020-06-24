<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version June 23, 2020, 9:44 pm UTC
 *
 * @property string item_nombre
 * @property string item_descripcion
 * @property integer categoria_id
 */
class Item extends Model
{
    use SoftDeletes;

    public $table = 'items';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'item_nombre',
        'item_descripcion',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_nombre' => 'string',
        'item_descripcion' => 'string',
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
        return $this-> belongsTo('App\Models\Categoria');
    }
    

}
