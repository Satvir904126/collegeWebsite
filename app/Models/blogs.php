<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class blogs
 * @package App\Models
 * @version March 2, 2021, 2:47 am UTC
 *
 * @property string $blog_name
 * @property string $category
 * @property string $content
 * @property string $student_id
 * @property string $image
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
        'image' => 'image',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}