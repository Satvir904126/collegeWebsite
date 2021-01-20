<?php

namespace App\Repositories;

use App\Models\Times;
use App\Repositories\BaseRepository;

/**
 * Class TimesRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:49 pm UTC
*/

class TimesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
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
        return Times::class;
    }
}
