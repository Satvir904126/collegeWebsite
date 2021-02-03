<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Repositories\ClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Batche;
use App\Models\classes;
use App\Models\classroom;
use App\Models\Courses;
use App\Models\Days;
use App\Models\levels;
use App\Models\Semester;
use App\Models\Shift;
use App\Models\Times;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Flash;
use Response;
use SebastianBergmann\Environment\Console;

class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batch = Batche::all();
        $class = classes::all();
        $course = Courses::all();
        $days = Days::all();
        $level = levels::all();
        $semester = Semester::all();
        $shift = Shift::all();
        $time = Times::all();
        $classroom = classroom::all();

        // dd($batch); //check data in browser json data format
        //dd($class);




        $classSchedulings = $this->classSchedulingRepository->all();
        $classSchedule = \DB::table('schedulings')->select(
            'courses.*',
            'levels.*',
            'days.*',
            'batches.*',
            'semesters.*',
            'classes.*',
            'shifts.*',
            'times.*',
            'classrooms.*',
            'schedulings.*'
        )
            ->join('courses', 'courses.course_id', '=', 'schedulings.course_id')
            ->join('batches', 'batches.batch_id', '=', 'schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'schedulings.classroom_id')
            ->join('days', 'days.days_id', '=', 'schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'schedulings.time_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'schedulings.classroom_id')
            ->get();
        // dd($classSchedule);
        // die;
        return view('class_schedulings.index', compact('classSchedule', 'batch', 'class', 'course', 'days', 'level', 'semester', 'shift', 'time', 'classroom'))
            ->with('classSchedulings', $classSchedulings);
    }

    public function DynamicLevel(Request $request)
    {
        $course_id = $request->get('course_id');
        $levels = levels::where('course_id', '=', $course_id)->get();
        return Response::json($levels);
    }


    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $batch = Batche::all();
        $class = classes::all();
        $course = Courses::all();
        $days = Days::all();
        $level = levels::all();
        $semester = Semester::all();
        $shift = Shift::all();
        $time = Times::all();
        $classroom = classroom::all();

        $classSchedule = \DB::table('schedulings')->select(
            'courses.*',
            'levels.*',
            'days.*',
            'batches.*',
            'semesters.*',
            'classes.*',
            'shifts.*',
            'times.*',
            'classrooms.*',
            'schedulings.*'
        )
            ->join('courses', 'courses.course_id', '=', 'schedulings.course_id')
            ->join('batches', 'batches.batch_id', '=', 'schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'schedulings.classroom_id')
            ->join('days', 'days.days_id', '=', 'schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'schedulings.time_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'schedulings.classroom_id')
            ->where('scedule_id', '=', $id)
            ->get();
        // dd($classSchedule);
        $classScheduling = $this->classSchedulingRepository->find($id);
        // dd($classScheduling);
        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit', compact('classSchedule', 'batch', 'class', 'course', 'days', 'level', 'semester', 'shift', 'time', 'classroom'))->with('classScheduling', $classScheduling);
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchedulingRequest $request)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

        Flash::success('Class Scheduling updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
