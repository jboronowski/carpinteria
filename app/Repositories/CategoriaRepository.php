<?php

namespace App\Repositories;

use App\Models\Categoria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories
 * @version June 23, 2020, 9:07 pm UTC
 *
 * @method Categoria findWithoutFail($id, $columns = ['*'])
 * @method Categoria find($id, $columns = ['*'])
 * @method Categoria first($columns = ['*'])
*/
class CategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categoria_nombre',
        'categoria_descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categoria::class;
    }
}
