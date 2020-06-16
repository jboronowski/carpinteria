<?php

namespace App\Repositories;

use App\Models\Almacen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlmacenRepository
 * @package App\Repositories
 * @version June 11, 2020, 1:53 am UTC
 *
 * @method Almacen findWithoutFail($id, $columns = ['*'])
 * @method Almacen find($id, $columns = ['*'])
 * @method Almacen first($columns = ['*'])
*/
class AlmacenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'producto',
        'materiaprima',
        'patrimonio',
        'desc',
        'actual',
        'minimo',
        'categoria_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Almacen::class;
    }
}
