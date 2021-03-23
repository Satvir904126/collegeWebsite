<?php

namespace App\Repositories;

use App\Models\assignings;
use App\Repositories\BaseRepository;

/**
 * Class assigningsRepository
 * @package App\Repositories
 * @version March 13, 2021, 1:46 am UTC
*/

class assigningsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'class_schedule_id'
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
        return assignings::class;
    }
}
