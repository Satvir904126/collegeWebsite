<?php

namespace App\Repositories;

use App\Models\Faculties;
use App\Repositories\BaseRepository;

/**
 * Class FacultiesRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:49 pm UTC
*/

class FacultiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
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
        return Faculties::class;
    }
}
