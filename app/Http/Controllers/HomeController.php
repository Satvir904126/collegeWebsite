<?php

namespace App\Http\Controllers;

use App\Models\assignings;
use App\Models\ClassScheduling;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(Auth::user()->name);
        $classAssigning = assignings::join('schedulings', 'schedulings.scedule_id', '=', 'assignings.class_schedule_id')
            ->join('teachers', 'teachers.techer_id', '=', 'assignings.teacher_id')
            ->join('courses', 'courses.course_id', '=', 'schedulings.course_id')
            ->join('batches', 'batches.batch_id', '=', 'schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'schedulings.classroom_id')
            ->join('days', 'days.days_id', '=', 'schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'schedulings.time_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'schedulings.classroom_id')
            ->where('first_name', "Like", '%' . Auth::user()->name . '%')->get();

        return view('home', compact('classAssigning'));
    }
}