<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Attendance;
use App\Models\Role;
use App\Models\Roll;
use App\Models\Rolls;
use Session;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentLogin(Request $request)
    {
        // dd($request);

        return view('students.login');
    }
    public function studentLogout(Request $request)
    {
        $request->session()->flush();

        return redirect('/');
    }
    public function LoginStudent(Request $request)
    {
        // $studentCount = 0;
        // dd(Rolls);

        if ($request->isMethod('post')) {
            $student = $request->all();
            $studentCount = Rolls::where([
                'username' => $student['username'],
                'password' => $student['password']
            ])->count();
        }
        // dd($studentCount);
        if ($studentCount > 0) {

            $request->session()->put('studentSession', $student['username']);
            Flash::success('welcome' . $student['username']);
            //dd('studentSession');
            return redirect('/account');
        } else {
            Flash::error('Your user name or Password is incorrect!');

            return redirect('/student');
        }
    }
    public function account()
    {

        if (Session::has('studentSession')) {
            $student = Admission::all();
        } else {
            return redirect('/student')->with('error', 'please login to access');
        }
        $studentId = Rolls::where('username', '=', session('studentSession'))->value('student_id');
        $rollNo = Admission::where("student_id", "=", $studentId)->value('roll_no');
        $attendGrade = Attendance::where("rollNo", "=", $rollNo)->value('rollNo');

        // dd($attendGrade);
        if ($attendGrade == null) {
            return view('students.account', compact('student', "attendGrade"));
        } else {
            $attendGrade = Attendance::where("rollNo", "=", $rollNo)
                ->join('teachers', 'teachers.techer_id', '=', 'attendance_grdes.teacher')
                ->get();
            // dd($attendGrade);

            return view('students.account', compact('student', "attendGrade"));
        }
    }
    public function index()
    {
    }
    public function studentBio(Request $request)
    {

        if ($request->ajax()) {
            dd("hello1");
        }
        // dd($request->ajax());

        $students = Rolls::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')
            ->where(['username' => Session::get('studentSession')])->first();
        //  dd($students);
        return view('students.lectures.student-bio', compact('students'));
    }
    public function studetnCourse(Request $request)
    {
        return view('students.lectures.choose-course');
    }
    public function studetnCalender(Request $request)
    {
        return view('students.lectures.calender');
    }
    public function studetnActivity(Request $request)
    {
        return view('students.lectures.activity');
    }
    public function studetnMarks(Request $request)
    {
        return view('students.lectures.marks');
    }
    //verify password befor updating eith ajax
    public function studetnVerifyPass(Request $request)
    {
        $students = $request->all();
        //dd($students);
        $validStudent = Rolls::where(['username' => Session::get('studentSession'), 'password' => $students['old_password']])->count();
        if ($validStudent == 1) {
            // echo "false";
            // die;
            //  Flash::success('Your user name is correct');
        } else {
            // echo "true";
            // die;
            // Flash::error('Your user name is not correct');
        }
        return $validStudent;
    }

    //update student password after varifing
    public function studetnChangePass(Request $request)
    {
        $student = $request->all();
        //  $students = Admission::where('email', $student['email'])->first();

        $studentCount = Rolls::where([
            'username' => Session::get('studentSession'),
            'password' => $student['old_password']
        ])->count();
        if ($studentCount == 1) {
            $new_password = $student["new_password"];
            Rolls::where('username', Session::get('studentSession'))->update(['password' => $new_password]);
            //dd($new_password);

            Flash::success('Your Password is updated');
            return redirect()->back();
        } else {
            Flash::error('Problem to update the Password');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}