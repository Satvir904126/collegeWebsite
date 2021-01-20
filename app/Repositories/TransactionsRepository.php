<?php

namespace App\Repositories;

use App\Models\Transactions;
use App\Repositories\BaseRepository;

/**
 * Class TransactionsRepository
 * @package App\Repositories
 * @version January 19, 2021, 11:55 pm UTC
*/

class TransactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid_amount',
        'transaction_date',
        'remark',
        'describtion'
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
        return Transactions::class;
    }
}
