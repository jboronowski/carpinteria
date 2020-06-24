<?php

namespace App\Repositories;

use App\Models\Deposito;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DepositoRepository
 * @package App\Repositories
 * @version June 24, 2020, 6:35 pm UTC
 *
 * @method Deposito findWithoutFail($id, $columns = ['*'])
 * @method Deposito find($id, $columns = ['*'])
 * @method Deposito first($columns = ['*'])
*/
class DepositoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Deposito::class;
    }
}
