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
    $courses = "";
    return view('welcome', compact('courses'));
});



Auth::routes();

Route::get('/change-password', 'ChangePasswordController@index')->name('password.change');
Route::post('/update-password', 'ChangePasswordController@changepassword')->name('password.update');

Route::get('/change-password-student', 'ChangePasswordController@indexStudent')->name('student.password.change');
Route::post('/update-password-student', 'ChangePasswordController@changepasswordStudent')->name('student.password.update');
// Route::match(['get', 'post'], 'register', function () {
//     return redirect('/');
// });
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


Route::resource('classes', 'classesController')->middleware('auth');

Route::resource('classrooms', 'classroomController')->middleware('auth');

Route::resource('levels', 'levelsController')->middleware('auth');

Route::resource('batches', 'BatcheController')->middleware('auth');

Route::resource('shifts', 'ShiftController')->middleware('auth');

Route::resource('courses', 'CoursesController');
Route::get('getcourses', 'CoursesController@getCourses')->name('courses.getCourses');
Route::get('search', 'CoursesController@courseSearch')->name('courses.search');
Route::get('course-details', 'CoursesController@courseDetail')->name('courses.course-details');

// Route::get('courses/search', 'CoursesController@courseSearch')->name('courses.search');

Route::resource('faculties', 'FacultiesController')->middleware('auth');

Route::resource('times', 'TimesController')->middleware('auth');

Route::resource('attendances', 'AttendanceController')->middleware('auth');

Route::resource('academics', 'AcademicsController')->middleware('auth');

Route::resource('days', 'DaysController')->middleware('auth');

Route::resource('classAssignings', 'ClassAssigningController')->middleware('auth');

Route::resource('classSchedulings', 'ClassSchedulingController')->middleware('auth');

Route::resource('transactions', 'TransactionsController')->middleware('auth');

Route::resource('admissions', 'AdmissionController')->middleware('auth');

Route::resource('teachers', 'TeachersController')->middleware('auth');

Route::resource('roles', 'RoleController')->middleware('auth');

Route::resource('users', 'UserController')->middleware('auth');


Route::resource('semesters', 'SemesterController')->middleware('auth');

Route::get('/dynamiclevel', ['as' => 'dynamiclevel', 'uses' => 'ClassSchedulingController@DynamicLevel']);
Route::get('rolls/dynamicstudent', ['as' => 'rolls/dynamicstudent', 'uses' => 'RollsController@dynamicStudent']);
// Route::get('dynamicstudent/{id}', 'RollsController@dynamicStudent')->name('dynamicstudent');

Route::resource('rolls', 'RollsController');
Route::get('about-us', 'AboutusController@index')->name('aboui-us');

Route::get('/contact', 'ContactusController@index')->name('contact');
Route::get('/blog', 'BlogsController@indexHome')->name('blogs');
Route::get('/blog/filter/{filter}', 'BlogsController@filterBlog')->name('filterBlog');
Route::get('/blog/searchPost', 'BlogsController@searchBlog')->name('searchBlog');

Route::resource('blogs', 'blogsController');

// Route::resource('assignings', 'assigningsController');
Route::get('assignings/delete/{id}', 'assigningsController@destroy')->name('assignings.delete');
Route::get('/assignings/edit/{id}', 'assigningsController@edit')->name('assignings.edit');
Route::get('/assignings', 'assigningsController@index')->name('addAssigning');
Route::post('/assignings/class', 'assigningsController@insert')->name('assignClass');
Route::get('/assignings/search', 'assigningsController@searchSchedule')->name('searchSchedule');
// pdf file
Route::get('/download-pdf', 'assigningsController@downloadPdf')->name('download-pdf');

//change language
// Route::get('locale/{locale}', 'StudentController@languages');
//teacher class assignings after login
Route::get('/home', 'HomeController@index')->name('home');

// grades by teacher to students
// Route::get('grades', 'AttendanceController@grades')->name('grades')->middleware('auth');
Route::get('attendance/{id}', 'AttendanceController@index')->name('course_id');
Route::get('attendance/{id}/grades', 'AttendanceController@grades')->name('attandance.grades');
// Route::post('tabledit/action', 'AttendanceController@editAttnedance')->name('tabledit.action');
