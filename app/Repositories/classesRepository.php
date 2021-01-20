<?php

namespace App\Repositories;

use App\Models\classes;
use App\Repositories\BaseRepository;

/**
 * Class classesRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:30 pm UTC
*/

class classesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_name',
        'class_code'
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
        return classes::class;
    }
}
