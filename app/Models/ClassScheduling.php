<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassScheduling
 * @package App\Models
 * @version January 19, 2021, 11:54 pm UTC
 *
 * @property integer $course_id
 * @property string $level_id
 * @property integer $shift_id
 * @property integer $classroom_id
 * @property integer $batch_id
 * @property integer $day_id
 * @property integer $time_id
//  * @property integer $teacher_id
 * @property integer $semester_id
 * @property time $start_date
 * @property time $end_date
 * @property boolean $status
 */
class ClassScheduling extends Model
{
    use SoftDeletes;

    public $table = 'schedulings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        //  'teacher_id',
        'semester_id',
        'start_date',
        'end_date',
        'status'
    ];
    protected $primaryKey = 'scedule_id';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'scedule_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'string',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        // 'teacher_id' => 'integer',
        'semester_id' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required|integer',
        'level_id' => 'required|string|max:255',
        'shift_id' => 'required|integer',
        'classroom_id' => 'required|integer',
        'batch_id' => 'required|integer',
        'day_id' => 'required|integer',
        'time_id' => 'required|integer',
        // 'teacher_id' => 'required|integer',
        'semester_id' => 'required|integer',
        'start_date' => 'required',
        'end_date' => 'required',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}