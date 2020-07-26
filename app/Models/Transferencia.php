<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Transferencia
 * @package App\Models
 * @version July 25, 2020, 8:46 pm UTC
 *
 * @property integer $cantidad
 * @property integer $id_origen
 * @property integer $id_destino
 */
class Transferencia extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $table = 'transferencias';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cantidad',
        'id_origen',
        'id_destino',
        'item_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'id_origen' => 'integer',
        'id_destino' => 'integer',
        'item_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public function deposito(){
        return $this-> belongsTo('App\Models\Deposito', 'id_origen');
    }
    public function deposito1(){
        return $this-> belongsTo('App\Models\Deposito', 'id_destino');
    }


    public function item(){
        return $this-> belongsTo('App\Models\Item');
    }


}
