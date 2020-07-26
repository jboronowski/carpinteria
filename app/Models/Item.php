<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Item
 * @package App\Models
 * @version June 23, 2020, 9:44 pm UTC
 *
 * @property string item_nombre
 * @property string item_descripcion
 * @property integer categoria_id
 */
class Item extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

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
        'item_nombre' => 'required',
        'item_descripcion' => 'required'

    ];
     public function categoria (){
        return $this-> belongsTo('App\Models\Categoria');
    }

    public function stock (){
        return $this-> hasMany('App\Models\Stock');
    }
    public function transferencia (){
        return $this-> hasMany('App\Models\Transferencia');
    }



}
