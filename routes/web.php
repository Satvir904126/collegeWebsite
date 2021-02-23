<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => 'studentSession'], function () {
    Route::match(['get', 'post'], 'account', 'StudentController@account');
    Route::match(['get', 'post'], 'student-bio', 'StudentController@studentBio');
    Route::match(['get', 'post'], 'studetn-course', 'StudentController@studetnCourse');
    Route::match(['get', 'post'], 'studetn-calender', 'StudentController@studetnCalender');
    Route::match(['get', 'post'], 'studetn-activity', 'StudentController@studetnActivity');
    Route::match(['get', 'post'], 'studetn-marks', 'StudentController@studetnMarks');
    Route::match(['get', 'post'], 'varify-password', 'StudentController@studetnVerifyPass');
    Route::match(['get', 'post'], 'student-changePass', 'StudentController@studetnChangePass');
});

Route::get('/student', 'StudentController@studentLogin');
Route::get('/logout', 'StudentController@studentLogout');
route::post('student-login', 'StudentController@LoginStudent');

//Route::get('/home', 'HomeController@index');

// Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('auth');


Route::resource('classes', 'classesController');

Route::resource('classrooms', 'classroomController');

Route::resource('levels', 'levelsController');

Route::resource('batches', 'BatcheController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CoursesController');

Route::resource('faculties', 'FacultiesController');

Route::resource('times', 'TimesController');

Route::resource('attendances', 'AttendanceController');

Route::resource('academics', 'AcademicsController');

Route::resource('days', 'DaysController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('transactions', 'TransactionsController');

Route::resource('admissions', 'AdmissionController')->middleware('auth');

Route::resource('teachers', 'TeachersController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');


Route::resource('semesters', 'SemesterController');

Route::get('/dynamiclevel', ['as' => 'dynamiclevel', 'uses' => 'ClassSchedulingController@DynamicLevel']);

Route::resource('rolls', 'RollsController');