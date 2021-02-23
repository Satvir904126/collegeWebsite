<?php

namespace App\Repositories;

use App\Models\Rolls;
use App\Repositories\BaseRepository;

/**
 * Class RollsRepository
 * @package App\Repositories
 * @version February 16, 2021, 4:23 am UTC
 */

class RollsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'username',
        'password',
        'login_time',
        'logout_time'
    ];
    protected $primaryKey = 'roll_id';

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
        return Rolls::class;
    }
}