<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Session;

/**
 * Class Rolls
 * @package App\Models
 * @version February 16, 2021, 4:23 am UTC
 *
 * @property integer $student_id
 * @property string $username
 * @property string $password
 * @property string|\Carbon\Carbon $login_time
 * @property string|\Carbon\Carbon $logout_time
 */
class Rolls extends Model
{
    use SoftDeletes;

    public $table = 'rolls';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'roll_id';



    public $fillable = [
        'student_id',
        'username',
        'password',
        'login_time',
        'logout_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'roll_id' => 'integer',
        'student_id' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'login_time' => 'datetime',
        'logout_time' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required|integer',
        'username' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'login_time' => 'required',
        'logout_time' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static function onlineStudent()
    {
        $students = Rolls::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')
            ->where(['username' => Session::get('studentSession')])->first();
        // dd($students);

        return $students;
    }
}