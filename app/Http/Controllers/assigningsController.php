<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateassigningsRequest;
use App\Http\Requests\UpdateassigningsRequest;
use App\Repositories\assigningsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\assignings;
use App\Models\ClassScheduling;
use App\Models\Status;
use App\Models\Teachers;
use Illuminate\Support\Facades\Validator;
use PDF;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use Response;

class assigningsController extends AppBaseController
{
    /** @var  assigningsRepository */
    private $assigningsRepository;

    public function __construct(assigningsRepository $assigningsRepo)
    {
        $this->assigningsRepository = $assigningsRepo;
    }

    /**
     * Display a listing of the assignings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('teacherID');
        $assignings = $this->assigningsRepository->all();
        $teacher = Teachers::get();
        $classSchedule = ClassScheduling::join('courses', 'courses.course_id', '=', 'schedulings.course_id')
            ->join('batches', 'batches.batch_id', '=', 'schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'schedulings.classroom_id')
            ->join('days', 'days.days_id', '=', 'schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'schedulings.time_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'schedulings.classroom_id')
            ->get();

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
            ->paginate(4);



        return view('assignings.index', compact("classSchedule", 'teacher', 'classAssigning'))
            ->with('assignings', $assignings);
    }

    public function insert(Request $request)
    {

        $teacher = Teachers::get();
        $classSchedule = ClassScheduling::join('courses', 'courses.course_id', '=', 'schedulings.course_id')
            ->join('batches', 'batches.batch_id', '=', 'schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'schedulings.classroom_id')
            ->join('days', 'days.days_id', '=', 'schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'schedulings.time_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'schedulings.classroom_id')
            ->get();
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
            ->paginate(4);

        $validator = Validator::make($request->all(), [
            'teacher_id' => 'required',
        ]);

        if ($validator->fails()) {
            Flash::error('Teacher can not be empty try again');

            return redirect(route('addAssigning', compact("classSchedule", 'teacher', 'classAssigning')));
        }

        $input = $request->all();
        $teachers = new Status;
        $teachers->teacher_id = $request->teacher_id;
        $status_id = $teachers->save();
        //dd($input);

        $checkSchedule = assignings::where('class_schedule_id', "=", $request->multiclass)->value('class_schedule_id');
        //dd($checkSchedule);
        if ($status_id != 0) {

            if ($checkSchedule == null) {

                foreach ($request->multiclass as $key => $value) {
                    $data = array(
                        'teacher_id' => $request->teacher_id,
                        'class_schedule_id' => $request->multiclass[$key]
                    );



                    // $checkExist = assignings::where('teacher_id', $request->teacher_id)
                    //     ->where('class_schedule_id', $request->multiclass)->first();
                    // if ($checkExist) {
                    //     Flash::error('Teacher already assign for this class ');
                    //     return view('assignings.index', compact("classSchedule", 'teacher', 'classAssigning'));
                    // }
                    // dd($data);
                    assignings::insert($data);
                }
            } else {
                flash::error("Teacher already assign for this class");
                return redirect(route('addAssigning', compact("classSchedule", 'teacher', 'classAssigning')));
            }
            // return view('assignings.index', compact("classSchedule", 'teacher', 'classAssigning'));
            flash::success("Class Assign Successful");
            return redirect(route('addAssigning', compact("classSchedule", 'teacher', 'classAssigning')));
        }
    }


    public function searchSchedule(Request $request)
    {

        $teacherId = -1;
        $teacher = Teachers::get();

        $input = $request->input('seacrhSchedule');

        // $teacherId[] = Teachers::Where("first_name", "Like", "%$input%")->value("techer_id");
        $teacherId = Teachers::Where("first_name", "Like", "%$input%")->get("techer_id");
        $teacherCount = Teachers::Where("first_name", "Like", "%$input%")->get("techer_id")->count();
        $request->session()->put('teacherID', $teacherId);
        $classSchedule = ClassScheduling::join('courses', 'courses.course_id', '=', 'schedulings.course_id')
            ->join('batches', 'batches.batch_id', '=', 'schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'schedulings.classroom_id')
            ->join('days', 'days.days_id', '=', 'schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'schedulings.time_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'schedulings.classroom_id')
            ->get();
        //dd($request->session()->get('teacherID'), $teacherId);
        if ($teacherCount != 0) {


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
                ->whereIn('teacher_id',  $teacherId)->paginate(10);
            //dd($teacherId);

            return view('assignings.index', compact("classSchedule", 'teacher', 'classAssigning'));
        } else {
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
                ->paginate(4);
            flash::error("Teacher not found on this name try again");

            return view('assignings.index', compact("classSchedule", 'teacher', 'classAssigning'));
        }
    }
    public function downloadPdf(Request $request)
    {

        $classAssigning = assignings::all();
        if ($request->session()->has('teacherID')) {

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
                ->whereIn('teacher_id',  $request->session()->get('teacherID'))
                ->get();
        } else {
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
                ->get();
        }
        $pdf = PDF::loadview('assignings.pdf', ['classAssigning' => $classAssigning]);
        // dd($pdf);
        $pdf->setPaper('A4', 'landscape');
        $pdf->stream();
        return $pdf->download('class_assigning.pdf');
    }
    /**
     * Show the form for creating a new assignings.
     *
     * @return Response
     */
    public function create()
    {
        return view('assignings.create');
    }

    /**
     * Store a newly created assignings in storage.
     *
     * @param CreateassigningsRequest $request
     *
     * @return Response
     */
    public function store(CreateassigningsRequest $request)
    {
        $input = $request->all();

        $assignings = $this->assigningsRepository->create($input);

        Flash::success('Assignings saved successfully.');

        return redirect(route('addAssigning'));
    }

    /**
     * Display the specified assignings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assignings = $this->assigningsRepository->find($id);

        if (empty($assignings)) {
            Flash::error('Assignings not found');

            return redirect(route('addAssigning'));
        }

        return view('assignings.show')->with('assignings', $assignings);
    }

    /**
     * Show the form for editing the specified assignings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assignings = $this->assigningsRepository->find($id);

        if (empty($assignings)) {
            Flash::error('Assisgnings not found');

            return redirect(route('addAssigning'));
        }

        return view('assignings.edit')->with('assignings', $assignings);
    }

    /**
     * Update the specified assignings in storage.
     *
     * @param int $id
     * @param UpdateassigningsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateassigningsRequest $request)
    {
        $assignings = $this->assigningsRepository->find($id);

        if (empty($assignings)) {
            Flash::error('Assignings not found');

            return redirect(route('addAssigning'));
        }

        $assignings = $this->assigningsRepository->update($request->all(), $id);

        Flash::success('Assignings updated successfully.');

        return redirect(route('addAssigning'));
    }

    /**
     * Remove the specified assignings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assignings = $this->assigningsRepository->find($id);

        if (empty($assignings)) {
            Flash::error('Assignings not found');

            return redirect(route('addAssigning'));
        }

        $this->assigningsRepository->delete($id);

        Flash::success('Assignings deleted successfully.');

        return redirect(route('addAssigning'));
    }
}