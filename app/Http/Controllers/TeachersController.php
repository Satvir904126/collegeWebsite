<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;
use App\Repositories\TeachersRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Flash;
use Response;

class TeachersController extends AppBaseController
{
    /** @var  TeachersRepository */
    private $teachersRepository;

    public function __construct(TeachersRepository $teachersRepo)
    {
        $this->teachersRepository = $teachersRepo;
    }

    /**
     * Display a listing of the Teachers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $teachers = $this->teachersRepository->all();

        return view('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new Teachers.
     *
     * @return Response
     */
    public function create()
    {

        return view('teachers.create');
    }

    /**
     * Store a newly created Teachers in storage.
     *
     * @param CreateTeachersRequest $request
     *
     * @return Response
     */
    public function store(CreateTeachersRequest $request)
    {
        $input = $request->all();
        // dd($input);
        // adding teacher image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $image = $request->file('image');

        $image_name = time() . "." . $image->getClientOriginalExtension();
        $image->move(public_path('teacher_image'), $image_name);
        // dd($image);
        //  dd($image_name);

        $teacher = new Teachers;
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->gender = $request->gender;
        $teacher->email = $request->email;
        $teacher->dob = $request->dob;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->nationality = $request->nationality;
        $teacher->passport = $request->passport;
        $teacher->status = $request->status;
        $teacher->dateregistered = $request->dateregistered;
        $teacher->user_id = $request->user_id;
        $teacher->image = $image_name;

        // dd($teacher);
        $teacher->save();


        // $teachers = $this->teachersRepository->create($input);

        Flash::success('Teachers saved successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified Teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified Teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified Teachers in storage.
     *
     * @param int $id
     * @param UpdateTeachersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeachersRequest $request)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        $teachers = $this->teachersRepository->update($request->all(), $id);

        Flash::success('Teachers updated successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified Teachers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        $this->teachersRepository->delete($id);

        Flash::success('Teachers deleted successfully.');

        return redirect(route('teachers.index'));
    }
}