<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class classes
 * @package App\Models
 * @version January 19, 2021, 11:30 pm UTC
 *
 * @property string $class_name
 * @property string $class_code
 */
class classes extends Model
{
    use SoftDeletes;

    public $table = 'classes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'class_name',
        'class_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' => 'integer',
        'class_name' => 'string',
        'class_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class_name' => 'required|string|max:255',
        'class_code' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
