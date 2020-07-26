<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Deposito
 * @package App\Models
 * @version June 24, 2020, 6:35 pm UTC
 *
 * @property string descripcion
 */
class Deposito extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $table = 'depositos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
    ];


      public function stock (){
     return $this-> hasMany('App\Models\Stock');

    }

    public function transferencia (){
   return $this-> hasMany('App\Models\Transferencia');

  }

}
