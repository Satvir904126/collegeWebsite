<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Repositories\AdmissionRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admission;
use App\Models\Courses;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdmissionController extends AppBaseController
{
    /** @var  AdmissionRepository */
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admissions = Admission::join('courses', 'courses.course_id', '=', 'admissions.course_id')->get();
        // dd($admissions);

        return view('admissions.index')
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new Admission.
     *
     * @return Response
     */
    public function create()
    {
        $course = Courses::all();

        return view('admissions.create', compact('course'));
    }

    /**
     * Store a newly created Admission in storage.
     *
     * @param CreateAdmissionRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmissionRequest $request)
    {
        $input = $request->all();
        //////////////
        // adding student image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $image = $request->file('image');

        $image_name = time() . "." . $image->getClientOriginalExtension();
        $image->move(public_path('student_image'), $image_name);
        // dd($input);
        //  dd($image_name);

        $student = new Admission;
        $student->roll_no = $request->roll_no;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->father_name = $request->father_name;
        $student->father_phone = $request->father_phone;
        $student->mother_name = $request->mother_name;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->current_address = $request->current_address;
        $student->nationality = $request->nationality;
        $student->passport = $request->passport;
        $student->status = $request->status;
        $student->dateregistered = $request->dateregistered;
        // $student->user_id = $request->user_id;
        $student->course_id = $request->class_id;
        $student->image = $image_name;

        // dd($student);
        $student->save();

        //////////
        // $admission = $this->admissionRepository->create($input);

        Flash::success('Admission saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = Courses::all();

        $admission = $this->admissionRepository->find($id);
        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit', compact('course'))->with('admission', $admission);
    }

    /**
     * Update the specified Admission in storage.
     *
     * @param int $id
     * @param UpdateAdmissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmissionRequest $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $image = $request->file('image');

        $image_name = time() . "." . $image->getClientOriginalExtension();
        $image->move(public_path('student_image'), $image_name);
        // dd($input);
        // dd($image_name);

        $student =  Admission::where("student_id", '=', $id)->first();
        $student->roll_no = $request->roll_no;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->father_name = $request->father_name;
        $student->father_phone = $request->father_phone;
        $student->mother_name = $request->mother_name;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->current_address = $request->current_address;
        $student->nationality = $request->nationality;
        $student->passport = $request->passport;
        $student->status = $request->status;
        $student->dateregistered = $request->dateregistered;
        // $student->user_id = $request->user_id;
        $student->course_id = $request->class_id;
        $student->image = $image_name;

        // dd($student);
        $student->save();



        // $admission = $this->admissionRepository->find($id);

        // if (empty($admission)) {
        //     Flash::error('Admission not found');

        //     return redirect(route('admissions.index'));
        // }

        // $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admissions.index'));
    }
}