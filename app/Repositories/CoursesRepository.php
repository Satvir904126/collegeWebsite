<?php

namespace App\Repositories;

use App\Models\Courses;
use App\Repositories\BaseRepository;

/**
 * Class CoursesRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:48 pm UTC
*/

class CoursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_name',
        'course_code',
        'describtion',
        'status'
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
        return Courses::class;
    }
}
