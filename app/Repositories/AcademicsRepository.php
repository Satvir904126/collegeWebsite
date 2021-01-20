<?php

namespace App\Repositories;

use App\Models\Academics;
use App\Repositories\BaseRepository;

/**
 * Class AcademicsRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:51 pm UTC
*/

class AcademicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year'
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
        return Academics::class;
    }
}
