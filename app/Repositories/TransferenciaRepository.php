<?php

namespace App\Repositories;

use App\Models\Transferencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TransferenciaRepository
 * @package App\Repositories
 * @version July 25, 2020, 8:46 pm UTC
*/

class TransferenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'id_origen',
        'id_destino',
        'item_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transferencia::class;
    }
}
