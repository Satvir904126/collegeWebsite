<?php

namespace App\Repositories;

use App\Models\Batche;
use App\Repositories\BaseRepository;

/**
 * Class BatcheRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:46 pm UTC
 */

class BatcheRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
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
    protected $primaryKey = 'batch_id';

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Batche::class;
    }
}
