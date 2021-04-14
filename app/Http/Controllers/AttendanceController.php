<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttendanceRequest;
use App\Http\Requests\UpdateAttendanceRequest;
use App\Repositories\AttendanceRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admission;
use App\Models\Attendance;
use App\Models\Courses;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class AttendanceController extends AppBaseController
{
    /** @var  AttendanceRepository */
    private $attendanceRepository;

    public function __construct(AttendanceRepository $attendanceRepo)
    {
        $this->attendanceRepository = $attendanceRepo;
    }

    /**
     * Display a listing of the Attendance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $id)
    {

        $request->session()->put('course_id', $id);


        $attendance = Admission::leftjoin('attendance_grdes', 'attendance_grdes.rollNO', '=', 'admissions.roll_no')->where('course_id', '=', $id)->get();
        $courseName = Courses::where('course_id', '=', $id)->value('course_name');


        // dd($attendance);
        ucfirst($courseName);

        return view('attendances.index', compact('courseName', 'attendance'));
    }

    /**
     * Show the form for creating a new Attendance.
     *
     * @return Response
     */

    public function grades(Request $request)
    {
        // dd($request->course_id);
        // $levels = $this->levelsRepository->create($input);
        // dd($request->session()->get('course_id'));




        $checkAttendance = Attendance::where('rollNo', '=', $request->input('roll_no'))->first();
        // create new attendance and graades
        if ($checkAttendance == null) {
            $AttendGrades = $request->all();
            $AttendGrades = new Attendance;
            $AttendGrades->rollNo = $request->roll_no;
            $AttendGrades->student_name = $request->name;
            $AttendGrades->attendance = $request->attendance;
            $AttendGrades->grades = $request->grades;
            $AttendGrades->teacher = Auth::user()->id;
            // dd($AttendGrades);

            $AttendGrades->save();
        } else {
            // Edit attendance and grades
            $AttendGrades = $request->all();

            $AttendGrades = Attendance::where('rollNo', '=', $request->input('roll_no'))->first();

            $AttendGrades->rollNo = $request->roll_no;
            $AttendGrades->student_name = $request->name;
            $AttendGrades->attendance = $request->attendance;
            $AttendGrades->grades = $request->grades;
            $AttendGrades->teacher = Auth::user()->id;
            // dd($AttendGrades);

            $AttendGrades->save();
        }
        $attendance = Admission::leftjoin('attendance_grdes', 'attendance_grdes.rollNO', '=', 'admissions.roll_no')->where('course_id', '=', $request->course_id)->get();
        $courseName = Courses::where('course_id', '=', $request->session()->get('course_id'))->value('course_name');
        ucfirst($courseName);
        return view('attendances.index', compact('courseName', 'attendance'));
    }
    public function create()
    {
        return view('attendances.create');
    }

    public function editAttnedance(Request $request)
    {
        if ($request->ajax()) {
            if ($request->action == 'Edit') {
                $data = array(
                    'first_name' => "satvir",
                    'last_name' => "Singh"
                );
            }
        }
    }
    /**
     * Store a newly created Attendance in storage.
     *
     * @param CreateAttendanceRequest $request
     *
     * @return Response
     */
    public function store(CreateAttendanceRequest $request)
    {
        $input = $request->all();

        $attendance = $this->attendanceRepository->create($input);

        Flash::success('Attendance saved successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Display the specified Attendance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.show')->with('attendance', $attendance);
    }

    /**
     * Show the form for editing the specified Attendance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.edit')->with('attendance', $attendance);
    }

    /**
     * Update the specified Attendance in storage.
     *
     * @param int $id
     * @param UpdateAttendanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAttendanceRequest $request)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        $attendance = $this->attendanceRepository->update($request->all(), $id);

        Flash::success('Attendance updated successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Remove the specified Attendance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        $this->attendanceRepository->delete($id);

        Flash::success('Attendance deleted successfully.');

        return redirect(route('attendances.index'));
    }
}