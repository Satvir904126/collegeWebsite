<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Courses
 * @package App\Models
 * @version January 19, 2021, 11:48 pm UTC
 *
 * @property string $course_name
 * @property string $course_code
 * @property string $describtion
 * @property boolean $status
 */
class Courses extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    protected $primaryKey = 'course_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_name',
        'course_code',
        'describtion',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'course_name' => 'string',
        'course_code' => 'string',
        'describtion' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required|string|max:255',
        'course_code' => 'required|string|max:255',
        'describtion' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
