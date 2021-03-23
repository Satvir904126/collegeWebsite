<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class assignings
 * @package App\Models
 * @version March 13, 2021, 1:46 am UTC
 *
 * @property integer $teacher_id
 * @property integer $class_schedule_id
 */
class assignings extends Model
{
    use SoftDeletes;

    public $table = 'assignings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'class_assign_id';



    public $fillable = [
        'teacher_id',
        'class_schedule_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_assign_id' => 'integer',
        'teacher_id' => 'integer',
        'class_schedule_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher_id' => 'required|integer',
        'class_schedule_id' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}