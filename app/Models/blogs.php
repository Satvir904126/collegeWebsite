<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class blogs
 * @package App\Models
 * @version March 12, 2021, 1:49 am UTC
 *
 * @property integer $teacher_id
 * @property integer $class_schedule_id
 */
class blogs extends Model
{
    use SoftDeletes;

    public $table = 'blogs';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'blog_id';



    public $fillable = [
        'blog_name',
        'category',
        'content',
        'student_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'blog_id' => 'integer',
        'blog_name' => 'string',
        'category' => 'string',
        'content' => 'string',
        'student_id' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'blog_name' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'content' => 'required|string|max:255',
        // 'student_id' => 'string|max:255',
        'image' => 'image|max:10240 ',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}