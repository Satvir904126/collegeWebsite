<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transactions
 * @package App\Models
 * @version January 19, 2021, 11:55 pm UTC
 *
 * @property integer $student_id
 * @property integer $fee_id
 * @property integer $user_id
 * @property number $paid_amount
 * @property string $transaction_date
 * @property string $remark
 * @property string $describtion
 */
class Transactions extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid_amount',
        'transaction_date',
        'remark',
        'describtion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'transaction_id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid_amount' => 'float',
        'transaction_date' => 'date',
        'remark' => 'string',
        'describtion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required|integer',
        'fee_id' => 'required|integer',
        'user_id' => 'required|integer',
        'paid_amount' => 'required|numeric',
        'transaction_date' => 'required',
        'remark' => 'nullable|string',
        'describtion' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
